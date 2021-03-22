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

if (isset($_SESSION['id'])) {

    if (isset($_POST['place_create'])) {

        //check correct details has been entered
        if (!isset($_POST['place_name']) || strlen(trim($_POST['place_name'])) < 1) {
            $errors[] = 'Place Name is requried/Invalid!';
        }

        if (!isset($_POST['short_description']) || strlen(trim($_POST['short_description'])) < 1) {
            $errors[] = 'Short Descriptione is requried/Invalid!';
        }

        if (!isset($_POST['long_description']) || strlen(trim($_POST['long_description'])) < 1) {
            $errors[] = 'Long Descriptione is requried/Invalid!';
        }

        $place_name = $_POST['place_name'];
        $new_activity = $_POST['new_activity'];
        $activity_type = $_POST['type'];
        $short_description = $_POST['short_description'];
        $long_description = $_POST['long_description'];

        $place_name = mysqli_real_escape_string($connection, $place_name);
        $new_activity = mysqli_real_escape_string($connection, $new_activity);
        $activity_type = mysqli_real_escape_string($connection, $activity_type);
        $short_description = mysqli_real_escape_string($connection, $short_description);
        $long_description = mysqli_real_escape_string($connection, $long_description);

        //checking if place already exists
        $result_place = search_place($connection, $place_name);

        if ($result_place) {
            if (mysqli_num_rows($result_place) == 1) {
                $errors[] = 'Your place already exists';
            }
        }

        if (isset($_POST["activities"])) {
            $activities = $_POST["activities"];
        }

        if ($new_activity) {

            // Add new activity
            $new_result = new_activity($connection, $new_activity, $activity_type);

            $activities[] = $new_activity;
        }

        if (empty($activities)) {
            $errors[] = 'Please include at least one activity';
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
                $errors[] = 'Only JPEG  files are allowed';
            }
            //checking file size
            if ($file_size > 5000000000) {
                $errors[] = 'File size should be less than 500mb';
            }
        }

        if (empty($errors)) {

            //create place
            $result_set = create_place($connection, $place_name, $short_description, $long_description);

            if ($result_set) {

                $result = select_place_id($connection, $place_name);
                $result = mysqli_fetch_assoc($result);
                $place_id = $result['place_id'];
                //var_dump($place_id);
                //print_r($place_id);

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

                header('Location:/ceylontrek-3tier/controller/SSviewmore_controller.php?view_place=' . $place_name . '&Success');
            } else {
                $errors[] = 'Failed to create place.';
                header('Location: /ceylontrek-3tier/view/SS_create.php?' . http_build_query(array('param' => $errors)) . '&path=' . $path . '');
            }
        } else {
            header('Location: /ceylontrek-3tier/view/SS_create.php?' . http_build_query(array('param' => $errors)) . '&path=' . $path . '');
        }
    }

    if (isset($_POST['cancel'])) {
        header('Location:/ceylontrek-3tier/controller/SS_criteria_selection_controller.php');
    }
}
?>

<?php mysqli_close($connection); ?>