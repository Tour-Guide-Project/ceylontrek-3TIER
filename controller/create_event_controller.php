<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\calendar_sql.php'); ?>
<?php

//if user has not logging yet
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

//checking submit button pressed
if(isset($_POST['submit'])){
    $errors = array();

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
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $events=$_POST['events'];
        $details=$_POST['details'];

        $result_set=add_event($connection,$startdate,$enddate,$events,$details);

        echo "<script>alert(' Successfully Event Added !');window.location ='/ceylontrek-3tier/view/create_event.php';</script>";

    }
    else{
        header('Location: /ceylontrek-3tier/view/create_event.php?'.http_build_query(array('param'=>$errors)));
    }

}

 
//checking cancel button pressed
if(isset($_POST['cancel'])){
    header('Location:/ceylontrek-3tier/view/moderator_dashboard.php');
}


?>