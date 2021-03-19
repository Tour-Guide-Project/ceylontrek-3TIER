<?php

function getAllGuides($connection){
    $query="SELECT * FROM tourguide_others";
    $result= mysqli_query($connection,$query);
    return $result;
}


?>