<?php

function getAllPackages($connection){
    $query="SELECT * FROM tourpackage";
    $result= mysqli_query($connection,$query);
    return $result;
}


?>