<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
//$details = array();

if (isset($_SESSION['id'])) {

    if (isset($_GET['delete_place'])) {

        $place_id = $_GET['delete_place'];
        // print_r($place_id);

        $place_id = mysqli_real_escape_string($connection, $place_id);
        $result_set1 = delete_connection($connection, $place_id);

        if ($result_set1) {

            //$place_name = mysqli_real_escape_string($connection,$place_name);
            $result_set2 = delete_place($connection, $place_id);
            //print_r($result_set);

            if ($result_set2) {
                header('Location:/ceylontrek-3tier/controller/SS_criteria_selection_controller.php?deleteSuccess');
            }
        }
    }
    // else {
    //     header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    // }
}
?>
<?php mysqli_close($connection); ?>