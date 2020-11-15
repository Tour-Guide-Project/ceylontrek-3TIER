<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_admin_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_moderator_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php 
	//checking if a user is logged in
	if (!isset($_SESSION['id'])) {
		header('Location:/ceylontrek-3tier/view/login.php');	
    }
    $level=$_SESSION['level'];
    $errors=array();
    $path=$_SESSION['image'];

    if(isset($_SESSION['id'])) {

       header('Location: /ceylontrek-3tier/view/view_reset_password.php');

        //getting the user id
        $id=mysqli_real_escape_string($connection,$_SESSION['id']);

        if($level=='admin') {
            $result_set=get_id_admin($connection,$id);
        }

        if($level=='moderator') {
            $result_set=get_id_moderator($connection,$id);
        }

        if($level=='tourist') {
            $result_set=get_id_tourist($connection,$id);
        }

        if($level=='tourguide') {
            $result_set=get_id_guide($connection,$id);
        }

		if($result_set){
			if(mysqli_num_rows($result_set)==1){
				//user found,retrieve password
				$result=mysqli_fetch_assoc($result_set);
                $password=$result['password'];
                //print_r($password);
			}
		}
    }    
        //check click update email address   
        if(isset($_POST['update_password'])) {

		    if(!isset($_POST['current_password']) || strlen(trim($_POST['current_password']))<1) {
			    $errors[]='Current Password is requried/Invalid!';
            }
            if(!isset($_POST['new_password']) || strlen(trim($_POST['new_password']))<1) {
			    $errors[]='New Password is requried/Invalid!';
		    }
            if(!isset($_POST['confirm_password']) || strlen(trim($_POST['confirm_password']))<1) {
			    $errors[]='Confirm Password is requried/Invalid!';
            }
            if($_POST['new_password'] != $_POST['confirm_password']) {
			    $errors[]='Please enter the same password!';
            }
            if((strlen($_POST['confirm_password'])<6)){
	            $errors[]="Password must contain at least 6 characters!";
		    }
        
            $current_password=mysqli_real_escape_string($connection,$_POST['current_password']);
            $curr_password=sha1($current_password);

		    //print($curr_password);
		    if($curr_password!=$password) {
			    $errors[]='Current Password is Invalid!';
		    }

        
            //empty errors
		    if(empty($errors)) {
                $new_password=mysqli_real_escape_string($connection,$_POST['new_password']);
                $hashed_password=sha1($new_password);
                $newtoken= bin2hex(random_bytes(50));
                print_r($hashed_password);

			    if($_SESSION['level']=='admin') {
                    $result_set3=update_admin_password($connection,$id,$hashed_password,$newtoken);
                     //$_SESSION['password']=$_POST['new_password'];
				    header('Location:/ceylontrek-3tier/view/view_admin_profile.php?admin-modified=true&path='.$path.'');
                }

                if($_SESSION['level']=='moderator') {
                    $result_set3=update_moderator_password($connection,$id,$hashed_password,$newtoken);
                   // $_SESSION['password']=$_POST['new_password'];
				    header('Location:/ceylontrek-3tier/view/view_moderator_profile.php?moderator-modified=true&path='.$path.'');
                }

                 if($_SESSION['level']=='tourist') {
                    $result_set3=update_tourist_password($connection,$id,$hashed_password,$newtoken);
                   // $_SESSION['password']=$_POST['new_password'];
				    header('Location:/ceylontrek-3tier/view/view_tourist_profile.php?tourist-modified=true&path='.$path.'');
                }

                if($_SESSION['level']=='tourguide') {
                    $result_set3=update_guide_password($connection,$id,$hashed_password,$newtoken);
                   // $_SESSION['password']=$_POST['new_password'];
				    header('Location:/ceylontrek-3tier/view/view_guide_profile.php?guide-modified=true&path='.$path.'');
                }

                else {
				    $errors[]='Failed to modify the record.';
			    }
		    }
		    else {
			    header('Location: /ceylontrek-3tier/view/view_reset_password.php?'.http_build_query(array('param'=>$errors)));
		    }
	    }
    
    //if click cancel button
    if(isset($_POST['cancel']))
	{
        if($_SESSION['level']=='admin'){
            header('Location:/ceylontrek-3tier/view/view_admin_profile.php');
        }
        if($_SESSION['level']=='moderator'){
            header('Location:/ceylontrek-3tier/view/view_moderator_profile.php');
        }
        if($_SESSION['level']=='tourguide'){
            header('Location:/ceylontrek-3tier/view/view_guide_profile.php');
        }
        if($_SESSION['level']=='tourist'){
            header('Location:/ceylontrek-3tier/view/view_tourist_profile.php');
        }
		
	}
?>
<?php mysqli_close($connection);?>