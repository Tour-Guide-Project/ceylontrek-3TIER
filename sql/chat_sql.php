<?php

//get sender details 
function get_sender_details($connection,$s_id){
    $query="SELECT * FROM admin WHERE id={$s_id} 
    UNION  SELECT * FROM moderator WHERE id={$s_id} 
    UNION  SELECT * FROM tourguide WHERE id={$s_id} 
    UNION  SELECT * FROM tourist WHERE id={$s_id}  
    LIMIT 1";  

    $result=mysqli_query($connection,$query);
    return $result;
}

// select recivers mails
function get_reciver_mail($connection,$s_mail){
    $query="SELECT distinct r_mail  FROM chatbox WHERE s_mail='{$s_mail}'
             UNION SELECT distinct s_mail FROM chatbox WHERE r_mail='{$s_mail}'";
    $result=mysqli_query($connection,$query);
    return $result; 
}

// send messages
function sent_message($connection,$time,$day,$outgoing_mail,$incoming_mail,$message){
    $query="INSERT INTO chatbox (send_time,s_date,s_mail,r_mail,msg) 
             VALUES('{$time}','{$day}','{$outgoing_mail}','{$incoming_mail}','{$message}')";
     $send_result=mysqli_query($connection,$query);
     return $send_result; 
}

//search users
function get_search_recivers($connection,$key_email){
    $query = "SELECT * FROM tourist WHERE  email LIKE '$key_email%' 
               UNION SELECT * FROM tourguide WHERE  email LIKE '$key_email%'
               UNION SELECT * FROM moderator WHERE  email LIKE '$key_email%'
               UNION SELECT * FROM admin WHERE  email LIKE '$key_email%'
             ORDER BY first_name";
    
    $searchresult = mysqli_query($connection,$query);
    return $searchresult;
}

//get all messages
function get_messages($connection, $outgoing_mail,$incoming_mail){
    $query="SELECT * FROM chatbox WHERE (s_mail='{$outgoing_mail}' AND r_mail='{$incoming_mail}') 
            OR  (s_mail='{$incoming_mail}' AND r_mail='{$outgoing_mail}') ORDER BY send_time ";

    $msg = mysqli_query($connection,$query);
    return $msg;
}

     
?>