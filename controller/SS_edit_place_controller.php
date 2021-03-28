<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>
<?php

// check if a user is logged in
if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

$activities = array();
$all_activities = array();

if (isset($_SESSION['id'])) {

    if (isset($_GET['edit_place'])) {

        $place_id = $_GET['edit_place'];
        //print_r($place_id);

        $place_id = mysqli_real_escape_string($connection, $place_id);

        // getting the place information
        $result_set = search_place($connection, $place_id);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                $result_place = mysqli_fetch_assoc($result_set);
                //print_r($result_place);

                // getting activities
                $place_id = mysqli_real_escape_string($connection, $place_id);

                $activity_result_set = search_activities($connection, $place_id);
                //print_r($activity_result_set);

                if ($activity_result_set) {

                    $rows = mysqli_num_rows($activity_result_set);
                    //print_r($rows);

                    for ($i = 0; $i < $rows; $i++) {
                        $result = mysqli_fetch_assoc($activity_result_set);
                        //print_r($result);
                        $activities[] = $result;
                    }
                    //print_r($activities);
                }

                $activity_set = all_activities($connection);
                if ($activity_set) {

                    $rows = mysqli_num_rows($activity_set);
                    //print_r($rows);

                    for ($i = 0; $i < $rows; $i++) {
                        $result = mysqli_fetch_assoc($activity_set);
                        //print_r($result);
                        $all_activities[] = $result;
                    }
                    //print_r($all_activities);
                }

                if (isset($_GET['param'])) {
                    $errors = $_GET['param'];
                }

                header('Location:/ceylontrek-3tier/view/SS_edit.php?' . http_build_query(array('details' => $result_place, 'activities' => $activities, 'all_activities' => $all_activities, 'param' => $errors)));
            }
        }
        // else {
        //     header('Location: /ceylontrek-3tier/view/SSR_ViewMorePage.php?place_details_not_found');
        // }
    }
}
?>
<?php mysqli_close($connection); ?>