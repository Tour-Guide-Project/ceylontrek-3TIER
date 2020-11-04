<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php 
session_start();
//check the submit button has been pressed
if (isset($_POST['submit'])) {

        $errors = array();
        $level=$_SESSION['level'];
	//check correct details has been entered
	if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
        $errors[]= 'First Name is required/Invalid';
	}

	if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
        $errors[]= 'Last Name is required/Invalid';
	}
	if(!isset($_POST['tel_no']) || strlen(trim($_POST['tel_no']))<1){
        $errors[]= 'Contact Details is required/Invalid';
	}

	if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1){
        $errors[]= 'Address is required/Invalid';
	}
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
        $errors[]= 'Email Address is required/Invalid';
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
        $errors[]= 'Password is required/Invalid';
	}
	if(strlen(trim($_POST['password']))<6){
        $errors[]= 'Please create strong password,Password must contain at least 6 characters!';
        }

        //checking if email address already exists
        $email=mysqli_real_escape_string($connection,$_POST['email']);//(email sanitized) escaped special charactrs,we can create legal query from this.
	$result_set1=exist_email($connection,$email);

	if($result_set1)
	{
		if(mysqli_num_rows($result_set1)==1){
			$errors[]='Your Email address already exists';
		}
        } 
        
        //if error is empty
	if(empty($errors)){

        $result_set2=signup($connection);
        echo "<script>alert('Welcome ceylon-trek!');</script>";

                if ($level=='tourist'){
                        echo "<script>window.location ='/ceylontrek-3tier/view/touristDashboard.php' </script>";
                }
                if ($level=='tourguide'){
                        echo "<script>window.location ='/ceylontrek-3tier/view/guideDashboard.php' </script>";
                }
                if ($level=='admin'){
                        echo "<script>window.location ='/ceylontrek-3tier/view/admin_dashboard.php' </script>";
                }
                if ($level=='moderator'){
                        echo "<script>window.location ='/ceylontrek-3tier/view/moderator_dashboard.php' </script>";
                }
        
        }
        //if error is not empty print errors
        else{
                if($level=='tourist'|| $level=='tourguide'){
                        header('Location: /ceylontrek-3tier/view/signup.php?'.http_build_query(array('param'=>$errors)));
                }
                if($level=='admin'|| $level=='moderator'){
                        header('Location: /ceylontrek-3tier/view/create_admin_and_moderator_account.php?'.http_build_query(array('param'=>$errors)));
                }
                
        }
}
?>
<?php mysqli_close($connection);?>