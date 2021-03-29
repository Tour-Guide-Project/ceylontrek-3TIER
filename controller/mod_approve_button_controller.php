<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\mod_approve_sql.php'); ?>

<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
//$details = array();

if (isset($_SESSION['id'])) {

    if (isset($_GET['approve'])) {

        $guide_id = $_GET['approve'];
        // print_r($guide_id);

        // getting the user information
        $guide_id = mysqli_real_escape_string($connection, $guide_id);
        print_r($guide_id);

        $result = approve_guide($connection, $guide_id);
        // print_r($result);

        if ($result) {

            header('Location:/ceylontrek-3tier/view/moderator_dashboard.php');
        }
    } else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found2');
    }

    if(isset($_GET['msg'])){
        header('Location:../controller/chat_controller.php');
    }
}




?>
<?php mysqli_close($connection); ?>