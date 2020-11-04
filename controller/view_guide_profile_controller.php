<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php
    // check if a user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location:/ceylontrek-3tier/view/login.php');
    }

    $errors=array();

    if (isset($_SESSION['id'])) {
        
        // getting the user information
        $id = mysqli_real_escape_string($connection,$_SESSION['id']);

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
                header('Location:/ceylontrek-3tier/view/view_guide_profile.php');
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

    // checking update button is has been pressed
    if (isset($_POST['submit'])) {
        
        //check correct details has been entered
		if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
			$errors[]='First name is requried/Invalid!';
		}

		if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
			$errors[]='Last name is requried/Invalid!';
		}
		if(!isset($_POST['tel_no']) || strlen(trim($_POST['tel_no']))<1){
			$errors[]='Contact Details is requried/Invalid!';
		}

		if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1){
			$errors[]='Address is requried/Invalid!';
		}
		if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
			$errors[]='Email Address is requried/Invalid!';
        }
        
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		//$email=$_POST['email'];
		$contact=$_POST['tel_no'];
		$address=$_POST['address'];
        $gender=$_POST['gender'];
        
        // after pressed update button, add new data to the database
        if(empty($errors)) {

            //no errors found...adding new records
			$first_name=mysqli_real_escape_string($connection,$_POST['first_name']);
			$last_name=mysqli_real_escape_string($connection,$_POST['last_name']);
			$contact=mysqli_real_escape_string($connection,$_POST['tel_no']);
			$address=mysqli_real_escape_string($connection,$_POST['address']);
            $gender=mysqli_real_escape_string($connection,$_POST['gender']);
            
            //email address already sanitized
            
            $result_set2 = update_guide_query($connection, $id, $first_name, $last_name, $contact, $address, $gender);

            if($result_set2){
				header('Location:/ceylontrek-3tier/controller/view_guide_profile_controller.php?guide-modified=true');
            }

            else{
				$errors[]='Failed to modify the record.';
			}
        }

        else{
			header('Location: /ceylontrek-3tier/view/view_guide_profile.php?'.http_build_query(array('param'=>$errors)));
		}
    }

    // Check update email address
    if (isset($_POST['edit_email'])) {
        header('Location:/ceylontrek-3tier/controller/reset_email_controller.php');
	}


?>
<?php mysqli_close($connection);?>