<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
$users = array();

if (isset($_SESSION['id'])) {

    $user_level = $_GET['user_level'];
    //print_r($user_level);

    if ($user_level == 'tourguide') {

        if (isset($_GET['search']) || isset($_GET['word'])) {

            $key_email =  $_GET['word'];

            $key_email = htmlspecialchars($key_email);

            $key_email = mysqli_real_escape_string($connection, $key_email);

            $result_set = get_search_guides($connection, $key_email);
        } else {
            $result_set = get_guides($connection);
            //print_r($result_set);
        }
    }

    if ($user_level == 'tourist') {

        if (isset($_GET['search']) || isset($_GET['word'])) {

            $key_email =  $_GET['word'];

            $key_email = htmlspecialchars($key_email);

            $key_email = mysqli_real_escape_string($connection, $key_email);

            $result_set = get_search_tourists($connection, $key_email);
        } else {
            $result_set = get_tourists($connection);
            //print_r($result_set);
        }
    }

    if ($result_set) {

        $rows = mysqli_num_rows($result_set);
        $columns = mysqli_num_fields($result_set);
        //print_r($rows);
        //print_r($columns);

        for ($i = 0; $i < $rows; $i++) {
            $result = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
            //print_r($result);
            $users[] = $result;
        }

        //print_r($users);
        header('Location:/ceylontrek-3tier/view/view_users_page.php?user_level=' . $user_level . '&' . http_build_query(array('users' => $users)));
    } else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    }
}

?>
<?php mysqli_close($connection); ?>