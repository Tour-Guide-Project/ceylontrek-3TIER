<?php
function getAllPackages($connection)
{
    $query = "SELECT * FROM tourpackage WHERE remove_package = 0";
    $result = mysqli_query($connection, $query);
    return $result;
}
