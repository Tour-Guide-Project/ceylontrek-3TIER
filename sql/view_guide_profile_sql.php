<?php
function get_id_guide($connection,$id){
    $query="SELECT * FROM tourguide WHERE id={$id} AND level='tourguide' LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function update_guide_query($connection,$id,$first_name,$last_name,$contact,$address,$gender){
    $query="UPDATE tourguide SET first_name='{$first_name}',last_name='{$last_name}',
    contact='{$contact}' ,address='{$address}' ,gender='{$gender}' WHERE id={$id} AND level='tourguide'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}
function update_guide_email($connection,$id,$new_email){
    $query="UPDATE tourguide SET email='{$new_email}'
    WHERE id={$id} AND level='tourguide'
    LIMIT 1";

    $result=mysqli_query($connection,$query);
    return $result;
}

function get_guides($connection){
    $query = "SELECT * FROM tourguide WHERE level = 'tourguide' ORDER BY first_name";
    
    $result = mysqli_query($connection,$query);
    return $result;
}

function delete_guide($connection,$id){
    $query = "DELETE FROM tourguide WHERE id={$id}";

    $result = mysqli_query($connection,$query);
    return $result;
}

function get_search_guides($connection,$key_email){
    $query = "SELECT * FROM tourguide WHERE level = 'tourguide' AND email LIKE '$key_email%' ORDER BY first_name";
    
    $result = mysqli_query($connection,$query);
    return $result;
}
?>