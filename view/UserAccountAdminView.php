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
<html>
<head>
	<title>Tour Guide Account Admin View</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/TouristAccountAdminView.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/TourGuideAccountAdminView.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:grey;">

	<?php include('../view/new_top_bar.php');?>

	<div class="con">

		<div class="profileCls">
			<img src="../resources/img/ct6.jpg" alt="user-avtar" width="100%" class="profilePic">

			<!-- <div class="star-rating">
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            </div> -->
		</div>

		<div class="formCls">
			<div class="formClsCls">
				<div class="row">
					<div class="col-25">
						<label for="fName" class="lbl">Full Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="fName" <?php echo 'value="'.$first_name.'"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="gender" class="lbl">Gender</label>
					</div>
					<div class="col-75">
						<input type="text" name="gender" <?php echo 'value="'.$last_name.'"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="address" class="lbl">Address</label>
					</div>
					<div class="col-75">
						<input type="text" name="address" <?php echo 'value="'.$address.'"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="conNumber" class="lbl">Contact Number</label>
					</div>
					<div class="col-75">
						<input type="text" name="conNumber" <?php echo 'value="'.$contact.'"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="email" class="lbl">Email</label>
					</div>
					<div class="col-75">
						<input type="text" name="email" <?php echo 'value="'.$email.'"'; ?> readonly>
					</div>
				</div>
				
			</div>
		</div>

		<div class="btnCls">
			<form action="../controller/UserAccountAdmin_controller.php" method="post">
				<div class="btn">
					<button class="sectionBtn" type="submit" name="message_user">Message User</button>
				</div>
				<div class="btn">
					<button class="sectionBtn" type="submit" name="reset_password">Reset Password</button>
				</div>
				<div class="btn">
					<button class="sectionBtn" type="submit" name="delete_account">Delete Account</button>
					<!-- <button class="sectionBtn" type="submit" name="delete_account" onclick="return checkdelete()">Delete Account</button> -->
				</div>
			</form>
		</div>			
	</div>

	<!-- JavaScript function for delete guide -->
	<!-- <script>
		function checkdelete() {
			return Confirm("Are you sure you want to Delete this Tour-guide Account?");
		}
	</script> -->

<?php include('../view/footer.php');?>

</body>
<!-- <script type="text/javascript" src="../resources/js/jscript.js"></script> -->
</html>