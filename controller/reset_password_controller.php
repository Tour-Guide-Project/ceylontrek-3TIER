<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\forgot_password_sql.php'); ?>
<?php
require 'function.php';
session_start();

	if(isset($_POST['submit']))
	{
		$errors=array();
		$newPassword=$_POST['newpassword'];
		$confirmPassword=$_POST['confirmpassword'];

		if(empty($newPassword || $confirmPassword))
		{
			$errors[]="Password required!";
		}
		if($newPassword != $confirmPassword)
		{
			$errors[]="Please enter the same password!";
		}
		if((strlen(trim($newPassword))<6))
		{
	        $errors[]="Password must contain at least 6 characters!";
		}
	    if(empty($errors))
	    {
			$hashed_password = sha1($confirmPassword);
			$email=$_SESSION['email'];
			$level=$_SESSION['level'];
	        $newtoken= bin2hex(random_bytes(50));
	                        
            $result_set=reset_password($connection,$level,$hashed_password,$newtoken,$email);
            
	        if($result_set)
	        {
				header('Location:/ceylontrek-3tier/view/login.php'); 
	        }
	        else
	        {
	            header('Location:/ceylontrek-3tier/view/reset_password.php');
	        }
	                       
        }
        else{
            header('Location: /ceylontrek-3tier/view/reset_password.php?'.http_build_query(array('param'=>$errors)));
        }
	}

?>
<?php mysqli_close($connection);?>