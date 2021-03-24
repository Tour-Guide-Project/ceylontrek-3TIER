<?php
//get tourguide others details
function get_details($connection,$guide_id){
    //prepare database query
	$query= "SELECT * FROM tourguide_others WHERE guide_id='{$guide_id}' LIMIT 1"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;
}
//get vehicle details
function get_vehicle_details($connection,$guide_id){
    //prepare database query
	$query= "SELECT * FROM vehicle WHERE guide_id='{$guide_id}' LIMIT 1"; 
    $result_set=mysqli_query($connection,$query);
    return $result_set;

}

//checking if NIC already exists
function exist_nic($connection,$NIC,$guide_id){

	$query= "SELECT * FROM tourguide_others WHERE nic='{$NIC}' AND guide_id!='{$guide_id}' LIMIT 1"; 
			
	$result=mysqli_query($connection,$query);
	return $result;
}

//update guide others when havevehicle=1
function update_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$Vehicle){
    $query="UPDATE tourguide_others SET displayName='{$displayName}',government_reg_no='{$gRegNo}',nic='{$NIC}',fluent_languages='{$languages}',experience='{$experience}',bio='{$bio}',
    gdescription='{$enterDescription}' ,price='{$price}' ,max_tourists='{$max_tourists}',haveVehicle='{$Vehicle}'
    WHERE guide_id={$guide_id} LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
//update vehicle when havevehicle=1
function update_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats){
    $query="UPDATE vehicle SET guide_id='{$guide_id}',vehicle_reg_no='{$vRegNo}',type='{$vType}',make='{$vMake}',
    model='{$vModel}',license_no='{$vLicense}',no_of_seats='{$vSeats}'
    WHERE guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
//insert vehicle query when havevehicle=1
function insert_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats){
    $query="INSERT INTO vehicle (vehicle_reg_no, guide_id, type, make, model, license_no, no_of_seats) VALUES ('{$vRegNo}',{$guide_id},'{$vType}','{$vMake}','{$vModel}','{$vLicense}','{$vSeats}')";

    $result=mysqli_query($connection,$query);
    return $result;
}
//update tourguide table when havevehicle=0
function V_update_guideinfo_query($connection,$guide_id,$Vehicle){
    $query="UPDATE tourguide_others SET haveVehicle='{$Vehicle}' WHERE $guide_id='{$guide_id}'";
    $result=mysqli_query($connection,$query);
    return $result;
}

//update vehicle table when havevehicle=0
function V_update_vehicleinfo_query($connection,$guide_id){
    $query="DELETE  FROM vehicle WHERE $guide_id='{$guide_id}'";
    $result=mysqli_query($connection,$query);
    return $result;
}
//update images
function update_image1($connection,$guide_id,$target_path1){
    $query="UPDATE tourguide_others SET img_nic1='{$target_path1}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_image2($connection,$guide_id,$target_path2){
    $query="UPDATE tourguide_others SET img_nic2='{$target_path2}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_image3($connection,$guide_id,$target_path3){
    $query="UPDATE tourguide_others SET img1='{$target_path3}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_image4($connection,$guide_id,$target_path4){
    $query="UPDATE tourguide_others SET img2='{$target_path4}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_image5($connection,$guide_id,$target_path5){
    $query="UPDATE tourguide_others SET img3='{$target_path5}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_image6($connection,$guide_id,$target_path6){
    $query="UPDATE tourguide_others SET img4='{$target_path6}'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

//remove images
function remove_image1($connection,$guide_id){
    $query="UPDATE tourguide_others SET img_nic1='../resources/images/nic/default_nic.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function remove_image2($connection,$guide_id){
    $query="UPDATE tourguide_others SET img_nic2='../resources/images/nic/default_nic.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function remove_image3($connection,$guide_id){
    $query="UPDATE tourguide_others SET img1='../resources/images/profile/default.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function remove_image4($connection,$guide_id){
    $query="UPDATE tourguide_others SET img2='../resources/images/profile/default.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function remove_image5($connection,$guide_id){
    $query="UPDATE tourguide_others SET img3='../resources/images/profile/default.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function remove_image6($connection,$guide_id){
    $query="UPDATE tourguide_others SET img4='../resources/images/profile/default.jpg'
    WHERE $guide_id='{$guide_id}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
?>