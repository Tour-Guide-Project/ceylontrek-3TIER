<?php
function search_activity($connection,$activity){
    $query = "SELECT smartsearch.place_name , smartsearch.image_path , smartsearch.short_description
    FROM actvity
    INNER JOIN activity_place ON actvity.activity_id = activity_place.activity_id
    WHERE actvity.activity = '{$activity}'
    INNER JOIN smartsearch ON activity_place.place_id = smartsearch.place_id";

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

function create_place($connection,$place_name,$short_description,$long_description,$image_path){
    $query = "INSERT INTO smartsearch(place_name , long_description , short_description , image_path) VALUES('{$place_name}' , '{$long_description}' , '{$short_description}' , '{$image_path}')";

    $result = mysqli_query($connection,$query);
    return $result;
}

function select_place_id($connection,$place_name){
    $query = "SELECT place_id FROM smartsearch WHERE place_name='{$place_name}'";

    $result = mysqli_query($connection,$query);
    return $result;
}

function select_activity_id($connection,$activity){
    $query = "SELECT activity_id FROM activities WHERE activity='{$activity}'";

    $result = mysqli_query($connection,$query);
    return $result;
}

function update_connection($connection,$activity_id,$place_id){
    $query = "INSERT INTO activity_place(activity_id , place_id) VALUES({$activity_id} , {$place_id})";

    $result = mysqli_query($connection,$query);
    return $result;
}

function exist_place($connection,$place_name){
    $query = "SELECT * FROM smartsearch WHERE place_name = '{$place_name}'";

    $result = mysqli_query($connection,$query);
    return $result;
}
?>