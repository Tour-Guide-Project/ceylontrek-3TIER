<?php
function get_upcoming_tours($connection, $tourist_id,$date){
    $query="SELECT r.reservation_id,r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id,g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE r.arrival_date>'{$date}' AND r.tourist_id='{$tourist_id}' AND r.active_status=1 ";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_previous_tours($connection, $tourist_id,$date){
    $query="SELECT r.reservation_id,r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id, g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE r.departure_date<'{$date}' AND r.tourist_id='{$tourist_id}' AND r.active_status=1";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_package_name($connection,$package_id){
    $query="SELECT * FROM tour_package WHERE (package_id='{$package_id}' AND remove_package = 0)";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_pending_tours($connection,$tourist_id,$date){
    $query="SELECT * FROM reservations WHERE active_status=0 AND tourist_id='{$tourist_id}' AND arrival_date>'{$date}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function get_pending_tours_info($connection, $tourist_id,$date){
    $query="SELECT r.reservation_id,r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id,g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE r.arrival_date>'{$date}' AND r.tourist_id='{$tourist_id}' AND r.active_status=0";
    $result= mysqli_query($connection,$query);
    return $result;
}

function decline_tour($connection,$reservation_id){
    $query="UPDATE reservations SET active_status=2 WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function get_cancelled_tours($connection,$tourist_id){
    $query="SELECT * from cancellation WHERE tourist_id='{$tourist_id}' AND cancel_guide=1 AND viewed=0";
    $result= mysqli_query($connection,$query);
    return $result;
}

function get_cancelled_tours_info($connection, $tourist_id){
    $query="SELECT r.reservation_id,r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id,g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE  r.tourist_id='{$tourist_id}' AND r.active_status=3 ";
    $result= mysqli_query($connection,$query);
    return $result;
}
function remove_notification_a($connection,$reservation_id){
    $query="UPDATE reservations SET active_status=4 WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

function remove_notification_b($connection,$reservation_id){
    $query="UPDATE cancellation SET viewed=1 WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_reason($connection,$reservation_id){
    $query="SELECT * FROM cancellation WHERE reservation_id='{$reservation_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
