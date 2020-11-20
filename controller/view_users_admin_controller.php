<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $user_level = $_SESSION['user_level'];
    $errors = array();
    $users = array();

    if (isset($_SESSION['id'])) {

        if ($user_level == 'tourguide') {

            if ($_GET['search'] || $_GET['word']) {

                $key_email =  $_GET['word'];
                
                $key_email = htmlspecialchars($key_email);
        
                $key_email = mysqli_real_escape_string($connection,$key_email);
        
                $result_set = get_search_guides($connection,$key_email);
            }

            else {
                $result_set = get_guides($connection);
                //print_r($result_set);
            }
            
        }

        if ($user_level == 'tourist') {

            if ($_GET['search'] || $_GET['word']) {

                $key_email =  $_GET['word'];
                
                $key_email = htmlspecialchars($key_email);
        
                $key_email = mysqli_real_escape_string($connection,$key_email);
        
                $result_set = get_search_tourists($connection,$key_email);
            }
            
            else {
                $result_set = get_tourists($connection);
                //print_r($result_set);
            }
        }
        
        if ($result_set) {

            $rows = mysqli_num_rows($result_set);
            $columns = mysqli_num_fields($result_set);
            //print_r($rows);
            //print_r($columns);

            for ($i=0; $i < $rows; $i++) { 
                $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
                //print_r($result);
                $users[] = $result;
            }

            //print_r($users);
            $_SESSION['users'] = $users;
            header('Location:/ceylontrek-3tier/view/view_users_page.php');
            
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

    if (isset($_GET['view_user'])) {
        header('Location:/ceylontrek-3tier/controller/UserAccountAdmin_controller.php');
	}

?>
<?php mysqli_close($connection);?>