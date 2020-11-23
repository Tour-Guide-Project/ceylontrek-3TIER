<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create Admin & Moderator Account-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/signup.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background:none;">

	<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	<div class="signup_box">
		<form action="/ceylontrek-3tier/controller/signup_controller.php" method="post">
			<h1>Create Account</h1>
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
					<input class="input" type="text" name="first_name" placeholder="First Name">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="text" name="last_name" placeholder="Last Name">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="Phone" name="tel_no" placeholder="Contact Details">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="text" name="address" placeholder="Address">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="email" name="email" placeholder="Email Address">
				</div>
			</div><!-- text_box -->	
		
			<div>
				<input class="input_radio" type="radio" name="gender" id="gender" value="male">
				<label>Male</label>
			</div><!-- label -->
			<div>
				<input class="input_radio" type="radio" name="gender" id="gender" value="female">
				<label>Female</label>
			</div><!-- label -->	

			<div class="text_box">
				<div>
					<input class="input" type="password" name="password" placeholder="Password" id="myInput1">
					<span class="eye" onclick="myFunction1()">
						<i id="hide1" class="fa fa-eye"></i>
						<i id="hide2" class="fa fa-eye-slash"></i>
					</span>
					<script>
						function myFunction1(){
							var x=document.getElementById("myInput1");
							var y=document.getElementById("hide1");
							var z=document.getElementById("hide2");
						
						if(x.type === "password"){
							x.type ="text";
							y.style.display = "block";
							z.style.display = "none";
						}
						else{
							x.type ="password";
							y.style.display = "none";
							z.style.display = "block";
						}
					}
					</script>
				</div>
			</div><!-- text_box -->	
			
			<button class="cancel" type="cancel" name="cancel" onclick ="RemoveRequired();">Cancel</button>
			<button class="submit" type="submit" name="submit" onclick ="AddRequired();">Create Account</button>

			<p>Already have an account? <a href="http://localhost/ceylontrek-3tier/view/login.php">Log In</a></p>
			
			</form>
			
	</div><!-- signup_box -->

<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
<script type="text/javascript" src="../resources/js/signup.js"></script>
</html>

