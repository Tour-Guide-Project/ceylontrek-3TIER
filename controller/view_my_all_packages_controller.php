<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>
<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
$packages = array();

if (isset($_SESSION['id'])) {

    $guide_id = $_SESSION['id'];

    $guide_id = mysqli_real_escape_string($connection, $guide_id);

    //getting the packages information
    $result_set = guide_all_packages($connection, $guide_id);

    if ($result_set) {

        $rows = mysqli_num_rows($result_set);
        //print_r($rows);

        for ($i = 0; $i < $rows; $i++) {
            $result = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
            //print_r($result);
            $packages[] = $result;
        }

        //print_r($packages);
        if (!isset($_GET['successfullyDeleted'])) {
            header('Location:/ceylontrek-3tier/view/guideMyPackages.php?' . http_build_query(array('packages' => $packages)));
        }

        if (isset($_GET['successfullyDeleted'])) {
            header('Location:/ceylontrek-3tier/view/guideMyPackages.php?' . http_build_query(array('packages' => $packages)) . '&successfullyDeleted');
        }
    }
    // else {
    //     //query unsuccessfull, redirect users page
    //     header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    // }
}

?>
<?php mysqli_close($connection); ?>
