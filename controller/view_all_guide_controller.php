<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors = array();
    $guides = array();

    if (isset($_SESSION['id'])) {

        $result_set = get_guides($connection);
        //print_r($result_set);

        if ($result_set) {

            $rows = mysqli_num_rows($result_set);
            $columns = mysqli_num_fields($result_set);
            //print_r($rows);
            //print_r($columns);

            for ($i=0; $i < $rows; $i++) { 
                $result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
                //print_r($result);
                $guides[] = $result;
            }

            //print_r($guides);
            $_SESSION['guides'] = $guides;
            header('Location:/ceylontrek-3tier/view/view_all_guide_page.php');
            
        }

        else {
            //query unsuccessfull, redirect users page
			header('Location:/ceylontrek-3tier/view/login.php?err=guide_not_found');
        }
    }

    if (isset($_POST['view_guide'])) {
        header('Location:/ceylontrek-3tier/controller/TourGuideAccountAdmin_controller.php');
	}

?>
<?php mysqli_close($connection);?>