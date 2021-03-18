<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\mod_approve_sql.php'); ?>

<?php

$guide_id = $_GET['view_guide_other_details'];
// print_r($guide_id);

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
//$details = array();

if (isset($_SESSION['id'])) {

    // getting the user information
    $guide_id = mysqli_real_escape_string($connection, $guide_id);
    //print_r($guide_id);

    $result_set = guide_other_details($connection, $guide_id);
    // print_r($result_set);

    if ($result_set) {

        if (mysqli_num_rows($result_set) == 1) {

            // user found retrieve data
            $result = mysqli_fetch_assoc($result_set);
            //print_r($result);

            $details = $result;

            header('Location:/ceylontrek-3tier/view/view_moderator_guide_others.php?' . http_build_query(array('param' => $details)));
        } else {
            //user not found,redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found1');
        }
    } else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found2');
    }
}

?>
<?php mysqli_close($connection); ?>