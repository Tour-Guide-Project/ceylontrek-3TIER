<?php
 function forgot_password($connection,$email){
    
		//prepare database query
		$query= "SELECT * FROM admin WHERE email='{$email}' 
		UNION SELECT * FROM moderator WHERE email='{$email}'
		UNION SELECT * FROM tourist WHERE email='{$email}'
        UNION SELECT * FROM tourguide WHERE email='{$email}' LIMIT 1";

        $result=mysqli_query($connection,$query);
        return $result;
 }
 
 function expire_email($connection,$tokenPassword){

	$query="SELECT * FROM admin WHERE token='{$tokenPassword}' 
	UNION SELECT * FROM moderator WHERE token='{$tokenPassword}'
	UNION SELECT * FROM tourist WHERE token='{$tokenPassword}'
	UNION SELECT * FROM tourguide WHERE token='{$tokenPassword}'LIMIT 1";

	$result=mysqli_query($connection,$query);
	return $result;
 }

 function reset_password($connection,$level,$hashed_password,$newtoken,$email){

	$query="UPDATE ".$level." SET password='{$hashed_password}',token='{$newtoken}' 
	WHERE email='{$email}' Limit 1";

	$result=mysqli_query($connection,$query);
	return $result;
 }
?>