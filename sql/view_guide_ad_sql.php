<?php
    function getGuideInfo($connection,$guide_id){
        $query="SELECT tourguide_others.displayName, tourguide_others.fluent_languages, tourguide_others.experience, tourguide_others.gdescription,tourguide_others.haveVehicle,tourguide_others.img1, tourguide_others.img2, tourguide_others.img3, tourguide_others.img4, tourguide.image_path FROM tourguide_others INNER JOIN tourguide ON tourguide_others.guide_id=tourguide.id WHERE tourguide_others.guide_id={$guide_id}";
        $result= mysqli_query($connection,$query);
        return $result;

    }
?>