<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>
<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

if (isset($_SESSION['id'])) {

    if (isset($_GET['delete_package'])) {

        $package_id = $_GET['delete_package'];
        // print_r($package_id);

        $package_id = mysqli_real_escape_string($connection, $package_id);
        $result = delete_package($connection, $package_id);

        if ($result) {
            header('Location:/ceylontrek-3tier/controller/view_my_all_packages_controller.php?successfullyDeleted');
        }
    }
    // else {
    //     header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
    // }
}
?>
<?php mysqli_close($connection); ?>