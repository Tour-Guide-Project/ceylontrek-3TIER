<?php
function getPackageInfo($connection, $package_id)
{
    $query = "SELECT tourguide_others.guide_id,tourguide_others.displayName, tourguide_others.bio,tourguide_others.fluent_languages, tourguide_others.experience, tourguide.image_path,tour_package.package_name,tour_package.pdescription,tour_package.display_price,tour_package.day_no,tour_package.members,tour_package.destinations,tour_package.imgpath1,tour_package.imgpath2,tour_package.imgpath3,tour_package.imgpath4 FROM ((tourguide_others INNER JOIN tourguide ON tourguide_others.guide_id=tourguide.id) INNER JOIN tour_package ON tourguide.id=tour_package.guide_id) WHERE (tour_package.package_id='{$package_id}' AND tour_package.remove_package = 0)";
    $result = mysqli_query($connection, $query);
    return $result;
}
