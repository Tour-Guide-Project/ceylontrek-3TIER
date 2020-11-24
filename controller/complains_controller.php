<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php 

	if(isset($_POST['view_more'])){
		header('Location: ../view/full_complain_view.php');
    }
    
?>
<?php mysqli_close($connection);?>