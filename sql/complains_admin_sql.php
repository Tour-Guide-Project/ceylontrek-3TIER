<?php

//get complain details
function get_complain_details($connection){
    //prepare database query
   $query= "SELECT * FROM complain WHERE report_status=1"; 
 
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
//get checked status admin
function get_checked_status_admin($connection,$complain_id){
    $query="SELECT checked_status_admin FROM complain WHERE complain_id='{$complain_id}' LIMIT 1";
  
    $result=mysqli_query($connection,$query);
    return $result;
  }

// update report status
function update_checked_complain($connection,$checked_id){

    $query="UPDATE complain SET checked_status_admin=1 WHERE complain_id={$checked_id} LIMIT 1";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
}

//get newest order
function get_newest_order($connection){
    $query="SELECT * FROM complain WHERE report_status=1 AND checked_status_admin=0 ORDER BY complain_id DESC";
  
    $result=mysqli_query($connection,$query);
    return $result;
}
  
//get oldest order
function get_oldest_order($connection){
    $query="SELECT * FROM complain  WHERE report_status=1 AND checked_status_admin=0 ORDER BY complain_id ASC";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
}
//get tourist order
function get_tourist_order($connection){
    $query="SELECT * FROM complain  WHERE complainee_level='tourist' AND report_status=1 ORDER BY checked_status ASC";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
  }
  //get tourguide order
  function get_tourguide_order($connection){
    $query="SELECT * FROM complain  WHERE complainee_level='tourguide' AND report_status=1 ORDER BY checked_status ASC";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
  }
//search function
function search($connection,$get_word){
    $query="SELECT * FROM complain WHERE report_status=1 AND complainee LIKE '$get_word%' ORDER BY checked_status ASC ";
  
    $result=mysqli_query($connection,$query);
    return $result;
  }
 
?>