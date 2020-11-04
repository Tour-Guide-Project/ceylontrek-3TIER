<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors=array();

    if (isset($_SESSION['id'])) {

        $result_set = get_guides($connection);

        if ($result_set) {

            $_SESSION['result_set'] = $result_set;

            header('Location:/ceylontrek-3tier/view/view_all_guide_page.php');

            // if (mysqli_num_rows($result_set) >= 1) {
            
            //     $result = mysqli_fetch_assoc($result_set);

            //     while ($result) {
            //         // pass data
            //         $_SESSION['first_name']=$result['first_name'];
            //         //  $_SESSION['last_name']=$result['last_name'];
            //         $_SESSION['email']=$result['email'];

            //         // print data
            //         header('Location:/ceylontrek-3tier/view/view_all_guide_page.php');
            //     }
            // }
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

?>
<?php mysqli_close($connection);?>