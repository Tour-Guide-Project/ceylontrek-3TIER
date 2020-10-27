<?php require_once('../config/connection.php');  
session_start();?>
<?php 
	if (isset($_POST['submit_tourguide'])){
		header('Location: ../view/signup.php');
		$_SESSION['level']='tourguide';
	}
	if(isset($_POST['submit_tourist'])){
		header('Location: ../view/signup.php');
		$_SESSION['level']='tourist';
	}
?>
<?php mysqli_close($connection);?>