<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_ad_sql.php'); ?>

<?php

    
    if(isset($_GET['view_guide'])){
        $guide_id=$_GET['view_guide'];
        $_SESSION['current_guide_id']=$guide_id;
        $result_set= getGuideInfo($connection,$guide_id);
        if($result_set){
             $info = mysqli_fetch_assoc($result_set);
            // $_SESSION['guide_info']=$info;
            if($_GET['available']=="false"){
                $info['available']="false";
                header('Location:/ceylontrek-3tier/view/tourGuideProfile.php?'.http_build_query(array('guide_info'=>$info)));
            }
            else{
                header('Location:/ceylontrek-3tier/view/tourGuideProfile.php?'.http_build_query(array('guide_info'=>$info)));
            }
            
        }
        else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }
   


?>