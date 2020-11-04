<?php session_start();

$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$address=$_SESSION['address'];
$contact=$_SESSION['contact'];
//print_r($_SESSION);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Guide Profile-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/view_admin_profile.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background: none;">
	<?php include('../view/new_top_bar.php'); ?>
	<div class="view_admin_profile_box">
		<form action="../controller/view_guide_profile_controller.php" method="post">
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
					<input class="input" type="email" name="email" <?php echo 'value="'.$email.'"' ;?>>
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

			<div class="reset_psw">
				<a  href="/ceylontrek-3tier/view/reset_password.php">Reset Password</a>
			</div>

			<div class="reset_email">
				<button type="submit" name="edit_email">Reset Email</button>
			</div>	
			
			<button class="cancel" type="reset" name="cancel">Cancel</button>
			<button class="submit" type="submit" name="submit">Update Profile</button>
			
			</form>
			
	</div><!-- view_admin_profile_box -->

<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
