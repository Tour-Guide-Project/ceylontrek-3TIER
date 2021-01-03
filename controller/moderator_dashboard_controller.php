<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['edit_profile'])){
		header('Location: ../controller/view_moderator_profile_controller.php');
		$_SESSION['level']='moderator';
	}
?>
<?php mysqli_close($connection);?>