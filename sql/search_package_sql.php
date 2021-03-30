<?php
function getAllPackages($connection)
{
    $query = "SELECT * FROM tour_package WHERE remove_package = 0";
    $result = mysqli_query($connection, $query);
    return $result;
}
