<?php
function signup($connection){
//
    //get values in to variables
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$contact=$_POST['tel_no'];
		$password=$_POST['password'];
		$hashed_password=sha1($password);
		$level=$_SESSION['level'];
		$token= bin2hex(random_bytes(50));

		if (isset($_POST['gender']) && $_POST['gender']=="male"){
			$gender='male';
		}
		if (isset($_POST['gender']) && $_POST['gender']=="female"){
			$gender='female';
		}
    //insert records into table
		$Query ="INSERT INTO $level(first_name,last_name,email,password,gender,address,contact,level,token)
		VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$gender}','{$address}','{$contact}','{$level}','{$token}')";

        $result=mysqli_query($connection,$Query); 
        return $result;
}

//checking if email address already exists
function exist_email($connection,$email){

	$query= "SELECT * FROM admin WHERE email='{$email}' 
			UNION  SELECT * FROM moderator WHERE email='{$email}' 
			UNION  SELECT * FROM tourguide WHERE email='{$email}'
			UNION  SELECT * FROM tourist WHERE email='{$email}' 
			LIMIT 1"; 
			
	$result=mysqli_query($connection,$query);
	return $result;
}

//get_id 
function get_id($connection,$email,$level){
	$query="SELECT id FROM $level WHERE email='{$email}' LIMIT 1";
	
	$result=mysqli_query($connection,$query);
	return $result;

}

?>