<?php
function get_upcoming_tours($connection, $tourist_id,$date){
    $query="SELECT r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id, g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE r.arrival_date>'{$date}' AND r.tourist_id='{$tourist_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_previous_tours($connection, $tourist_id,$date){
    $query="SELECT r.reservation_id,r.guide_id,r.tourist_name,r.arrival_date, r.departure_date, r.no_of_adults, r.no_of_children, r.notes, r.price,r.has_package,r.package_id, g.displayName FROM reservations r INNER JOIN tourguide_others g ON r.guide_id=g.guide_id WHERE r.departure_date<'{$date}' AND r.tourist_id='{$tourist_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_package_name($connection,$package_id){
    $query="SELECT * FROM tourpackage WHERE package_id='{$package_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
?>