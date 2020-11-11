<?php
function upload_image($connection,$id,$level,$target_path){

        $Query="UPDATE $level SET image_path='{$target_path}' WHERE id={$id} AND level='{$level}'
         LIMIT 1";

        $result=mysqli_query($connection,$Query); 
        return $result;
}
function get_image($connection,$id,$level){
    $query="SELECT image_path FROM $level WHERE id={$id} AND level='{$level}' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
?>