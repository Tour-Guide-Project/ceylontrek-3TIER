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

// update report status
function delete_checked_complain($connection,$checked_id){

    $query="DELETE FROM complain WHERE complain_id={$checked_id} LIMIT 1";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
}

//get newest order
function get_newest_order($connection){
    $query="SELECT * FROM complain WHERE report_status=1 ORDER BY complain_id DESC";
  
    $result=mysqli_query($connection,$query);
    return $result;
}
  
//get oldest order
function get_oldest_order($connection){
    $query="SELECT * FROM complain  WHERE report_status=1 ORDER BY complain_id ASC";
  
    $result=mysqli_query($connection,$query);
    return $result;
  
}
//search function
function search($connection,$get_word){
    $query="SELECT * FROM complain WHERE report_status=1 AND complainee LIKE '$get_word%' ";
  
    $result=mysqli_query($connection,$query);
    return $result;
  }
 
?>