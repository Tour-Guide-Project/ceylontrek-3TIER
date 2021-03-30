<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\tourist_dashboard_sql.php'); ?>

<?php
      if (isset($_GET['pending_tours'])){
		$upcomingtours=array();
		$date=date("Y-m-d");
		$touristid=$_SESSION['id'];
		$result_set=get_pending_tours_info($connection,$touristid,$date);

		if($result_set){
			$rows=mysqli_num_rows($result_set);
	
			for($i=0;$i<$rows;$i++){
				$result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
				   
					$upcomingtours[] = $result;
                    if($upcomingtours[$i]['has_package']==1){
                        $package_id=$upcomingtours[$i]['package_id'];
                        $package_name=get_package_name($connection,$package_id);
                        $result1 = mysqli_fetch_array($package_name);
                        $upcomingtours[$i]['package_name']=$result1['package_name'];
                    }
                    else{
                        $upcomingtours[$i]['package_name']="None";
                    }
			}
            
		header('Location: /ceylontrek-3tier/view/tourist_pending_tours.php?'.http_build_query(array('param1'=>$upcomingtours)));
		
	}
}

if(isset($_GET['cancel'])){
	$reservation_id=$_GET['cancel'];
	$result=decline_tour($connection,$reservation_id);
	
		header('Location: /ceylontrek-3tier/controller/pending_tours_tourist_controller.php?pending_tours=1');
	
}

?>