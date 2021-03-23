<?php

function search_new_profiles($connection)
{
    $query = "SELECT tourguide_others.guide_id,tourguide.image_path,tourguide.first_name,tourguide.last_name,tourguide.email
    FROM tourguide_others
    INNER JOIN tourguide ON tourguide_others.guide_id = tourguide.id
    WHERE tourguide_others.modApproved = 0 ";

    $result = mysqli_query($connection, $query);
    //print_r($result);
    return $result;
}

function guide_other_details($connection, $guide_id)
{
    $query = "SELECT tourguide.id,tourguide.image_path,tourguide.first_name,tourguide.last_name,tourguide_others.*
    FROM tourguide
    INNER JOIN tourguide_others ON tourguide.id = tourguide_others.guide_id
    WHERE tourguide.id = '{$guide_id}'";

    $result = mysqli_query($connection, $query);
    //print_r($result);
    return $result;
}

function vehicle_details($connection, $guide_id)
{
    $query = "SELECT vehicle.*
    FROM vehicle
    WHERE vehicle.guide_id = '{$guide_id}'";

    $result = mysqli_query($connection, $query);
    //print_r($result);
    return $result;
}

function approve_guide($connection, $guide_id)
{
    $query = "UPDATE tourguide_others SET modApproved = 1
    WHERE tourguide_others.guide_id = '{$guide_id}'";

    $result = mysqli_query($connection, $query);
    //print_r($result);
    return $result;
}
