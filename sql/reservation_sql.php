<?php
    function check_availability($connection, $guide_id,$arrivaldate, $departuredate, $no_of_tourist){
        $query="SELECT reservation_id FROM reservations WHERE departure_date<'{$arrivaldate}' AND guide_id='{$guide_id}'";
        $result= mysqli_query($connection,$query);
        return $result;
    }

    function get_price($connection,$guide_id){
        $query="SELECT * FROM tourguide_others WHERE guide_id='{$guide_id}'";
        $result= mysqli_query($connection,$query);
        return $result;
    } 

    function make_reservation_query($connection,$tourist_id,$guide_id,$tourist_name,$tourist_email,$telephone_number,$no_of_adults,$no_of_children,$arrival_date,$departure_date,$notes,$total_price,$has_package,$package_id){
      
        $query="INSERT INTO reservations(tourist_id, guide_id, tourist_name,tourist_email,telephone, arrival_date, departure_date, no_of_adults, no_of_children, notes,price,has_package,package_id) 
        VALUES ('{$tourist_id}','{$guide_id}','{$tourist_name}','{$tourist_email}','{$telephone_number}','{$arrival_date}','{$departure_date}','{$no_of_adults}','{$no_of_children}','{$notes}','{$total_price}','{$has_package}','{$package_id}')";
        $result= mysqli_query($connection,$query);
        return $result;} 

    
   
?>