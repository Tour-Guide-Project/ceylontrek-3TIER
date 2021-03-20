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

    $result_set1 = guide_other_details($connection, $guide_id);
    //print_r($result_set1);

    if ($result_set1) {

        if (mysqli_num_rows($result_set1) == 1) {

            // user found retrieve data
            $result1 = mysqli_fetch_assoc($result_set1);
            //print_r($result1);

            if ($result1['haveVehicle'] == 1) {

                $result_set2 = vehicle_details($connection, $guide_id);
                //print_r($result_set2);

                if ($result_set2) {

                    if (mysqli_num_rows($result_set2) == 1) {

                        // user found retrieve data
                        $result2 = mysqli_fetch_assoc($result_set2);
                        //print_r($result2);

                        $details = array_merge($result1, $result2);
                        //print_r($details);

                        header('Location:/ceylontrek-3tier/view/view_moderator_guide_others.php?' . http_build_query(array('details' => $details)));
                    }
                }
            } else {

                $details = $result1;

                header('Location:/ceylontrek-3tier/view/view_moderator_guide_others.php?' . http_build_query(array('details' => $details)));
            }
        } else {
            //user not found,redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found1');
        }

        //header('Location:/ceylontrek-3tier/view/view_moderator_guide_others.php?' . http_build_query(array('param' => $details)));
    } else {
        //query unsuccessfull, redirect users page
        header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found2');
    }
}

?>
<?php mysqli_close($connection); ?>