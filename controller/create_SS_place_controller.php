<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors=array();

    if (isset($_SESSION['id'])) {
        
        if (isset($_POST['place_create'])) {

            //check correct details has been entered
		    if(!isset($_POST['place_name']) || strlen(trim($_POST['place_name']))<1){
            $errors[]='Place Name is requried/Invalid!';
            }
            
            if(!isset($_POST['short_description']) || strlen(trim($_POST['short_description']))<1){
            $errors[]='Short Descriptione is requried/Invalid!';
            }
            
            if(!isset($_POST['long_description']) || strlen(trim($_POST['long_description']))<1){
            $errors[]='Long Descriptione is requried/Invalid!';
            }

            $place_name = $_POST['place_name'];
            $short_description = $_POST['short_description'];
            $long_description = $_POST['long_description'];

            if(empty($errors)) {
                
                $place_name = mysqli_real_escape_string($connection,$place_name);
                $short_description = mysqli_real_escape_string($connection,$short_description);
                $long_description = mysqli_real_escape_string($connection,$long_description);

                $result_set = create_place($connection , $place_name , $short_description , $long_description);
            }

        }
    }

?>