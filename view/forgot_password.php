<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forgot password-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/forgot_password.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct1.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="forgot_box">
			<h1>Forgot Password?</h1>
			<form action="/ceylontrek-3tier/controller/forgot_password_controller.php" method="post">
				<p>Please enter your email address.You will receive a link to reset your password via email.</p>
				<div class="text_box">
					<label>Email-Address</label>

					<?php 
						if(isset($_GET['param'])){
							$errors=$_GET['param'];
							foreach ($errors as $error) {
								echo '<p class="error">'.$error.'</p>';
							}
						}
           			?>   

					<input type="email" name="email" placeholder="eg:kavindyadewindi@gmail.com">
				</div><!-- text_box -->	
				<a href="/ceylontrek-3tier/view/login.php">&laquo; Back</a>

				<button type="submit" name="forgot_password">Send &raquo;</button>
			
			</form>

	</div><!-- forgot_box -->

<?php include('../view/footer.php'); ?>
</body>
</html>
