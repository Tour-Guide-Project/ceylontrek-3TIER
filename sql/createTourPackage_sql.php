<?php
        function insert_packageinfo_query($connection,$id,$title,$duration,$destinations,$maxMembers,$price,$description,$target_path1,$target_path2,$target_path3,$target_path4){
                $query="INSERT INTO tourpackage( guide_id, package_name, pdescription, display_price, day_no, members, destinations, imgpath1, imgpath2, imgpath3, imgpath4) VALUES ({$id},'{$title}','{$description}','{$price}','{$duration}','{$maxMembers}','{$destinations}','{$target_path1}','{$target_path2}','{$target_path3}','{$target_path4}')";
                $result=mysqli_query($connection,$query);
                return $result;
        }


?>