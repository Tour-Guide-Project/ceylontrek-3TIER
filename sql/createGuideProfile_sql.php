<?php 

    function insert_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$haveVehicle,$img_path1,$img_path2,$img_path3,$img_path4,$img_path5,$img_path6){
        $query = "INSERT INTO tourguide_others (guide_id,displayName,government_reg_no,nic,fluent_languages,bio,experience,price,max_tourists,gdescription,haveVehicle,img_nic1,img_nic2,img1,img2,img3,img4,modApproved) 
        VALUES ('{$guide_id}','{$displayName}','{$gRegNo}','{$NIC}','{$languages}','{$bio}','{$experience}','{$price}','{$max_tourists}','{$enterDescription}','{$haveVehicle}','{$img_path1}','{$img_path2}','{$img_path3}','{$img_path4}','{$img_path5}','{$img_path6}',0) ";
        $result=mysqli_query($connection,$query);
        return $result;
    }

    function insert_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats){
        $query="INSERT INTO vehicle (vehicle_reg_no, guide_id, vtype, make, model, license_no, no_of_seats) VALUES ('{$vRegNo}','{$guide_id}','{$vType}','{$vMake}','{$vModel}','{$vLicense}','{$vSeats}')";
        $result=mysqli_query($connection,$query);
        return $result;
    }

//checking if NIC already exists
function exist_nic($connection,$NIC,$guide_id){

	$query= "SELECT * FROM tourguide_others WHERE nic='{$NIC}' AND guide_id!='{$guide_id}' LIMIT 1"; 
			
	$result=mysqli_query($connection,$query);
	return $result;
}

?>