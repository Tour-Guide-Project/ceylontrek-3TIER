<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_upload_image_sql.php'); ?>
<?php

$id=$_SESSION['id'];
$level=$_SESSION['level'];
//print_r($level);

if(isset($_POST['submit'])){
    $target_path="../resources/images/";
    $target_path=$target_path.basename($_FILES['file']['name']);

    if(move_uploaded_file($_FILES ['file']['tmp_name'],$target_path)){
        $result_set1=upload_image($connection,$id,$level,$target_path);

        if($result_set1){
            $result_set2=get_image($connection,$id,$level);
            $record=mysqli_fetch_assoc($result_set2);
            $path=$record['image_path'];
            //print_r($path);
            header('Location:/ceylontrek-3tier/view/view_admin_profile.php?path='.$path.'&Success');

        }
        else{
            header('Location:/ceylontrek-3tier/view/view_admin_profile.php?insertimage=false');
        }

    }
}
if(isset($_POST['cancel'])){
    if($level=='admin'){
        header('Location:/ceylontrek-3tier/view/view_admin_profile.php?removeprofileimage=true');
    }
    if($level=='moderator'){
        header('Location:/ceylontrek-3tier/view/view_moderator_profile.php?removeprofileimage=true');
    }
    if($level=='tourguide'){
        header('Location:/ceylontrek-3tier/view/view_guide_profile.php?removeprofileimage=true');
    }
    if($level=='tourist'){
        header('Location:/ceylontrek-3tier/view/view_tourist_profile.php?removeprofileimage=true');
    }
   
}

?>