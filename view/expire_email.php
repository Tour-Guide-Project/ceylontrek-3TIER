<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Expired Email Message-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/forgot_password.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct1.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="expire_email_box">
			<form action="/ceylontrek-3tier/controller/password_message.php" method="post">
				<h4 style="font-size: 18px; color: #9A1616;"><b>This Reset Link is expired !</b></h4>
				<p style="font-size: 18px; color:white;">Sorry,Unfortunately this reset link has been expired.But Don't worry, You can try again for resetting your password now. Please click on the Reset Password below.</p>

				<div style="float: left;">
					<a href="/ceylontrek-3tier/view/login.php">Cancel</a>
				</div>
				<div style="float: right;">
					<a href="/ceylontrek-3tier/view/forgot_password.php">Reset Password</a>
				</div>
				
			</form>

	</div><!-- password_message_box -->

<?php include('../view/footer.php'); ?>
</body>
</html>