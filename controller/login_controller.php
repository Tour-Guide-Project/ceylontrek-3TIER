<?php require_once('../config/connection.php'); ?>
<?php require_once('../sql/login_sql.php'); ?>
<?php 
session_start();
//check the sumbit button has been pressed
if (isset($_POST['submit'])) {

	$errors = array();

	//check usrrname and password has been entered
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
		$errors[]= 'Username is required/Invalid';
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
		$errors[]= 'Password is required/Invalid';
	}

	//check if there are any errors
	if (empty($errors)) 
	{
		$result=loging($connection);//call sql function
		if($result)
		{
			//query successfull
			if (mysqli_num_rows($result)==1)
			{
				//valid user found
				$record=mysqli_fetch_assoc($result);
				//print_r($record);
				if($record['level']=='admin')
				{
					$_SESSION['level']='admin';
					$_SESSION['id']=$record['id'];
					header('Location: ../view/home_admin_draft.php');
				}
				if($record['level']=='moderator')
				{
					$_SESSION['level']='moderator';
					$_SESSION['id']=$record['id'];
					header('Location: ../view/home_moderator_draft.php');
				}
				elseif($record['level']=='tourist')
				{
					$_SESSION['level']='tourist';
					$_SESSION['id']=$record['id'];
					header('Location: ../view/home_tourist_draft.php');
				}
				elseif($record['level']=='tourguide')
				{
					$_SESSION['level']='tourguide';
					$_SESSION['id']=$record['id'];
					header('Location: ../view/home_tourguide_draft.php');
				}  
			}else
			{
				//user name and password invalid
				$errors[]='Invalid Username /Password';
			}
					
		}
		else
		{
			$errors[]='Database query failed';
		}
		
	}

}
?>
<?php mysqli_close($connection);?>