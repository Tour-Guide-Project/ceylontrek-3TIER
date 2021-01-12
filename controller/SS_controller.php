<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\smart_search_sql.php'); ?>

<?php
    
    if (isset($_POST['create_place'])){
		$all_activities = array();
		$activity_set = all_activities($connection);
		if ($activity_set) {

			$rows = mysqli_num_rows($activity_set);
			//print_r($rows);

			for ($i=0; $i < $rows; $i++) { 
				$result = mysqli_fetch_assoc($activity_set);
				//print_r($result);
				$all_activities[] = $result;
			}

			//print_r($all_activities);
			$_SESSION['all_activities'] = $all_activities;
		}
		header('Location: ../view/SS_create.php');
	}

	// if (isset($_POST['delete_place'])){
	// 	header('Location: ../controller/SS_delete_place_controller.php');
	// }
?>
<?php mysqli_close($connection);?>