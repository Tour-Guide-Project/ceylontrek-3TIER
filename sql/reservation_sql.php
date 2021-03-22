<?php
    function check_availability($connection, $guide_id,$arrivaldate, $departuredate, $no_of_tourist){
        $query="SELECT reservation_id FROM reservation WHERE arrival_date<{'$arrivaldate'} AND departure_date>{'$departuredate'} AND guide_id={$guide_id}";
        $result= mysqli_query($connection,$query);
        return $result;
    }

    function get_price($connection,$guide_id){
        $query="SELECT  price FROM tourguide_others WHERE guide_id={$guide_id}";
        $result= mysqli_query($connection,$query);
        return $result;} 

    function make_reservation_query($connection,$tourist_id,$guide_id,$tourist_name,$tourist_email,$telephone_number,$no_of_adults,$no_of_children,$arrival_date,$departure_date,$notes,$total_price){
        $query="INSERT INTO `reservations`(`tourist_id`, `guide_id`, `tourist_name`,`tourist_email`, `telephone`, `arrival_date`, `departure_date`, `no_of_adults`, `no_of_children`, `notes`, `price`) VALUES ({$tourist_id},{$guide_id},{'$tourist_name'},{'$tourist_email'},{'$telephone_number'},{$no_of_adults},{$no_of_children},{'$arrival_date'},{'$departure_date'},{'$notes'},{$total_price})";
        $result= mysqli_query($connection,$query);
        return $result;} 
    
   
?>