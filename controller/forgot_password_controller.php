<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\forgot_password_sql.php'); ?>

<?php 
session_start();
require  'function.php';

//if click forgot_password?
if (isset($_POST['forgot_password'])) {
	$errors = array();

	//check username(email) has been entered and valid
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
		$errors[]= 'Username is required/Invalid!';
	}
	
	//check if there are any errors
	if (empty($errors)) {
		//save the username into the variables
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$result_set=forgot_password($connection,$email);
		//print_r($result_set);

		if ($result_set) {
			#//query successfull
			if (mysqli_num_rows($result_set)==1)
			{
				//valid user found
				$user=mysqli_fetch_assoc($result_set);
				$userEmail=$user['email'];
				$token=$user['token'];
				$name=$user['first_name'];
				$level=$user['level'];

				$_SESSION['email']=$userEmail;
				$_SESSION['token']=$token;
				$_SESSION['first_name']=$name;
				$_SESSION['level']=$level;

				sendPasswordResetLink($userEmail,$token,$name);  
                header('Location:http://localhost/ceylontrek-3tier/view/password_message.php');
                
			}else
			{
				//user name invalid
				$errors[]='You have not an account in this email address!';
				header('Location:/ceylontrek-3tier/view/forgot_password.php?'.http_build_query(array('param'=>$errors)));
			}
					
		}else
		{
			$errors[]='Database query failed';
			header('Location:/ceylontrek-3tier/view/forgot_password.php?'.http_build_query(array('param'=>$errors)));
		} 
	}
	else{
		header('Location:/ceylontrek-3tier/view/forgot_password.php?'.http_build_query(array('param'=>$errors)));
	}

}


//get if set tokenpassword
if(isset($_GET['tokenPassword']))
{       
        $tokenPassword=$_GET['tokenPassword'];
       // echo $tokenPassword;
	    $result_set=expire_email($connection,$tokenPassword);

        if($result_set)
        {
            if(mysqli_num_rows($result_set)==1)
            {
                $user=mysqli_fetch_assoc($result_set);
              // print_r($user);
                $_SESSION['email']=$user['email'];  
                $_SESSION['id']=$user['id'];
                header('location:/ceylontrek-3tier/view/reset_password.php');  
            }
            else{
                header('location:/ceylontrek-3tier/view/expire_email.php');
            }
        }
       
}


//controller part of password message php file
if (isset($_POST['password_message'])) {
	$userEmail=$_SESSION['email'];
	$token=$_SESSION['token'];
	$name=$_SESSION['first_name'];

   sendPasswordResetLink($userEmail,$token,$name);
   header('location:http://localhost/ceylontrek-3tier/view/password_message.php');
}

?>

<?php mysqli_close($connection);?>