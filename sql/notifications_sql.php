
<?php

function add_notification($connection,$notifications,$notification_level,$title,$time,$path,$user_id,$icon){
    
    //prepare database query
    $query ="INSERT INTO notifications(notifications,notification_level,title,time,path,user_id,icon)
    VALUES ('{$notifications}','{$notification_level}','{$title}','{$time}','{$path}','{$user_id}','{$icon}')";
  
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}


function get_user_id($connection,$notify_level){
     //prepare database query
	$query= "SELECT id FROM $notify_level"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}



?>