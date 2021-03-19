<?php
    function check_availability($connection, $guide_id,$arrivaldate, $departuredate, $no_of_tourist){
        $query="SELECT reservation_id FROM reservation WHERE arrival_date<{'$arrivaldate'} AND departure_date>{'$departuredate'} where guide_id={'$guide_id'}";
        $result= mysqli_query($connection,$query);
        return $result;
    }
?>