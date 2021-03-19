<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 

	if(isset($_POST['submit_guide'])){
		header('Location: ../controller/view_users_admin_controller.php');
		$_SESSION['user_level']='tourguide';
	}
	if(isset($_POST['submit_tourist'])){
		header('Location: ../controller/view_users_admin_controller.php');
		$_SESSION['user_level']='tourist';
	}
	if (isset($_POST['edit_profile'])){
		header('Location: ../controller/view_admin_profile_controller.php');
		$_SESSION['level']='admin';
	}
	if (isset($_POST['submit_admin'])){
		header('Location: ../view/create_admin_and_moderator_account.php');
		$_SESSION['level']='admin';
	}
	if(isset($_POST['submit_moderator'])){
		header('Location: ../view/create_admin_and_moderator_account.php');
		$_SESSION['level']='moderator';
	}
	
?>
<?php mysqli_close($connection);?>