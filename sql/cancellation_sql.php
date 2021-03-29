<?php
function get_reservation_info($connection,$reservation_id){

		$query= "SELECT * FROM reservations WHERE reservation_id='{$reservation_id}'"; 

    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

function update_reservation($connection,$reservation_id){
    $query="UPDATE reservations SET active_status=3 WHERE reservation_id='{$reservation_id}'";
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

function enter_cancellation_info($connection,$reservation_id,$guide_id,$tourist_id,$cancel_guide,$cancel_tourist,$viewed,$reason){
    $query="INSERT INTO `cancellation`(`reservation_id`, `guide_id`, `tourist_id`, `cancel_guide`, `cancel_tourist`, `reason`, `viewed`) 
    VALUES ('{$reservation_id}','{$guide_id}','{$tourist_id}','{$cancel_guide}','{$cancel_tourist}','{$reason}','{$viewed}')";
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}


?>