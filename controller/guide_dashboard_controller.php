<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['submit_admin'])){
		header('Location: ../view/create_admin_and_moderator_account.php');
		$_SESSION['level']='guide';
	}
?>
<?php mysqli_close($connection);?>