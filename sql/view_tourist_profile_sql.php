<?php
function get_id_tourist($connection,$id){
    $query="SELECT * FROM tourist WHERE id={$id} AND level='tourist' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function update_tourist_query($connection,$id,$first_name,$last_name,$contact,$address,$gender){
    $query="UPDATE tourist SET first_name='{$first_name}',last_name='{$last_name}',
    contact='{$contact}',address='{$address}' ,gender='{$gender}' WHERE id={$id} AND level='tourist'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function update_tourist_email($connection,$id,$new_email){
    $query="UPDATE tourist SET email='{$new_email}'
    WHERE id={$id} AND level='tourist'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
?>