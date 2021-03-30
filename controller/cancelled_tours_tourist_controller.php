<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\tourist_dashboard_sql.php'); ?>

<?php
      if (isset($_GET['cancelled_tours'])){
		$cancelledtours=array();
		$date=date("Y-m-d");
		$touristid=$_SESSION['id'];
		$result_set=get_cancelled_tours_info($connection,$touristid);

		if($result_set){
			$rows=mysqli_num_rows($result_set);
	
			for($i=0;$i<$rows;$i++){
				$result = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
				   
					$cancelledtours[] = $result;
                    if($cancelledtours[$i]['has_package']==1){
                        $package_id=$cancelledtours[$i]['package_id'];
                        $package_name=get_package_name($connection,$package_id);
                        $result1 = mysqli_fetch_array($package_name);
                        $cancelledtours[$i]['package_name']=$result1['package_name'];
                    }
                    else{
                        $cancelledtours[$i]['package_name']="None";
                    }
                    $reservation_id=$cancelledtours[$i]['reservation_id'];
                    $result2=get_reason($connection,$reservation_id);
                    $reason = mysqli_fetch_array($result2);
                    $cancelledtours[$i]['reason']=$reason['reason'];
			}
           
		header('Location: /ceylontrek-3tier/view/tourist_cancelled_tours.php?'.http_build_query(array('param1'=>$cancelledtours)));
		
	}
}

if(isset($_GET['remove_notification'])){
	$reservation_id=$_GET['remove_notification'];
	$result=remove_notification_a($connection,$reservation_id);
    $result=remove_notification_b($connection,$reservation_id);
	
		header('Location: /ceylontrek-3tier/controller/cancelled_tours_controller.php?cancelled_tours=1');
	
}


?>