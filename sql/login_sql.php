<?php
function loging($connection,$email,$hashed_password){
    
    //prepare database query
		$query= "SELECT * FROM admin WHERE email='{$email}' AND password='{$hashed_password}'
		UNION  SELECT * FROM moderator WHERE email='{$email}' AND password='{$hashed_password}'
		UNION  SELECT * FROM tourguide WHERE email='{$email}' AND password='{$hashed_password}'
		UNION  SELECT * FROM tourist WHERE email='{$email}' AND password='{$hashed_password}'
    LIMIT 1"; 

    $result_set=mysqli_query($connection,$query);
    return $result_set;
}
?>