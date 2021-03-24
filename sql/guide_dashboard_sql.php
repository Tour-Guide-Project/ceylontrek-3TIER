<?php

function get_upcoming_tours($connection, $guide_id,$date){
    $query="SELECT * FROM reservations WHERE arrival_date>'{$date}' AND guide_id='{$guide_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}
function get_previous_tours($connection, $guide_id,$date){
    $query="SELECT * FROM reservations WHERE departure_date<'{$date}' AND guide_id='{$guide_id}'";
    $result= mysqli_query($connection,$query);
    return $result;
}

?>
