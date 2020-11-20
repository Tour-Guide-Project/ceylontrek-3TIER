<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php

    $user_level = $_SESSION['user_level'];
    print_r($level);

    // getting the user information
    $U_id = mysqli_real_escape_string($connection,$_SESSION['user_id']);

    if ($user_level == 'tourguide') {
        $result_set2 = delete_guide($connection,$U_id);
        //print_r($result_set2);
    }

    if ($user_level == 'tourist') {
        $result_set2 = delete_tourist($connection,$U_id);
        //print_r($result_set2);
    }

    if ($result_set2) {         
        header('Location:/ceylontrek-3tier/controller/view_users_admin_controller.php');
    }

    else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    }

?>
<?php mysqli_close($connection);?>