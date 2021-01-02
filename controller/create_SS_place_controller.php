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
    $target_path="../resources/img/SmartSearchResult/";

    if (isset($_SESSION['id'])) {
        
        if (isset($_POST['place_create'])) {

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
            $short_description = $_POST['short_description'];
            $long_description = $_POST['long_description'];
            $image_upload = $target_path.basename($_POST['image_upload']);

                    //$image_upload = $target_path.basename($_FILES['image_upload']['name']);
                    //$imageFileType = strtolower(pathinfo($image_upload,PATHINFO_EXTENSION));

                    // Check if image file is a actual image or fake image
                    // $check = getimagesize($_FILES['image_upload']['tmp_name']);
                    // if($check !== false) {
                    // $errors[] = "File is an image - " . $check["mime"] . ".";
                    // } else {
                    // $errors[] = "File is not an image.";
                    // }

                    // Check file size
                    // if ($_FILES["fileToUpload"]["size"] > 500000) {
                    //     $errors[] = "Sorry, your file is too large.";
                    // }

                    // Allow certain file formats
                    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    //     $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    // }

                    // if everything is ok, try to upload file
                    // if (move_uploaded_file($_FILES['image_upload']['tmp_name'], $image_upload)) {
                    //     //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    // } 
                    // else {
                    //     $errors[] = "Sorry, there was an error uploading your file.";
                    // }

            //checking if place already exists
            $place_name = mysqli_real_escape_string($connection,$place_name);
            $result_place = exist_place($connection,$place_name);

            if($result_place) {
                
                if(mysqli_num_rows($result_place)==1) {
			        $errors[]='Your place already exists';
		        }
            }  

            if(empty($errors)) {
                
                //$place_name = mysqli_real_escape_string($connection,$place_name);
                $short_description = mysqli_real_escape_string($connection,$short_description);
                $long_description = mysqli_real_escape_string($connection,$long_description);

                $result_set = create_place($connection , $place_name , $short_description , $long_description , $image_upload);

                $result = select_place_id($connection , $place_name);
                $result = mysqli_fetch_assoc($result);
                $place_id = $result['place_id'];
                //var_dump($place_id);
                //print_r($place_id);

                if(isset($_POST["activities"])) { 
                    // Retrieving each selected option 
                    foreach ($_POST['activities'] as $activity){
                        //print_r($activity);

                        $activity = mysqli_real_escape_string($connection,$activity);

                        $result_1 = select_activity_id($connection,$activity);
                        $result_1 = mysqli_fetch_assoc($result_1);
                        $activity_id = $result_1['activity_id'];
                        print_r($activity_id);
                        //var_dump($activity_id);

                        $result_set2 = update_connection($connection,$activity_id,$place_id); 
                    }    
                }

                if($result_set && $result_set2){
                    header('Location:/ceylontrek-3tier/view/SS_create.php');
                }
    
                else{
                    $errors[]='Failed to add the record.';
                }
            }

            else{
                header('Location: /ceylontrek-3tier/view/SS_create.php?'.http_build_query(array('param'=>$errors)).'&path='.$path.'');
            }

        }
    }

?>