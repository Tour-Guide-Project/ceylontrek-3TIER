<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\complains_admin_sql.php'); ?>
<?php 

// if click complain button admin
if(isset($_POST['submit_complain'])){

    $result_set1=get_complain_details($connection);

        if($result_set1){
            $record=array();

            while($row=mysqli_fetch_assoc($result_set1)){
                $record[]=$row;      
            }
            $records=serialize($record);
            
            header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');

        }
        
}
//checking view more button is entered and  is id set or not

if(isset($_GET['id'])){
    $complain_id=$_GET['id'];
    
    $result_set2=get_complain_viewmore($connection,$complain_id);
        
    if($result_set2){
        $view_record=mysqli_fetch_assoc($result_set2);
        $view_records=serialize($view_record);
        
        // check already reported complaint or not
        $result_set6=get_checked_status_admin($connection,$complain_id);
        $row=mysqli_fetch_assoc($result_set6) ;
        
        header('Location:/ceylontrek-3tier/view/full_complain_view_admin.php?checked_status_admin='.$row['checked_status_admin'].'&view_complain='.$view_records.'');
    }    
}

 //check if you  click checked  button or not
 if(isset($_GET['checked_id'])){
    $checked_id=$_GET['checked_id'];

    $result_set3=update_checked_complain($connection,$checked_id);
        
    if($result_set3){
        
        $result_set1=get_complain_details($connection);

        if($result_set1){
            $record=array();

            while($row=mysqli_fetch_assoc($result_set1)){
                $record[]=$row;      
            }
            $records=serialize($record);     
        }    
    header('Location:/ceylontrek-3tier/view/complains_page_admin.php?checked&complaint='.$records.''); 
                  
    }  
}


//if click newest button
if(isset($_POST['new_submit'])){
    $result_set1=get_newest_order($connection);

    if($result_set1){
        $record=array();

        while($row=mysqli_fetch_assoc($result_set1)){
            $record[]=$row;      
        }
        $records=serialize($record);
        //print_r($records);
        header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');

    }

}
//if click oldest button
if(isset($_POST['old_submit'])){
    $result_set2=get_oldest_order($connection);

    if($result_set2){
        $record=array();

        while($row=mysqli_fetch_assoc($result_set2)){
            $record[]=$row;      
        }
        $records=serialize($record);
        //print_r($records);
        
       header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');

    }
}
//if click tourist button
if(isset($_POST['tourist_submit'])){
    $result_set2=get_tourist_order($connection);

    if($result_set2){
        $record=array();

        while($row=mysqli_fetch_assoc($result_set2)){
            $record[]=$row;      
        }
        $records=serialize($record);
        //print_r($records);
        
       header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');

    }
}
//if click tour guide button
if(isset($_POST['tourguide_submit'])){
    $result_set2=get_tourguide_order($connection);

    if($result_set2){
        $record=array();

        while($row=mysqli_fetch_assoc($result_set2)){
            $record[]=$row;      
        }
        $records=serialize($record);
        //print_r($records);
        
       header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');

    }
}

//if click search button
if(isset($_POST['search'])){
    $get_word=$_POST['complainee_name'];
    $result_set3=search($connection,$get_word);

    if($result_set3){
        $record=array();

        while($row=mysqli_fetch_assoc($result_set3)){
            $record[]=$row;      
        }
        $records=serialize($record);
        //print_r($records);
        
        header('Location:/ceylontrek-3tier/view/complains_page_admin.php?complaint='.$records.'');
    }
    if(mysqli_num_rows($result_set3)==0){
        
        header('Location:/ceylontrek-3tier/view/complains_page_admin.php?no_complaint');
        
    }
}

if(isset($_POST['msg'])){
    header('Location:../controller/chat_controller.php');
}
?>