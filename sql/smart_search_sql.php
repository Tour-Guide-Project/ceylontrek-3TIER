<?php
function search_smart($connection,$activity){
    $query = "SELECT smartsearch.place_name , smartsearch.image_path , smartsearch.short_description
    FROM activities 
    INNER JOIN activity_place ON activities.activity_id = activity_place.activity_id 
    INNER JOIN smartsearch ON activity_place.place_id = smartsearch.place_id
    WHERE activities.activity = '{$activity}'";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}

function search_activities($connection,$place_id){
    $query = "SELECT activities.activity
    FROM activity_place
    INNER JOIN activities ON activity_place.activity_id = activities.activity_id
    WHERE activity_place.place_id = '{$place_id}'";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}

function search_place($connection,$place_name){
    $query = "SELECT * FROM smartsearch WHERE place_name='{$place_name}'";

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

function all_activities($connection){
    $query = "SELECT activity FROM activities";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}

?>