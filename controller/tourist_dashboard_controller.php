<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['edit_profile'])){
		header('Location: ../controller/view_tourist_profile_controller.php');
		$_SESSION['level']='tourist';
	}
?>
<?php mysqli_close($connection);?>