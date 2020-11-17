<?php 

    function insert_guideinfo_query($connection,$id,$gRegNo,$DOB,$NIC,$languages,$experience,$enterDescription,$haveVehicle){
        $query = "INSERT INTO tourguide_others (guide_id,fluent_languages,government_reg_no,dob,nic,experience,gdescription,haveVehicle,modApproved) VALUES ('{$id}','{$languages}','{$gRegNo}','{$DOB}','{$NIC}','{$experience}','{$enterDescription}','{$haveVehicle}','0') ";
        $result=mysqli_query($connection,$query);
        return $result;
    }

?>