<?php

function get_upcoming_tours($connection, $guide_id,$date){
    $query="SELECT * FROM reservations WHERE arrival_date>'{$date}' AND guide_id='{$guide_id}' AND active_status=1";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_pending_tours_info($connection, $guide_id,$date){
    $query="SELECT * FROM reservations WHERE arrival_date>'{$date}' AND guide_id='{$guide_id}' AND active_status=0";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_previous_tours($connection, $guide_id,$date){
    $query="SELECT * FROM reservations WHERE departure_date<'{$date}' AND guide_id='{$guide_id}'AND active_status=1";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_pending_tours($connection,$guide_id,$date){
    $query="SELECT * FROM reservations WHERE active_status=0 AND guide_id='{$guide_id}' AND arrival_date>'{$date}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function get_package_name($connection,$package_id){
    $query="SELECT * FROM tourpackage WHERE package_id='{$package_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function accept_tour($connection,$reservation_id){
    $query="UPDATE reservations SET active_status=1 WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function decline_tour($connection,$reservation_id){
    $query="UPDATE reservations SET active_status=2 WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

?>
