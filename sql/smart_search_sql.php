<?php
function search_activity($connection,$activity){
    $query = "SELECT image_path , short_description FROM smartsearch WHERE activities='{$activity}'";

    $result = mysqli_query($connection,$query);
    //print_r($result);
    return $result;
}
?>