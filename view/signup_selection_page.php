<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign Up-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/signup.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct3.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="signup_selection_page_box">
		<form action="../controller/signup_selection_page_controller.php" method="post">
			<h1>Sign Up <i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i></h1>

			<button class="submit sub1" type="submit" name="submit_tourist">SignUp as Tourist</button>
			<button class="submit sub2" type="submit" name="submit_tourguide">SignUp as Tour-Guide</button>
			
			</form>

	</div><!-- signup_box -->

<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
