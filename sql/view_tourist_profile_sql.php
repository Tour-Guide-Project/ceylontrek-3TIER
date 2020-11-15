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
function update_tourist_password($connection,$id,$hashed_password,$newtoken){
    $query="UPDATE tourist SET password='{$hashed_password}',token='{$newtoken}' 
	WHERE id='{$id}' Limit 1";

	$result=mysqli_query($connection,$query);
	return $result;
}

function get_tourists($connection){
    $query = "SELECT * FROM tourist WHERE level = 'tourist' ORDER BY first_name";
    
    $result = mysqli_query($connection,$query);
    return $result;
}

function delete_tourist($connection,$id){
    $query = "DELETE FROM tourist WHERE id={$id}";

    $result = mysqli_query($connection,$query);
    return $result;
}

function get_search_tourists($connection,$key_email){
    $query = "SELECT * FROM tourist WHERE level = 'tourist' AND email LIKE '$key_email%' ORDER BY first_name";
    
    $result = mysqli_query($connection,$query);
    return $result;
}
?>