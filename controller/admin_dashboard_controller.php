<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['submit_admin'])){
		header('Location: ../view/create_admin_and_moderator_account.php');
		$_SESSION['level']='admin';
	}
	if(isset($_POST['submit_moderator'])){
		header('Location: ../view/create_admin_and_moderator_account.php');
		$_SESSION['level']='moderator';
	}
	if (isset($_POST['submit_complain'])){
		header('Location: ../view/complains_page.php');
	}
?>
<?php mysqli_close($connection);?>