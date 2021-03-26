<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_package_ad_sql.php'); ?>

<?php

    
    if(isset($_GET['view_package'])){
        $package_id=$_GET['view_package'];
       $_SESSION['current_package_id']=$package_id;
        $result_set= getPackageInfo($connection,$package_id);
        if($result_set){
             $info = mysqli_fetch_assoc($result_set);
             $_SESSION['current_guide_id']=$info['guide_id'];
            if($_GET['available']=="false"){
                $info['available']="false";
                header('Location:/ceylontrek-3tier/view/tourPackage.php?'.http_build_query(array('guide_info'=>$info)));
            }
            else if($_GET['reservation']=="success"){
                $info['reservation']="success";
                header('Location:/ceylontrek-3tier/view/tourPackage.php?'.http_build_query(array('guide_info'=>$info)));
            }
            else{
                header('Location:/ceylontrek-3tier/view/tourPackage.php?'.http_build_query(array('guide_info'=>$info)));
            }
            
        }
        else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/homepage.php?err=guide_not_found');
        }
    }
   


?>