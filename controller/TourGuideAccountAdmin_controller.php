<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php

    //print_r($_SESSION['id']);
    $_SESSION['guide_id'] = $_GET['view_guide'];
    //print_r($_SESSION['guide_id']);

    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors=array();

    if (isset($_SESSION['id'])) {
        
        // getting the user information
        $id = mysqli_real_escape_string($connection,$_SESSION['guide_id']);

        $result_set = get_id_guide($connection,$id);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                // user found retrieve data
                $result = mysqli_fetch_assoc($result_set);

                // pass data
                $_SESSION['first_name']=$result['first_name'];
				$_SESSION['last_name']=$result['last_name'];
				$_SESSION['email']=$result['email'];
				$_SESSION['gender']=$result['gender'];
				$_SESSION['address']=$result['address'];
                $_SESSION['contact']=$result['contact'];
                
                // print data
                header('Location:/ceylontrek-3tier/view/TourGuideAccountAdminView.php');
            }

            else {
                //user not found,redirect users page
				header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
            }
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

    if (isset($_GET['delete_account'])) {

        //print_r($guide_id);

        // getting the user information
        $id = mysqli_real_escape_string($connection,$_SESSION['guide_id']);

        $result_set = delete_guide($connection,$id);
        //print_r($result_set);

        if ($result_set) {
            
            header('Location:/ceylontrek-3tier/controller/view_all_guide_controller.php');
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

?>
<?php mysqli_close($connection);?>