<?php
function get_id_tourist($connection,$id){
    $query="SELECT * FROM tourist WHERE id={$id} AND level='tourist' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function update_query($connection,$id,$first_name,$last_name,$contact,$address,$email,$gender){
    $query="UPDATE tourist SET first_name='{$first_name}',last_name='{$last_name}',email='{$email}',
    contact='{$contact}',address='{$address}' ,gender='{$gender}' WHERE id={$id} AND level='tourist'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
?>