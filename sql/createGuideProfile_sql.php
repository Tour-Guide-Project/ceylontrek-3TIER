<?php 

    function insert_guideinfo_query($connection,$id,$displayName,$gRegNo,$NIC,$languages,$bio,$experience,$enterDescription,$haveVehicle,$img_path1,$img_path2,$img_path3,$img_path4,$img_path5,$img_path6){
        $query = "INSERT INTO tourguide_others (guide_id,displayName,fluent_languages,government_reg_no,nic,experience,bio,gdescription,haveVehicle,img_nic1,img_nic2,img1,img2,img3,img4,modApproved) VALUES ({$id},'{$displayName}','{$languages}','{$gRegNo}','{$NIC}','{$experience}','{$bio}','{$enterDescription}',{$haveVehicle},'{$img_path1}','{$img_path2}','{$img_path3}','{$img_path4}','{$img_path5}','{$img_path6}',0)";
        $result=mysqli_query($connection,$query);
        return $result;
    }

    function insert_vehicleinfo_query($connection,$id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats){
        $query="INSERT INTO vehicle (vehicle_reg_no, guide_id, vtype, make, model, license_no, no_of_seats) VALUES ('{$vRegNo}',{$id},'{$vType}','{$vMake}','{$vModel}','{$vLicense}','{$vSeats}')";
        $result=mysqli_query($connection,$query);
        return $result;
    }


?>