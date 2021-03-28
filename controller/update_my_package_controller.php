<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>
<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

if (isset($_SESSION['id'])) {

    $package_id = $_SESSION['my_package_id'];

    //if click cancel button
    if (isset($_POST['cancel'])) {
        header('Location:/ceylontrek-3tier/controller/view_more_package_controller.php?view_more=' . $package_id . '&Success');
    }

    //if click update button in edit package
    if (isset($_POST['update_package'])) {

        $errors = array();

        if (!isset($_POST['package_name']) || strlen(trim($_POST['package_name'])) < 1) {
            $errors[] = 'Title is required/Invalid';
        }
        //check name has only a-z
        elseif (!preg_match(("/[^0-9]/"), $_POST['package_name'])) {
            $errors[] = 'Title Name is Invalid';
        }

        if (!isset($_POST['day_no']) || strlen(trim($_POST['day_no'])) > 2) {
            $errors[] = 'Duration is required/Invalid';
        } elseif (!is_numeric($_POST['day_no'])) {
            $errors[] = 'Duration is Invalid';
        }

        if (!isset($_POST['destinations']) || strlen(trim($_POST['destinations'])) < 1) {
            $errors[] = 'Destinations is required/Invalid';
        } elseif (!preg_match(("/[^0-9]/"), $_POST['destinations'])) {
            $errors[] = 'Destinations is Invalid';
        }

        if (!isset($_POST['display_price']) || strlen(trim($_POST['display_price'])) < 1) {
            $errors[] = 'Price is required/Invalid';
        } elseif (!is_numeric($_POST['display_price'])) {
            $errors[] = 'Price is Invalid';
        }

        if (!isset($_POST['members']) || strlen(trim($_POST['members'])) > 2) {
            $errors[] = 'No of Maximum Members is required/Invalid';
        } elseif (!is_numeric($_POST['members'])) {
            $errors[] = 'No of Maximum Members is Invalid';
        }

        if (!isset($_POST['pdescription']) || strlen(trim($_POST['pdescription'])) < 1) {
            $errors[] = 'The Description should be less than 2500 characters';
        }

        //print_r($errors);

        //if erros are not occured
        if (empty($errors)) {

            $package_name = mysqli_real_escape_string($connection, $_POST['package_name']);
            //print_r($package_name);
            $day_no = mysqli_real_escape_string($connection, $_POST['day_no']);
            //print_r($day_no);
            $destinations = mysqli_real_escape_string($connection, $_POST['destinations']);
            $members = mysqli_real_escape_string($connection, $_POST['members']);
            $display_price = mysqli_real_escape_string($connection, $_POST['display_price']);
            $pdescription = mysqli_real_escape_string($connection, $_POST['pdescription']);

            $result = update_package($connection, $package_id, $package_name, $day_no, $destinations, $members, $display_price, $pdescription);

            header('Location:/ceylontrek-3tier/controller/view_more_package_controller.php?view_more=' . $package_id . '&updateSuccess');
        } else {
            //print_r($errors);
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&' . http_build_query(array('errors' => $errors)) . '&with_errors');
        }
    }

    if (isset($_POST['upload_img1'])) {

        $target_path = "../resources/img/packages/";
        $target_path1 = $target_path . basename($_FILES['img1']['name']);

        if (move_uploaded_file($_FILES['img1']['tmp_name'], $target_path1)) {
            $result_set1 = update_image1($connection, $package_id, $target_path1);
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img2'])) {

        $target_path = "../resources/img/packages/";
        $target_path2 = $target_path . basename($_FILES['img2']['name']);
        print_r($target_path2);

        if (move_uploaded_file($_FILES['img2']['tmp_name'], $target_path2)) {
            $result_set1 = update_image2($connection, $package_id, $target_path2);
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img3'])) {

        $target_path = "../resources/img/packages/";
        $target_path3 = $target_path . basename($_FILES['img3']['name']);

        if (move_uploaded_file($_FILES['img3']['tmp_name'], $target_path3)) {
            $result_set1 = update_image3($connection, $package_id, $target_path3);
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img4'])) {

        $target_path = "../resources/img/packages/";
        $target_path4 = $target_path . basename($_FILES['img4']['name']);

        if (move_uploaded_file($_FILES['img4']['tmp_name'], $target_path4)) {
            $result_set1 = update_image4($connection, $package_id, $target_path4);
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
        }
    }

    //remove images
    if (isset($_POST['remove_img1'])) {

        $result_set1 = remove_image1($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
    }
    if (isset($_POST['remove_img2'])) {

        $result_set1 = remove_image2($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
    }
    if (isset($_POST['remove_img3'])) {

        $result_set1 = remove_image3($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
    }
    if (isset($_POST['remove_img4'])) {

        $result_set1 = remove_image4($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&successfullyUpdated');
    }
}
?>
<?php mysqli_close($connection); ?>