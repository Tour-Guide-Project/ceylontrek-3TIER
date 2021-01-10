<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php

//ajax part

if(isset($_POST['stri']) && isset($_SESSION['id'])){
    $results=array();
    $title=array();
    $seen_state=array();
    $time=array();
    $id=array();
    $path=array();
    $icon=array();
    $user_id=$_SESSION['id'];

    $sql = "SELECT * FROM notifications WHERE notification_level='tour-guide' AND user_id='{$user_id}' ORDER BY seen_state ASC;";
    $result_set = mysqli_query($connection,$sql);
    //print_r($result_set);
    $sql2 = "SELECT * FROM notifications WHERE notification_level='tour-guide' AND user_id='{$user_id}' AND seen_state=0";
    $result_set2 = mysqli_query($connection,$sql2);

    while ($row=mysqli_fetch_array($result_set))
    { 
        $results[] = $row['notifications'];
        $title[]=$row['title'];
        $seen_state[]=$row['seen_state'];
        $time[]=$row['time'];
        $id[]=$row['id'];
        $path[]=$row['path'];
        $icon[]=$row['icon'];
       
    }
    $count=$result_set2->num_rows;

    $data=array(
    'count'=>$count,
    'results'=>$results,
    'title'=>$title,
    'seen_state'=>$seen_state,
    'time'=>$time,
    'id'=>$id,
    'path'=>$path,
    'user_id'=>$user_id,
    'icon'=>$icon
    );
    echo json_encode($data);
 
}


if(isset($_POST['notify_id'])){
    $notify_id=$_POST['notify_id'];
    $user_id=$_SESSION['id'];

    $query="UPDATE notifications SET seen_state=1 WHERE id={$notify_id} AND user_id='{$user_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);    
    
}
?>