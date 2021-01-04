<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>

<?php
    
    if (isset($_POST['create_place'])){
		header('Location: ../view/SS_create.php');
	}

    if (isset($_POST['edit_place'])){
		header('Location: ../controller/SS_edit_place_controller.php');
	}
?>
<?php mysqli_close($connection);?>