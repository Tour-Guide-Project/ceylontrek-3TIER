<?php
    function getPackageInfo($connection,$package_id){
        $query="SELECT tourguide_others.guide_id,tourguide_others.displayName, tourguide_others.bio,tourguide_others.fluent_languages, tourguide_others.experience, tourguide.image_path,tourpackage.package_name,tourpackage.pdescription,tourpackage.display_price,tourpackage.day_no,tourpackage.members,tourpackage.destinations,tourpackage.imgpath1,tourpackage.imgpath2,tourpackage.imgpath3,tourpackage.imgpath4 FROM ((tourguide_others INNER JOIN tourguide ON tourguide_others.guide_id=tourguide.id) INNER JOIN tourpackage ON tourguide.id=tourpackage.guide_id) WHERE tourpackage.package_id='{$package_id}'";
        $result= mysqli_query($connection,$query);
        return $result;

    }
?>