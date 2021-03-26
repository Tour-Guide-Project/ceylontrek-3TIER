<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\guide_dashboard_sql.php'); ?>

<?php
      // if (isset($_POST['upcoming_tours'])){
		$upcomingtours=array();
		$date=date("Y-m-d");
		$guideid=$_SESSION['id'];
		$result_set=get_upcoming_tours($connection,$guideid,$date);
		if($result_set){
			$rows=mysqli_num_rows($result_set);
	
			for($i=0;$i<$rows;$i++){
				$result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
				   
					$upcomingtours[] = $result;
			}
		header('Location: /ceylontrek-3tier/view/guideUpcomingTours.php?'.http_build_query(array('param'=>$upcomingtours)));
		$_SESSION['level']='tourguide';
	}
//}

?>