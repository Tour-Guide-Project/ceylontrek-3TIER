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

if (isset($_SESSION['id'])) {

    if (isset($_GET['view_more'])) {

        $package_id = $_GET['view_more'];
        //print_r($package_id);

        $package_id = mysqli_real_escape_string($connection, $package_id);

        //getting the packages information
        $result = guide_package($connection, $package_id);

        if ($result) {

            if (mysqli_num_rows($result) == 1) {

                $package = mysqli_fetch_assoc($result);
                //print_r($package);

                if (!isset($_GET['updateSuccess']) && !isset($_GET['profile'])) {
                    header('Location:/ceylontrek-3tier/view/view_my_package.php?' . http_build_query(array('package' => $package)));
                }

                if (isset($_GET['updateSuccess'])) {
                    header('Location:/ceylontrek-3tier/view/view_my_package.php?' . http_build_query(array('package' => $package)) . '&updateSuccess');
                }

                if (isset($_GET['profile'])) {
                    header('Location:/ceylontrek-3tier/view/view_my_package.php?' . http_build_query(array('package' => $package)) . '&profile');
                }
            }
        }
        // else {
        //     //query unsuccessfull, redirect users page
        //     header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        // }
    }
}
?>
<?php mysqli_close($connection); ?>
