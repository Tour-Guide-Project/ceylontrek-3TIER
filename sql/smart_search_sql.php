<?php
function search_activity($connection,$activity){
    $query = "SELECT place_name , image_path , short_description FROM smartsearch WHERE activities='{$activity}'";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}

function search_place($connection,$place_name){
    $query = "SELECT place_name , image_path , long_description FROM smartsearch WHERE place_name='{$place_name}'";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}

function create_place($connection , $place_name , $short_description , $long_description){
    $query="INSERT INTO smartsearch(place_name , long_description , short_description) VALUES('{$place_name}' , '{$long_description}' , '{$short_description}')";

    $result=mysqli_query($connection,$query);
    return $result;
}
?>