<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['edit_profile'])){
		header('Location: ../controller/view_guide_profile_controller.php');
		$_SESSION['level']='tourguide';
	}
	if (isset($_POST['profile'])){
		header('Location: ../controller/createGuideProfile_controller.php');
		$_SESSION['level']='tourguide';
	}
?>
<?php mysqli_close($connection);?>