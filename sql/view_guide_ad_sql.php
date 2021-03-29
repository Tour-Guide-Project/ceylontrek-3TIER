<?php
    function getGuideInfo($connection,$guide_id){
        $query="SELECT tourguide_others.displayName, tourguide_others.fluent_languages, tourguide_others.experience, tourguide_others.gdescription,tourguide_others.haveVehicle,tourguide_others.img1, tourguide_others.img2, tourguide_others.img3, tourguide_others.img4, tourguide.image_path FROM tourguide_others INNER JOIN tourguide ON tourguide_others.guide_id=tourguide.id WHERE tourguide_others.guide_id={$guide_id}";
        $result= mysqli_query($connection,$query);
        return $result;

    }

  
//kavii
//get tourguide others details
function get_details($connection,$guide_id){
    //prepare database query
	$query= "SELECT * FROM tourguide_others WHERE guide_id='{$guide_id}' LIMIT 1"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

function get_profile_img($connection,$guide_id){
    //prepare database query
	$query= "SELECT image_path FROM tourguide WHERE id='{$guide_id}' LIMIT 1"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;

}

function get_package_details($connection,$guide_id){
    //prepare database query
	$query= "SELECT * FROM tour_package WHERE guide_id='{$guide_id}'"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}

function guide_package($connection, $package_id)
{
        $query = "SELECT * FROM tour_package WHERE package_id = '{$package_id}'";

        $result = mysqli_query($connection, $query);
        //print_r($result);
        return $result;
}
?>