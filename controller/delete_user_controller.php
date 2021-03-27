<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();

if (isset($_SESSION['id'])) {

    if (isset($_GET['user_level'])) {

        $user_level = $_GET['user_level'];
        //print_r($user_level);
        $user_id = $_GET['user_id'];
        //print_r($user_id);

        $U_id = mysqli_real_escape_string($connection, $user_id);

        if ($user_level == 'tourguide') {
            $result = delete_guide($connection, $U_id);
            //print_r($result);
        }

        if ($user_level == 'tourist') {
            $result = delete_tourist($connection, $U_id);
            //print_r($result);
        }

        if ($result) {
            header('Location:/ceylontrek-3tier/controller/view_users_admin_controller.php?user_level=' . $user_level . '');
        } else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }
}

?>
<?php mysqli_close($connection); ?>