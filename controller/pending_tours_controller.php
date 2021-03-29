<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\guide_dashboard_sql.php'); ?>

<?php
      if (isset($_GET['pending_tours'])){
		$upcomingtours=array();
		$date=date("Y-m-d");
		$guideid=$_SESSION['id'];
		$result_set=get_pending_tours_info($connection,$guideid,$date);

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
            
		header('Location: /ceylontrek-3tier/view/guide_pending_tours.php?'.http_build_query(array('param'=>$upcomingtours)));
		
	}
}

if(isset($_GET['accept_tour'])){
	$reservation_id=$_GET['accept_tour'];
	$result=accept_tour($connection,$reservation_id);
	
		header('Location: /ceylontrek-3tier/controller/pending_tours_controller.php?pending_tours=1');
	
}
if(isset($_GET['decline_tour'])){
	$reservation_id=$_GET['decline_tour'];
	$result=decline_tour($connection,$reservation_id);
	
		header('Location: /ceylontrek-3tier/controller/pending_tours_controller.php?pending_tours=1');
	
}

?>