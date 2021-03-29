<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\complains_sql.php'); ?>
<?php 

    //tourist complains
	if(isset($_POST['submit_tourist'])){
        $errors = array();
    
        //check correct details has been entered
        if(!isset($_POST['complains']) || strlen(trim($_POST['complains']))<6){
            $errors[]= 'Your Complain is required/Invalid';
        }
        elseif(preg_match(("/^([0-9]*)$/"),$_POST['complains'])){
            $errors[]= 'Your Complain is Invalid';     
        }
        if(!isset($_POST['title']) || strlen(trim($_POST['title']))<3){
            $errors[]= 'Title is required/Invalid';
        }
        elseif(preg_match(("/^([0-9]*)$/"),$_POST['title'])){
            $errors[]= 'Title is Invalid';     
        }
        if(empty($errors)){
            $title=mysqli_real_escape_string($connection,$_POST['title']);
            $complains=mysqli_real_escape_string($connection,$_POST['complains']);

            $complainee_level='tourist';
            $user_id=$_SESSION['id'];
            $result_set1=get_user_details($connection,$user_id,$complainee_level);
            // print_r($result_set1);
            
            while($row=mysqli_fetch_array($result_set1)){
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
                $complainee=$first_name." ".$last_name;
                $date=date('Y-m-d');
                $time=date('H:i:s');

                $result_set2=add_complain($connection,$title,$complains,$date,$time,$complainee_level,$complainee);
               
            }
            echo "<script>alert(' You have Added complaint Successfully!');window.location ='/ceylontrek-3tier/view/touristDashboard.php';</script>";
            

        }
        else{
            header('Location: /ceylontrek-3tier/view/touristDashboard.php?'.http_build_query(array('param'=>$errors)));
        }
    }
    

    // guide complains
    if(isset($_POST['submit_tourguide'])){
        $errors = array();
    
        //check correct details has been entered
        if(!isset($_POST['complains']) || strlen(trim($_POST['complains']))<6){
            $errors[]= 'Your Complain is required/Invalid';
        }
        elseif(preg_match(("/^([0-9]*)$/"),$_POST['complains'])){
            $errors[]= 'Your Complain is Invalid';     
        }
        if(!isset($_POST['title']) || strlen(trim($_POST['title']))<3){
            $errors[]= 'Title is required/Invalid';
        }
        elseif(preg_match(("/^([0-9]*)$/"),$_POST['title'])){
            $errors[]= 'Title is Invalid';     
        }
        if(empty($errors)){
            $title=mysqli_real_escape_string($connection,$_POST['title']);
            $complains=mysqli_real_escape_string($connection,$_POST['complains']);

            $complainee_level='tourguide';
            $user_id=$_SESSION['id'];
            $result_set1=get_user_details($connection,$user_id,$complainee_level);
            // print_r($result_set1);
            
            while($row=mysqli_fetch_array($result_set1)){
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
                $complainee=$first_name." ".$last_name;
                $date=date('Y-m-d');
                $time=date('H:i:s');

                $result_set2=add_complain($connection,$title,$complains,$date,$time,$complainee_level,$complainee);
               
            }
            echo "<script>alert(' You have Added complaint Successfully!');window.location ='/ceylontrek-3tier/view/guideDashboard.php';</script>";
            

        }
        else{
            header('Location: /ceylontrek-3tier/view/guideDashboard.php?'.http_build_query(array('param'=>$errors)));
        }
    }
    
// if click complain button moderator
if(isset($_POST['complain_button'])){

    $result_set3=get_complain_details($connection);

        if($result_set3){
            $record=array();

            while($row=mysqli_fetch_assoc($result_set3)){
                $record[]=$row;      
            }
            $records=serialize($record);
            
            header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');

        }
        
}

//checking view more button is entered and  is id set or not

if(isset($_GET['id'])){
    $complain_id=$_GET['id'];
    
    $result_set4=get_complain_viewmore($connection,$complain_id);
        
    if($result_set4){
        $view_record=mysqli_fetch_assoc($result_set4);
        $view_records=serialize($view_record); 

        // check already reported complaint or not
        $result_set6=get_reported_status($connection,$complain_id);
        $row=mysqli_fetch_assoc($result_set6) ; 
        
      
        header('Location:/ceylontrek-3tier/view/full_complain_view.php?report_status='.$row['report_status'].'&checked_status='.$row['checked_status'].'&view_complain='.$view_records.'');
    }    
}


//check if you  click report admin button or not
if(isset($_GET['report_id'])){
    $report_id=$_GET['report_id'];

    $result_set5=update_reported_complain($connection,$report_id);
        
    if($result_set5){
        
        $result_set3=get_complain_details($connection);

        if($result_set3){
            $record=array();

            while($row=mysqli_fetch_assoc($result_set3)){
                $record[]=$row;      
            }
            $records=serialize($record);     
        }    
    header('Location:/ceylontrek-3tier/view/complains_page.php?success&complaint='.$records.''); 
                  
    }  
}


 //check if you  click checked  button or not
 if(isset($_GET['checked_id'])){
    $checked_id=$_GET['checked_id'];

    $result_set5=update_checked_complain($connection,$checked_id);
        
    if($result_set5){
        
        $result_set3=get_complain_details($connection);

        if($result_set3){
            $record=array();

            while($row=mysqli_fetch_assoc($result_set3)){
                $record[]=$row;      
            }
            $records=serialize($record);     
        }    
    header('Location:/ceylontrek-3tier/view/complains_page.php?checked&complaint='.$records.''); 
                  
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
        header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');

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
        
       header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');

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
        
       header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');

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
        
       header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');

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
        
        header('Location:/ceylontrek-3tier/view/complains_page.php?complaint='.$records.'');
    }
    if(mysqli_num_rows($result_set3)==0){
        
        header('Location:/ceylontrek-3tier/view/complains_page.php?no_complaint');
        
    }
}


if(isset($_POST['msg'])){
    header('Location:../controller/chat_controller.php');
}


?>


<?php mysqli_close($connection);?>