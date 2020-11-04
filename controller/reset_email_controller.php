<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_admin_profile_sql.php'); ?>
<?php //require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_moderator_profile_sql.php'); ?>
<?php //require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_tourist_profile_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\view_guide_profile_sql.php'); ?>
<?php 
	//checking if a user is logged in
	if (!isset($_SESSION['id'])) {
		header('Location:/ceylontrek-3tier/view/login.php');	
    }
    $level=$_SESSION['level'];
    $errors=array();

    if(isset($_SESSION['id'])) {

       header('Location: /ceylontrek-3tier/view/reset_email.php?');

        //getting the user id
        $id=mysqli_real_escape_string($connection,$_SESSION['id']);

        if($level=='admin') {
            $result_set=get_id_admin($connection,$id);
        }

        //if($level=='moderator') {
            //$result_set=get_id_moderator($connection,$id);
        //}

        //if($level=='tourist') {
            //$result_set=get_id_tourist($connection,$id);
        //}

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
        if(isset($_POST['update_email'])) {

		    if(!isset($_POST['current_password']) || strlen(trim($_POST['current_password']))<1) {
			    $errors[]='Current Password is requried/Invalid!';
		    }
        
            if(!isset($_POST['new_email']) || strlen(trim($_POST['new_email']))<1)  {
			    $errors[]='New Email Address is requried/Invalid!';
		    }
        
            $current_password=mysqli_real_escape_string($connection,$_POST['current_password']);
            $curr_password=sha1($current_password);

		    //print($curr_password);
		    if($curr_password!=$password) {
			    $errors[]='Current Password is Invalid!';
		    }

		    $new_email=mysqli_real_escape_string($connection,$_POST['new_email']);//(email sanitized) escaped special charactrs,we can create legal query from this.
		    $result_set1=exist_email($connection,$new_email);
		
            // checking if email address already exists
            if ($result_set1) {
                if (mysqli_num_rows($result_set1) == 1) {
                    $errors[]='Email address already exists';
                }
		    }
        
            //empty errors
		    if(empty($errors)) {
                
			    if($_SESSION['level']=='admin') {
                    $result_set3=update_admin_email($connection,$id,$new_email);
				    header('Location:/ceylontrek-3tier/controller/view_admin_profile_controller.php?adminemail-modified=true');
                }

                // if($_SESSION['level']=='moderator') {
                //     $result_set3=update_email($connection,$id,$new_email);
                //     print_r($result_set3);
				//     header('Location:/ceylontrek-3tier/controller/view_moderator_profile_controller.php?admin-modified=true');
                // }

                // if($_SESSION['level']=='tourist') {
                //     $result_set3=update_email($connection,$id,$new_email);
                //     print_r($result_set3);
				//     header('Location:/ceylontrek-3tier/controller/view_tourist_profile_controller.php?admin-modified=true');
                // }

                if($_SESSION['level']=='tourguide') {
                    $result_set3=update_guide_email($connection,$id,$new_email);
				    header('Location:/ceylontrek-3tier/controller/view_guide_profile_controller.php?guideemail-modified=true');
                }

                else {
				    $errors[]='Failed to modify the record.';
			    }
		    }
		    else {
			    header('Location: /ceylontrek-3tier/view/reset_email.php?'.http_build_query(array('param'=>$errors)));
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