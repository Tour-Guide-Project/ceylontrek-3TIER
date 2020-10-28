<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['edit_profile'])){
		header('Location: ../view/view_guide_profile.php');
		$_SESSION['level']='guide';
	}
?>
<?php mysqli_close($connection);?>