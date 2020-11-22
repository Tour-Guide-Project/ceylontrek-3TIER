<?php 

    function insert_guideinfo_query($connection,$id,$gRegNo,$DOB,$NIC,$languages,$experience,$enterDescription,$haveVehicle,$img_path1,$img_path2){
        $query = "INSERT INTO tourguide_others (guide_id,fluent_languages,government_reg_no,dob,nic,experience,gdescription,haveVehicle,img_nic1,img_nic2,modApproved) VALUES ({$id},'{$languages}','{$gRegNo}','{$DOB}','{$NIC}','{$experience}','{$enterDescription}',{$haveVehicle},'{$img_path1}','{$img_path2}',0)";
        $result=mysqli_query($connection,$query);
        return $result;
    }

    function insert_vehicleinfo_query($connection,$id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats){
        $query="INSERT INTO vehicle (vehicle_reg_no, guide_id, vtype, make, model, license_no, no_of_seats) VALUES ('{$vRegNo}',{$id},'{$vType}','{$vMake}','{$vModel}','{$vLicense}',{$vSeats})";
        $result=mysqli_query($connection,$query);
        return $result;
    }


?>