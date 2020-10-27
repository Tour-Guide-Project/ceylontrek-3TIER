<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forgot password_message-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/forgot_password.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct1.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="password_message_box">
			<form action="/ceylontrek-3tier/controller/forgot_password_controller.php" method="post">
				<p>An email has been sent your email address to with a link to reset your password.<br><br> >>If you have not received the message,Please click on <b>Resend</b> button>></p>
				<button type="submit" name="password_message">Resend &raquo;</button>
				<a href="/ceylontrek-3tier/view/forgot_password.php">&laquo; Back</a>
			</form>

	</div><!-- password_message_box -->

<?php include('../view/footer.php'); ?>
</body>
</html>
