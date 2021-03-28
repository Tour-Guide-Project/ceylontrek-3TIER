<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>
<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

if (isset($_SESSION['id'])) {

    //if click cancel button
    if (isset($_GET['cancel'])) {

        $package_id = $_GET['cancel'];
        //print_r($package_id);

        header('Location:/ceylontrek-3tier/controller/view_more_package_controller.php?view_more=' . $package_id . '&Success');
    }


    //if click update button in edit package
    if (isset($_GET['update_package'])) {

        $errors = array();

        if (!isset($_GET['package_name']) || strlen(trim($_GET['package_name'])) < 1) {
            $errors[] = 'Title is required/Invalid';
        }
        //check name has only a-z
        elseif (!preg_match(("/[^0-9]/"), $_GET['displayName'])) {
            $errors[] = 'Title Name is Invalid';
        }

        if (!isset($_GET['day_no']) || strlen(trim($_GET['day_no'])) > 2) {
            $errors[] = 'Duration is required/Invalid';
        } elseif (!is_numeric($_GET['day_no'])) {
            $errors[] = 'Duration is Invalid';
        }

        if (!isset($_GET['destinations']) || strlen(trim($_GET['destinations'])) < 1) {
            $errors[] = 'Destinations is required/Invalid';
        } elseif (!preg_match(("/[^0-9]/"), $_GET['destinations'])) {
            $errors[] = 'Destinations is Invalid';
        }

        if (!isset($_GET['display_price']) || strlen(trim($_GET['display_price'])) < 1) {
            $errors[] = 'Price is required/Invalid';
        } elseif (!is_numeric($_GET['display_price'])) {
            $errors[] = 'Price is Invalid';
        }

        if (!isset($_GET['members']) || strlen(trim($_GET['members'])) > 2) {
            $errors[] = 'No of Maximum Members is required/Invalid';
        } elseif (!is_numeric($_GET['members'])) {
            $errors[] = 'No of Maximum Members is Invalid';
        }

        if (!isset($_GET['pdescription']) || strlen(trim($_GET['pdescription'])) < 1) {
            $errors[] = 'The Description should be less than 2500 characters';
        }

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        //if erros are not occured
        if (empty($errors)) {

            $package_name = mysqli_real_escape_string($connection, $_GET['package_name']);
            $day_no = mysqli_real_escape_string($connection, $_GET['day_no']);
            $destinations = mysqli_real_escape_string($connection, $_GET['destinations']);
            $members = mysqli_real_escape_string($connection, $_GET['members']);
            $display_price = mysqli_real_escape_string($connection, $_GET['display_price']);
            $pdescription = mysqli_real_escape_string($connection, $_GET['pdescription']);

            $result = update_package($connection, $package_id, $package_name, $day_no, $destinations, $members, $display_price, $pdescription);

            header('Location:/ceylontrek-3tier/controller/view_more_package_controller.php?view_more=' . $package_id . '&Success');
        } else {
            header('Location:/ceylontrek-3tier/controller/edit_my_package_controller.php?edit_package=' . $package_id . '&' . http_build_query(array('param' => $errors)));
        }
    }

    if (isset($_POST['upload_img1'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $target_path = "../resources/img/packages/";
        $target_path1 = $target_path . basename($_FILES['file']['name'][0]);

        if (move_uploaded_file($_FILES['file']['tmp_name'][0], $target_path1)) {
            $result_set1 = update_image1($connection, $package_id, $target_path1);
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img2'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $target_path = "../resources/img/packages/";
        $target_path2 = $target_path . basename($_FILES['file']['name'][1]);

        if (move_uploaded_file($_FILES['file']['tmp_name'][1], $target_path2)) {
            $result_set1 = update_image2($connection, $package_id, $target_path2);
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img3'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $target_path = "../resources/img/packages/";
        $target_path3 = $target_path . basename($_FILES['file']['name'][2]);

        if (move_uploaded_file($_FILES['file']['tmp_name'][2], $target_path3)) {
            $result_set1 = update_image3($connection, $package_id, $target_path3);
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
        }
    }

    if (isset($_POST['upload_img4'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $target_path = "../resources/img/packages/";
        $target_path4 = $target_path . basename($_FILES['file']['name'][3]);

        if (move_uploaded_file($_FILES['file']['tmp_name'][3], $target_path4)) {
            $result_set1 = update_image4($connection, $package_id, $target_path4);
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
        }
    }

    //remove images
    if (isset($_POST['remove_img1'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $result_set1 = remove_image1($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
    if (isset($_POST['remove_img2'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $result_set1 = remove_image2($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
    if (isset($_POST['remove_img3'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $result_set1 = remove_image3($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
    if (isset($_POST['remove_img4'])) {

        $package_id = $_GET['update_package'];
        //print_r($package_id);
        $package_id = mysqli_real_escape_string($connection, $package_id);

        $result_set1 = remove_image4($connection, $package_id);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }

    //successfully update alert  -->
    if (isset($_GET['successfullyUpdated'])) {

        $guide_id = $_SESSION['id'];

        $result_set1 = get_details($connection, $guide_id);
        $result_set2 = get_vehicle_details($connection, $guide_id);

        if ($result_set1 && $result_set2) {

            $record = array();
            $vrecord = array();

            while ($row1 = mysqli_fetch_assoc($result_set1)) {
                $record[] = $row1;
            }
            while ($row2 = mysqli_fetch_assoc($result_set2)) {
                $vrecord[] = $row2;
            }
            $records = serialize($record);
            $vrecords = serialize($vrecord);

            header('Location:/ceylontrek-3tier/view/edit_guide_myprofile.php?successfullyUpdated&' . http_build_query(array('data' => $records, 'vdata' => $vrecords, 'param' => $errors)));
        }
    }
}
?>
<?php mysqli_close($connection); ?>