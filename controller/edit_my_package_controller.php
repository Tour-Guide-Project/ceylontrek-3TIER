<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>
<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

if (isset($_SESSION['id'])) {

    //if click edit my package button
    if (isset($_GET['edit_package'])) {

        $package_id = $_GET['edit_package'];
        // print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $_SESSION['my_package_id'] = $package_id;

        //getting the packages information
        $result = guide_package($connection, $package_id);

        if ($result) {

            if (mysqli_num_rows($result) == 1) {

                $package = mysqli_fetch_assoc($result);
                //print_r($package);
            }

            if (!isset($_GET['with_errors']) || isset($_GET['successfullyUpdated'])) {
                header('Location:/ceylontrek-3tier/view/edit_my_package.php?' . http_build_query(array('package' => $package)));
            }

            //print_r('theja');
            if (isset($_GET['with_errors'])) {
                $errors = ($_GET['errors']);
                //print_r($errors);

                header('Location:/ceylontrek-3tier/view/edit_my_package.php?' . http_build_query(array('package' => $package, 'param' => $errors)));
            }

            if (isset($_GET['successfullyUpdated'])) {
                header('Location:/ceylontrek-3tier/view/edit_my_package.php?' . http_build_query(array('package' => $package)) . '&successfullyUpdated');
            }
        }
    }
}
?>