<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php 

	session_start();
	unset($_SESSION);
	session_destroy();
	session_write_close();

	//move to the login page
	header('Location: /ceylontrek-3tier/view/homepage.php? You  have Successfully logout');
	die;

 ?>