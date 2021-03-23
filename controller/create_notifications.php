<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\notifications_sql.php'); ?>

<?php

//if user has not logging yet
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

//if click notification btn
if(isset($_POST['notifications_btn'])){
    
    
    $errors = array();
    
    //check correct details has been entered
    if(!isset($_POST['notifications']) || strlen(trim($_POST['notifications']))<1){
        $errors[]= 'Notifications is required/Invalid';
    }
    if(!isset($_POST['title']) || strlen(trim($_POST['title']))<1){
        $errors[]= 'Title is required/Invalid';
    }
    //print_r($errors);
    if(empty($errors)){
        $notifications=mysqli_real_escape_string($connection,$_POST['notifications']);
        $title=mysqli_real_escape_string($connection,$_POST['title']);
 
        $secs=time();
        $h=($secs / 3600 % 24);
        $m=($secs / 60 % 60);

        $time= $h.":".$m;
        
		if (isset($_POST['gender']) && $_POST['gender']=="tourist"){
			$notification_level='tourist';
		}
		if (isset($_POST['gender']) && $_POST['gender']=="tour-guide"){
			$notification_level='tour-guide';
        }
        if(isset($_POST['gender']) && $_POST['gender']=="both"){
            $notification_level='both';
        }
        //set path and icon for relevant title in the popup form
        if($title=="new event"){
            $path='/ceylontrek-3tier/view/calendar.php';
            $icon='fa fa-calendar';
        }
        else if($title=="request a tour"){
            $path='../controller/tour_request_post_controller.php';
            $icon='fa fa-pencil-square-o';

        }
        else if($title=="smart search"){
            $path='../controller/SS_criteria_selection_controller.php';
            $icon='fa fa-picture-o';
        }
        else if($title=="tour guides"){
            $path='/ceylontrek-3tier/view/tourGuideSearchResults.php';
            $icon='fa fa-id-card-o';
        }
        else if($title=="tour packages"){
            $path='/ceylontrek-3tier/view/tourPackageResults.php';
            $icon='fa fa-floppy-o';
        }
        else if($notification_level=="tourist"){
            $path='/ceylontrek-3tier/view/touristDashboard.php';
            $icon='fa fa-eercast';
        }
        else {
            $path='/ceylontrek-3tier/view/guideDashboard.php';
            $icon='fa fa-eercast';       
        }

        
        if($notification_level=="tourist"){
            //get all ids from tourists table
            $notify_level="tourist";
            $result_set1=get_user_id($connection,$notify_level);

            while($row=mysqli_fetch_array($result_set1)){
                $user_id=$row['id'];
                $result_set=add_notification($connection,$notifications,$notification_level,$title,$time,$path,$user_id,$icon);
            }
        }      
        else if($notification_level=='tour-guide'){
            //get all ids from tourguide table
            $notify_level="tourguide";
            $result_set1=get_user_id($connection,$notify_level);

            while($row=mysqli_fetch_array($result_set1)){
                $user_id=$row['id'];
                $result_set=add_notification($connection,$notifications,$notification_level,$title,$time,$path,$user_id,$icon);
            }
        }
        //set both radio button
        else if($notification_level=='both'){
            $notify_level="tourist";
            $result_set1=get_user_id($connection,$notify_level);

            while($row=mysqli_fetch_array($result_set1)){
                $user_id=$row['id'];
                $result_set=add_notification($connection,$notifications,"tourist",$title,$time,'/ceylontrek-3tier/view/touristDashboard.php',$user_id,$icon);
            }
            $notify_level="tourguide";
            $result_set1=get_user_id($connection,$notify_level);

            while($row=mysqli_fetch_array($result_set1)){
                $user_id=$row['id'];
                $result_set=add_notification($connection,$notifications,"tour-guide",$title,$time,'/ceylontrek-3tier/view/guideDashboard.php',$user_id,$icon);
            }

        }         
       
        echo "<script>alert('You successfully send Notication!');</script>";
        if($_SESSION['level']=='admin'){
            echo "<script>window.location ='/ceylontrek-3tier/view/admin_dashboard.php' </script>";
        }
        if($_SESSION['level']=='moderator'){
            echo "<script>window.location ='/ceylontrek-3tier/view/moderator_dashboard.php' </script>";
        }
       
    }
    else{
        if($_SESSION['level']=='admin'){
            header('Location: /ceylontrek-3tier/view/admin_dashboard.php?'.http_build_query(array('param'=>$errors)));
        }
        if($_SESSION['level']=='moderator'){
            header('Location: /ceylontrek-3tier/view/moderator_dashboard.php?'.http_build_query(array('param'=>$errors)));
        }
       

    }
}


?>