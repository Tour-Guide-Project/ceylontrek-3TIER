<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>

<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors=array();
    $activities = array();

    if (isset($_SESSION['id'])) {

        // getting the place information
        $place_name = mysqli_real_escape_string($connection,$_SESSION['place_name']);

        $result_set = search_place($connection,$place_name);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                $result = mysqli_fetch_assoc($result_set);

                // pass data
                //$_SESSION['place_name']=$result['place_name'];
                //$_SESSION['image_path']=$result['image_path'];
                //$_SESSION['long_description']=$result['long_description'];
                $_SESSION['short_description']=$result['short_description'];
                $place_id = $result['place_id'];

                // getting activities
                $place_id = mysqli_real_escape_string($connection,$place_id);

                $activity_result_set = search_activities($connection,$place_id);
                //print_r($activity_result_set);

                if ($activity_result_set) {

                    foreach ($activity_result_set as $activity) {
                        $activities[] = $activity;
                    }
                    //print_r($activities);
                    $_SESSION['activities'] = $activities;
                }  

				//header('Location:/ceylontrek-3tier/view/SS_create.php');
            }

            else{
                header('Location: /ceylontrek-3tier/view/SS_create.php?place_details_not_found');
            }
        }

        else{
            header('Location: /ceylontrek-3tier/view/SS_create.php?place_details_not_found');
        }



    }   


?>
<?php mysqli_close($connection);?>