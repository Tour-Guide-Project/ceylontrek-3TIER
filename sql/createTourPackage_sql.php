<?php
function insert_packageinfo_query($connection, $id, $title, $duration, $destinations, $maxMembers, $price, $description, $target_path1, $target_path2, $target_path3, $target_path4)
{
        $query = "INSERT INTO tourpackage( guide_id, package_name, pdescription, display_price, day_no, members, destinations, imgpath1, imgpath2, imgpath3, imgpath4) VALUES ({$id},'{$title}','{$description}','{$price}','{$duration}','{$maxMembers}','{$destinations}','{$target_path1}','{$target_path2}','{$target_path3}','{$target_path4}')";
        $result = mysqli_query($connection, $query);
        return $result;
}

function guide_all_packages($connection, $guide_id)
{
        $query = "SELECT * FROM tour_package WHERE guide_id = '{$guide_id}'";

        $result = mysqli_query($connection, $query);
        //print_r($result);
        return $result;
}

function guide_name($connection, $guide_id)
{
        $query = "SELECT first_name,last_name FROM tourguide WHERE id = '{$guide_id}'";

        $result = mysqli_query($connection, $query);
        //print_r($result);
        return $result;
}

function guide_package($connection, $package_id)
{
        $query = "SELECT * FROM tour_package WHERE package_id = '{$package_id}'";

        $result = mysqli_query($connection, $query);
        //print_r($result);
        return $result;
}

function update_package($connection, $package_id, $package_name, $day_no, $destinations, $members, $display_price, $pdescription)
{
        $query = "UPDATE tour_package SET package_name='{$package_name}',day_no='{$day_no}',destinations='{$destinations}',members='{$members}',display_price='{$display_price}',pdescription='{$pdescription}'
	WHERE package_id='{$package_id}'";

        $result = mysqli_query($connection, $query);
        //print_r($result);
        return $result;
}
