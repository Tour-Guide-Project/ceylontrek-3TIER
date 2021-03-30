<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$errors = array();
$activities = array();
$all_activities = array();

if (isset($_SESSION['id'])) {

    // update the place information
    if (isset($_GET['place_edit'])) {

        //check correct details has been entered
        if (!isset($_GET['place_name']) || strlen(trim($_GET['place_name'])) < 1) {
            $errors[] = 'Place Name is requried/Invalid!';
        }
        //check name has only a-z
        elseif (!preg_match(("/[^0-9]/"), $_GET['place_name'])) {
            $errors[] = 'Place Name is Invalid';
        }

        if (!isset($_GET['short_description']) || strlen(trim($_GET['short_description'])) < 1) {
            $errors[] = 'Short Descriptione is requried/Invalid!';
        }

        if (!isset($_GET['long_description']) || strlen(trim($_GET['long_description'])) < 1) {
            $errors[] = 'Long Descriptione is requried/Invalid!';
        }

        // if (!isset($_GET['new_activity']) || strlen(trim($_GET['new_activity'])) < 1) {
        //     $errors[] = 'New Activity is requried/Invalid!';
        // }

        $place_id = $_GET['place_edit'];
        $place_name = $_GET['place_name'];
        $new_activity = $_GET['new_activity'];
        $activity_type = $_GET['type'];
        $short_description = $_GET['short_description'];
        $long_description = $_GET['long_description'];

        $place_name = mysqli_real_escape_string($connection, $place_name);
        $new_activity = mysqli_real_escape_string($connection, $new_activity);
        $activity_type = mysqli_real_escape_string($connection, $activity_type);
        $short_description = mysqli_real_escape_string($connection, $short_description);
        $long_description = mysqli_real_escape_string($connection, $long_description);

        if (isset($_GET["activities"])) {
            $activities = $_GET["activities"];
        }

        if ($new_activity) {

            $activity_set = all_activities($connection);
            if ($activity_set) {
                $rows = mysqli_num_rows($activity_set);
                for ($i = 0; $i < $rows; $i++) {
                    $result = mysqli_fetch_assoc($activity_set);
                    //print_r($result['activity']);
                    if ($result['activity'] == $new_activity) {
                        $x = 1;
                        //print_r($x);
                        break;
                    }
                }
            }

            if ($x == 1) {
                $errors[] = 'Activity already in the Current Activity Option';
            } else {
                // Add new activity
                $new_result = new_activity($connection, $new_activity, $activity_type);

                $activities[] = $new_activity;
            }
        }

        if ($_FILES['file']['name'] != NULL) {
            //image upload
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];

            $filename = $_FILES['file']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //print_r($ext);
            //checking the file type
            if ($ext !== 'jpg') {
                $errors[] = 'Only JPEG  files are allowed....';
            }
            //checking file size
            if ($file_size > 5000000000) {
                $errors[] = 'File size should be less than 500mb';
            }
        }

        if (empty($errors)) {

            //update place
            $update_result_set = update_place($connection, $place_id, $place_name, $short_description, $long_description);

            if ($update_result_set) {

                // Retrieving each selected option 
                foreach ($activities as $activity) {
                    //print_r($activity);
                    $activity = mysqli_real_escape_string($connection, $activity);

                    $result_1 = select_activity_id($connection, $activity);
                    $result_1 = mysqli_fetch_assoc($result_1);
                    $activity_id = $result_1['activity_id'];
                    //print_r($activity_id);
                    //var_dump($activity_id);

                    $result_set2 = update_connection($connection, $activity_id, $place_id);
                }

                //set image
                $target_path = "../resources/img/SmartSearchResult/";
                $target_path = $target_path . basename($_FILES['file']['name']);
                //print_r($target_path);

                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                    $img_result = upload_place_image($connection, $place_name, $target_path);
                }

                header('Location:/ceylontrek-3tier/controller/SSviewmore_controller.php?view_place=' . $place_id . '&updateSuccess');
            }
            // else {
            //     $errors[] = 'Failed to update place.';
            //     header('Location: /ceylontrek-3tier/view/SS_edit.php?' . http_build_query(array('param' => $errors)) . '&path=' . $path . '');
            // }
        } else {
            header('Location: /ceylontrek-3tier/controller/SS_edit_place_controller.php?edit_place=' . $place_id . '&' . http_build_query(array('param' => $errors)) . '');
        }
    }

    if (isset($_GET['cancel'])) {

        $place_id = $_GET['cancel'];

        header('Location:/ceylontrek-3tier/controller/SSviewmore_controller.php?view_place=' . $place_id . '&Success');
    }

    // if (isset($_GET['delete_one'])) {

    //     $activity = $_GET['delete_one'];
    //     $place_name = $_GET['place_name'];
    //     //print_r($activity);
    //     //print_r($place_name);

    //     $activity = mysqli_real_escape_string($connection, $activity);
    //     $place_name = mysqli_real_escape_string($connection, $place_name);

    //     $result = delete_activity($connection, $place_name, $activity);
    //     //print_r($result);

    //     if ($result_set) {
    //         header('Location:/ceylontrek-3tier/controller/SS_edit_place_controller.php?edit_place=' . $place_name . '&Success');
    //     }
    // }
}
?>
<?php mysqli_close($connection); ?>