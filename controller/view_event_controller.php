<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\calendar_sql.php'); ?>
<?php

//if user has not logging yet
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

//checking search button pressed
if(isset($_POST['search'])){
    $errors = array();

    if(!isset($_POST['startdate']) || strlen(trim($_POST['startdate']))<1){
        $errors[]= 'Date is required/Invalid';
    }

    //if error is empty
	if(empty($errors)){
        $startdate=mysqli_real_escape_string($connection,$_POST['startdate']);

        $result_set=get_event($connection,$startdate);
        
        if($result_set){
            $event=array();
        
            while($row=mysqli_fetch_assoc($result_set)){
                $event[]=$row; 
                
            }
            $startdate=serialize($startdate);
            $events=serialize($event); 
             
            header('Location:/ceylontrek-3tier/view/view_event_next.php?startdate='.$startdate.'&event='.$events.'');
        }
       
    }
    //if error is not empty
    else{
        header('Location: /ceylontrek-3tier/view/view_event.php?'.http_build_query(array('param'=>$errors)));
    }

}

//checking edit button is entered and  is id set or not

if(isset($_GET['id'])){
    $event_id=$_GET['id'];
    $_SESSION['event_id']=$event_id;
    $result_set=get_event2($connection,$event_id);
        
    if($result_set){

        $record=mysqli_fetch_assoc($result_set);
        $events=serialize($record); 
        header('Location:/ceylontrek-3tier/view/view_event_next_update.php?event='.$events.'');
    }    
}
    
//checking submit button pressed
if(isset($_POST['submit'])){
    $errors = array();

    //check errors
    if(!isset($_POST['startdate']) || strlen(trim($_POST['startdate']))<1){
        $errors[]= 'Start Date is required/Invalid';
    }
    if(!isset($_POST['events']) || strlen(trim($_POST['events']))<5){
        $errors[]= 'Event is required/Invalid';
    }
    if(!isset($_POST['details']) || strlen(trim($_POST['details']))<5){
        $errors[]= 'Add more is required/Invalid';
    }
    if(!empty($_POST['enddate'])){
        if(strtotime(($_POST['startdate'])) > (strtotime($_POST['enddate'])))
        {
            $errors[]='Start Date should be in front of End Date!';
        }
    }

    //if error is empty
    if(empty($errors)){

        $id=$_SESSION['event_id'];
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $events=$_POST['events'];
        $details=$_POST['details'];
   
        $result_set=update_event($connection,$startdate,$enddate,$events,$details,$id);
        
        if($result_set){
           echo "<script>alert('Event Updated Successfully!'); window.location ='/ceylontrek-3tier/controller/view_event_controller.php?id=$id'</script>";
        }
    
    }
    //if error is not empty
    else{
        $id=$_SESSION['event_id'];
        $result_set=get_event3($connection,$id);
        
        if($result_set){
        
            $record=mysqli_fetch_assoc($result_set);
            $events=serialize($record); 
            header('Location: /ceylontrek-3tier/view/view_event_next_update.php?event='.$events.'&'.http_build_query(array('param'=>$errors)));
        }
       
    }

}

//check delete button is pressed
if(isset($_POST['delete'])){
        $id=$_SESSION['event_id'];
        $result_set=delete_event($connection,$id);
        
        header('Location: /ceylontrek-3tier/view/view_event.php?event-deleted=true');
        
}



//checking submit1 button pressed
if(isset($_POST['submit1'])){
    header('Location: /ceylontrek-3tier/view/create_event.php?');   
}

 
//checking cancel button pressed
if(isset($_POST['cancel'])){
    header('Location:/ceylontrek-3tier/view/moderator_dashboard.php');
}


//checking cancel button in view next pressed
if(isset($_POST['cancel_next'])){
    header('Location:/ceylontrek-3tier/view/view_event.php');
}


?>