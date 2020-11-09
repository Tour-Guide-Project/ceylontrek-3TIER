<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php

    //print_r($_SESSION['id']);

    $user_id = $_GET['view_user'];
    //print_r($user_id);

    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $level = $_SESSION['level'];
    $errors=array();

    if (isset($_SESSION['id'])) {
        
        // getting the user information
        $id = mysqli_real_escape_string($connection,$user_id);

        if ($level == 'tourguide') {
            $result_set = get_id_guide($connection,$id);
            //print_r($result_set);
        }

        if ($level == 'tourist') {
            $result_set = get_id_tourist($connection,$id);
            //print_r($result_set);
        }

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                // user found retrieve data
                $result = mysqli_fetch_assoc($result_set);

                // pass data
                $_SESSION['user_id']=$result['id'];
                $_SESSION['first_name']=$result['first_name'];
				$_SESSION['last_name']=$result['last_name'];
				$_SESSION['email']=$result['email'];
				$_SESSION['gender']=$result['gender'];
				$_SESSION['address']=$result['address'];
                $_SESSION['contact']=$result['contact'];
                
                // print data
                header('Location:/ceylontrek-3tier/view/UserAccountAdminView.php');
            }

            else {
                //user not found,redirect users page
				header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found1');
            }
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found2');
        }
    }

    if (isset($_POST['delete_account'])) {

        // getting the user information
        $U_id = mysqli_real_escape_string($connection,$_SESSION['user_id']);

        if ($level == 'tourguide') {
            $result_set2 = delete_guide($connection,$U_id);
            //print_r($result_set2);
        }

        if ($level == 'tourist') {
            $result_set2 = delete_tourist($connection,$U_id);
            //print_r($result_set2);
        }

        if ($result_set2) {         
            header('Location:/ceylontrek-3tier/controller/view_users_admin_controller.php');
        }

        else {
            //query unsuccessfull, redirect users page
            header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

?>
<?php mysqli_close($connection);?>