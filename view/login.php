<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log In-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/login.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="login_box">
		<form action="../controller/auth/login_controller.php" method="post">
			<h1>Login</h1>
		    <?php 
			    if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
		    ?>
			<div class="text_box focus">
				<div class="i">
					<i class="fa fa-user fa-2x" aria-hidden="true"></i>
				</div><!-- i class -->
				<div>
					<h5>Username</h5>
					<input class="input" type="email" name="email" placeholder="Email Address" required="">
				</div>
			</div><!-- text_box -->	

			<div class="text_box focus">
				<div class="i">
					<i class="fa fa-lock fa-2x" aria-hidden="true"></i>
				</div><!-- i class -->
				<div>
					<h5>Password</h5>
					<input class="input" type="password" name="password" placeholder="password" required="">
				</div>
			</div><!-- text_box -->	

			<button type="submit" name="submit">Log in</button>

			<a href="../view/forgot_password.php">Forgot Password?</a>

			<p>Don't have an account yet? <a href="../view/signup_selection_page.php">Sign up</a></p>
			
			</form>

	</div><!-- login_box -->

<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

