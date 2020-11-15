<?php
function get_id_moderator($connection,$id){
    $query="SELECT * FROM moderator WHERE id={$id} AND level='moderator' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function update_moderator_query($connection,$id,$first_name,$last_name,$contact,$address,$gender){
    $query="UPDATE moderator SET first_name='{$first_name}',last_name='{$last_name}',
    contact='{$contact}',address='{$address}' ,gender='{$gender}' WHERE id={$id} AND level='moderator'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_moderator_email($connection,$id,$new_email){
    $query="UPDATE moderator SET email='{$new_email}'
    WHERE id={$id} AND level='moderator'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_moderator_password($connection,$id,$hashed_password,$newtoken){
    $query="UPDATE moderator SET password='{$hashed_password}',token='{$newtoken}' 
	WHERE id='{$id}' Limit 1";

	$result=mysqli_query($connection,$query);
	return $result;
}
?>