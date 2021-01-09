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

    if (isset($_SESSION['id'])) {

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

        $place_name = $_POST['place_name'];
        $new_activity = $_POST['new_activity'];
        $activity_type = $_POST['type'];
        $short_description = $_POST['short_description'];
        $long_description = $_POST['long_description'];
        $image_upload = $_POST['image_upload'];

        //checking if place already exists
        $place_name = mysqli_real_escape_string($connection,$place_name);
        $_SESSION['place_name'] = $place_name;
        $result_place = search_place($connection,$place_name);

        if($result_place) { 
            if(mysqli_num_rows($result_place)==1) {
                $errors[]='Your place already exists';
            }
        }  

        if(empty($errors)) {

            $short_description = mysqli_real_escape_string($connection,$short_description);
            $long_description = mysqli_real_escape_string($connection,$long_description);

            $result_set = create_place($connection , $place_name , $short_description , $long_description , $image_upload);

            if($result_set) {
            
                $result = select_place_id($connection , $place_name);
                $result = mysqli_fetch_assoc($result);
                $place_id = $result['place_id'];
                //var_dump($place_id);
                //print_r($place_id);

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
                $errors[]='Failed to create place.';
            }
        }

        else{
            header('Location: /ceylontrek-3tier/view/SS_create.php?'.http_build_query(array('param'=>$errors)).'&path='.$path.'');
        }
    }
?>

<?php mysqli_close($connection);?>