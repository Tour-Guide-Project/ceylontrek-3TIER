<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\guide_dashboard_sql.php'); ?>


<?php
   // if (isset($_POST['previous_tours'])){
		$previoustours=array();
		$date=date("Y-m-d");
		$guideid=$_SESSION['id'];
		$result_set=get_previous_tours($connection,$guideid,$date);
		if($result_set){
			$rows=mysqli_num_rows($result_set);
	
			for($i=0;$i<$rows;$i++){
				$result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
				   
					$previoustours[] = $result;
					if($previoustours[$i]['has_package']==1){
                        $package_id=$previoustours[$i]['package_id'];
                        $package_name=get_package_name($connection,$package_id);
                        $result1 = mysqli_fetch_array($package_name);
                        $previoustours[$i]['package_name']=$result1['package_name'];
                    }
                    else{
                        $previoustours[$i]['package_name']="None";
                    }
			}
		header('Location: /ceylontrek-3tier/view/guidePrevTours.php?'.http_build_query(array('param'=>$previoustours)));
		$_SESSION['level']='tourguide';
	}
//}

?>