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

    if (isset($_GET['view_user'])) {

        $user_id = $_GET['view_user'];
        //print_r($user_id);
        $user_level = $_GET['user_level'];
        //print_r($user_level);

        //getting the user information
        $id = mysqli_real_escape_string($connection, $user_id);

        if ($user_level == 'tourguide') {
            $result_set = get_id_guide($connection, $id);
            //print_r($result_set);
        }

        if ($user_level == 'tourist') {
            $result_set = get_id_tourist($connection, $id);
            //print_r($result_set);
        }

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                //user found retrieve data
                $result = mysqli_fetch_assoc($result_set);

                //print data
                header('Location:/ceylontrek-3tier/view/UserAccountAdminView.php?user_level=' . $user_level . '&' . http_build_query(array('user_details' => $result)));
            } else {
                //user not found,redirect users page
                header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found1');
            }
        } else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found2');
        }
    }
}

?>
<?php mysqli_close($connection); ?>