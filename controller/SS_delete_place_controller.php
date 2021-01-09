<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

    $place_id = $_SESSION['place_id'];
    $place_name = $_SESSION['place_name'];
    //print_r($place_name);

    $place_id = mysqli_real_escape_string($connection,$place_id);
    $result_set1 = delete_connection($connection,$place_id);

    if ($result_set1) {

        $place_name = mysqli_real_escape_string($connection,$place_name);
        $result_set2 = delete_place($connection,$place_name);
        //print_r($result_set);
        
        if ($result_set2) {         
            header('Location:/ceylontrek-3tier/view/SmartSearchCriteriaSelection.php');
        }

        else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }
?>
<?php mysqli_close($connection);?>