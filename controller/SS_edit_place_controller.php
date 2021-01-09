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
    $all_activities = array();

    if (isset($_SESSION['id'])) {

        if (isset($_POST['edit_place'])) {

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
                    $_SESSION['place_id'] = $place_id;

                    // getting activities
                    $place_id = mysqli_real_escape_string($connection,$place_id);

                    $activity_result_set = search_activities($connection,$place_id);
                    //print_r($activity_result_set);

                    if ($activity_result_set) {

                        $rows = mysqli_num_rows($activity_result_set);
                        //print_r($rows);

                        for ($i=0; $i < $rows; $i++) { 
                            $result = mysqli_fetch_assoc($activity_result_set);
                            //print_r($result);
                            $activities[] = $result;
                        }

                        //print_r($activities);
                        $_SESSION['activities'] = $activities;
                    }

                    $activity_set = all_activities($connection);
                    if ($activity_set) {

                        $rows = mysqli_num_rows($activity_set);
                        //print_r($rows);

                        for ($i=0; $i < $rows; $i++) { 
                            $result = mysqli_fetch_assoc($activity_set);
                            //print_r($result);
                            $all_activities[] = $result;
                        }

                        //print_r($all_activities);
                        $_SESSION['all_activities'] = $all_activities;
                    }

                    header('Location:/ceylontrek-3tier/view/SS_edit.php');
                }

                else{
                    header('Location: /ceylontrek-3tier/view/SS_create.php?place_details_not_found');
                }
            }

            else{
                header('Location: /ceylontrek-3tier/view/SS_create.php?place_details_not_found');
            }
        }

        // update the place information
        if (isset($_POST['place_edit'])) {

            //check correct details has been entered
            if(!isset($_POST['place_name']) || strlen(trim($_POST['place_name']))<1){
                $errors[]='Place Name is requried/Invalid!';
            }
            
            if(!isset($_POST['short_description']) || strlen(trim($_POST['short_description']))<1){
                $errors[]='Short Descriptione is requried/Invalid!';
            }
            
            if(!isset($_POST['long_description']) || strlen(trim($_POST['long_description']))<1){
                $errors[]='Long Descriptione is requried/Invalid!';
            }

            $place_id = $_SESSION['place_id'];
            $place_name = $_POST['place_name'];
            $new_activity = $_POST['new_activity'];
            $activity_type = $_POST['type'];
            $short_description = $_POST['short_description'];
            $long_description = $_POST['long_description'];
            $image_upload = $_POST['image_upload'];

            if(empty($errors)) {

                $place_name = mysqli_real_escape_string($connection,$place_name);
                $_SESSION['place_name'] = $place_name;
                $short_description = mysqli_real_escape_string($connection,$short_description);
                $long_description = mysqli_real_escape_string($connection,$long_description);

                $update_result_set = update_place($connection,$place_id,$place_name,$short_description,$long_description,$image_upload);
            
                if($update_result_set) {

                    if(isset($_POST["activities"])) {
                        $activities = $_POST["activities"];
                    }

                    if ($new_activity) {
                             
                        if(!isset($_POST['new_activity']) || strlen(trim($_POST['new_activity']))<1){
                            $errors[]='New activity Name is requried/Invalid!';
                        }
                        // Add new activity
                        $new_activity = mysqli_real_escape_string($connection,$new_activity);
                        $activity_type = mysqli_real_escape_string($connection,$activity_type);
                        $new_result = new_activity($connection,$new_activity,$activity_type);

                        $activities[] = $new_activity;
                    }

                    if($activities) {

                        // Retrieving each selected option 
                        foreach ($activities as $activity){
                            //print_r($activity);
                            $activity = mysqli_real_escape_string($connection,$activity);
    
                            $result_1 = select_activity_id($connection,$activity);
                            $result_1 = mysqli_fetch_assoc($result_1);
                            $activity_id = $result_1['activity_id'];
                            //print_r($activity_id);
                            //var_dump($activity_id);
    
                            $result_set2 = update_connection($connection,$activity_id,$place_id); 
                        }    
                    }

                    header('Location:/ceylontrek-3tier/controller/SSviewmore_controller.php');
    
                }

                else{
                    $errors[]='Failed to update place.';
                }
            
            }

            else{
                header('Location: /ceylontrek-3tier/view/SS_create.php?'.http_build_query(array('param'=>$errors)).'&path='.$path.'');
            }
        }
    }   
?>
<?php mysqli_close($connection);?>