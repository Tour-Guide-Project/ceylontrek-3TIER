<?php session_start();

$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$address=$_SESSION['address'];
$contact=$_SESSION['contact'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Moderator Profile-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/view_admin_profile.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background: #ccf2ff;">
	<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

<div class="side_bar">
			<img src="../resources/img/logo2.png" class="dashlogo">
			<img src="../resources/img/reviewimg.jpg" class="profile">
			<form action="../controller/moderator_dashboard_controller.php" method="post">
				<button class="edit" name="edit_profile" type="submit"><span>Edit Profile</span> </button><br>
			</form>
			<div class="sidebar-menu">
				<ul>
					<li>
						<a href="moderator_dashboard.php">
							<span class="menu-icon"><i class="fa fa-folder-open fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">My Dashboard</span>
						</a>
					</li>
					<li>
						<a href="../controller/chat_controller.php">
							<span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
							<span class="menu-title">Inbox</span>
						</a>
					</li>
					<li>
						<form action="../controller/complain_controller.php" method="post">
							<a href="">
								<span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
								<button type="submit" style=" 
								display: block;
								padding: 0 10px;
								height: 40px;
								font-size: medium;
								background:none;
								outline:none;
								border:none;
								color:white;
								line-height: 40px;
								text-align: start;" name="complain_button">Complain</button>
							</a>
						</form>
					</li>
					<li>
						<a href="../controller/view_users_admin_controller.php?user_level=tourguide">
							<span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View all Guides</span>
						</a>
					</li>
					<li>
						<a href="../controller/view_users_admin_controller.php?user_level=tourist">
							<span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View all Tourists</span>
						</a>
					</li>
					<li>
						<a href="../view/create_event.php">
							<span class="menu-icon"><i class="fa fa-calendar-plus-o fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">Create Event</span>
						</a>
					</li>
					<li>
						<a href="../view/view_event.php">
							<span class="menu-icon"><i class="fa fa-calendar-o fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View Event</span>
						</a>
					</li>
				</ul>
			</div>
			<!--sidebar-manu-->
		</div>
		<!--side_bar-->
		
	<div class="view_admin_profile_box">
		<form action="../controller/view_moderator_profile_controller.php" method="post">
			<h1>Edit My Profile</h1>
			<?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
			?>
			<div class="text_box">
				<div>
					<label>First Name :</label>
					<input class="input" type="text" name="first_name" <?php echo 'value="'.$first_name.'"'; ?> >
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<label>Last Name :</label>
					<input class="input" type="text" name="last_name" <?php echo 'value="'.$last_name.'"'; ?> >
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<label>Contact Details :</label>
					<input class="input" type="Phone" name="tel_no"  <?php echo 'value="'.$contact.'"'; ?>>
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<label>Address :</label>
					<input class="input" type="text" name="address" <?php echo 'value="'.$address.'"'; ?> >
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<label>Email Address :</label>
					<input class="input" type="email" name="email"  readonly style=" color:  #352d2d;"<?php echo 'value="'.$email.'"' ;?>>
				</div>
			</div><!-- text_box -->	
		
			<div>
				<input class="input_radio" type="radio" name="gender" required="" value="male"<?php if($gender=='male')
				{echo "checked";}?>>
				<label>Male</label>
			</div><!-- label -->
			<div>
				<input class="input_radio" type="radio" name="gender" required="" value="female" <?php if($gender=='female')
				{echo "checked";}?>>
				<label>Female</label>
			</div><!-- label -->

			<div class="first">
				<div class="reset_psw">
					<a  href="/ceylontrek-3tier/controller/view_reset_password_controller.php">Reset Password</a>
				</div>

				<div class="reset_email">
					<button type="submit" name="edit_email">Reset Email</button>
				</div>
			</div>

			<div class="second">
				<button class="cancel" type="reset" name="cancel">Cancel</button>
				<button class="submit" type="submit" name="submit">Update Profile</button>
			</div>
			
			</form>
			
	</div><!-- view_admin_profile_box -->

	<div class="imgupload">
	<div class="upload">
		<form action="../controller/view_upload_image.php" method="post" enctype="multipart/form-data">
		<div >
		<?php
		if(isset($_GET['path'])){
			$path=$_GET['path'];
			echo '<img src="'.$path.'" alt="" style="width: 200px;height:250px;margin-left:60px;border-radius: 100%;">';
		}
		else{
			echo '<img src="../resources/img/default.jpg" alt="" style="width: 200px;height:250px;margin-left:60px;border-radius:100%;">';
		}
		?>
		</div>
		
		<label>Edit profile Image</label>
		<?php
				if(isset($_GET['param_img'])){
                    $error_img=$_GET['param_img'];
				    foreach ($error_img as $errors_img) {
					    echo '<p style= "color:red; padding:5px;  margin-left:40px;" class="error">'.$errors_img.'</p>';
				    }
			    }
		?>
		<p><input type="file" id="file" name="file"/></p>
		<div class="image_btn">
			<div>
				<?php
					if($_GET['path']=='../resources/img/default.jpg'){
						echo '<p><input class="submit" type="submit" id="uploadimage"  name="submit"  value="Upload Image" style="margin-left:70px;"  onclick ="AddRequired();"></p>';
					}
					elseif(isset($_GET['path'])){
						echo '<p><input class="submit" type="submit" id="uploadimage"  name="submit" value="Upload Image"  onclick ="AddRequired();"></p>';
						echo '<p><input class="reset" type="submit" id="del_image"   name="cancel"  value="Remove Image" onclick ="RemoveRequired();"></p>';
					}
					else{
						
						echo '<p><input class="submit" type="submit" id="uploadimage"  name="submit"  value="Upload Image" style="margin-left:70px;"  onclick ="AddRequired();"></p>';
					}
				?>
			</div>
		</div>
		
		</form>
	</div>
	</div>
	<!-- upload image -->
	
<?php
if (isset($_GET['moderator-modified'])){
	echo "<script>alert('Updated Successfully!');</script>";
}
?>

<div><?php include('../view/footer.php'); ?></div>
</body>
<script type="text/javascript" src="../resources/js/upload_img.js"></script>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
