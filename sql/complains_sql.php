<?php

// get details current user
function get_user_details($connection,$user_id,$complainee_level){
    
    //prepare database query
		$query= "SELECT * FROM $complainee_level WHERE id='{$user_id}' LIMIT 1"; 

    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

// add complain
function add_complain($connection,$title,$complains,$date,$time,$complainee_level,$complainee){
    //prepare database query
    $query ="INSERT INTO complain(title,description,date,time,complainee_level,complainee)
    VALUES ('{$title}','{$complains}','{$date}','{$time}','{$complainee_level}','{$complainee}')";

    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

//get complain details
function get_complain_details($connection){
   //prepare database query
  $query= "SELECT * FROM complain ORDER BY checked_status ASC "; 

  $result_set=mysqli_query($connection,$query);
  return $result_set;
}

//get complain view more details
function get_complain_viewmore($connection,$complain_id){
   //prepare database query
   $query= "SELECT * FROM complain WHERE complain_id='{$complain_id}' "; 

   $result_set=mysqli_query($connection,$query);
   return $result_set;
}


// update report status
function update_reported_complain($connection,$report_id){

  $query="UPDATE complain SET report_status=1 WHERE complain_id='{$report_id}' LIMIT 1";

  $result=mysqli_query($connection,$query);
  return $result;

}

//get report status
function get_reported_status($connection,$complain_id){
  $query="SELECT checked_status,report_status FROM complain WHERE complain_id='{$complain_id}' LIMIT 1";

  $result=mysqli_query($connection,$query);
  return $result;
}

//delete checked complaint
function update_checked_complain($connection,$checked_id){
  $query="UPDATE complain SET checked_status=1 WHERE complain_id='{$checked_id}' LIMIT 1";

  $result=mysqli_query($connection,$query);
  return $result;
}

//get newest order
function get_newest_order($connection){
  $query="SELECT * FROM complain WHERE checked_status=0 AND report_status=0 ORDER BY complain_id DESC";

  $result=mysqli_query($connection,$query);
  return $result;
}

//get oldest order
function get_oldest_order($connection){
  $query="SELECT * FROM complain WHERE checked_status=0 AND report_status=0  ORDER BY complain_id ASC";

  $result=mysqli_query($connection,$query);
  return $result;

}
//get tourist order
function get_tourist_order($connection){
  $query="SELECT * FROM complain  WHERE complainee_level='tourist' ORDER BY checked_status ASC";

  $result=mysqli_query($connection,$query);
  return $result;

}
//get tourguide order
function get_tourguide_order($connection){
  $query="SELECT * FROM complain  WHERE complainee_level='tourguide' ORDER BY checked_status ASC";

  $result=mysqli_query($connection,$query);
  return $result;

}
//search function
function search($connection,$get_word){
  $query="SELECT * FROM complain WHERE  complainee LIKE '$get_word%' ORDER BY checked_status ASC ";

  $result=mysqli_query($connection,$query);
  return $result;
}
?>