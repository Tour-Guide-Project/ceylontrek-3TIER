<?php
function loging($connection){

    //save the username and password into the variables from form
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);
        $hashed_password=sha1($password);
        
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