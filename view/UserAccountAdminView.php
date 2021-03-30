<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<title>User Account Admin View</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/TouristAccountAdminView.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/TourGuideAccountAdminView.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
	<link rel="stylesheet" href="../resources/css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:grey;">

	<?php
	if (!isset($_SESSION['id'])) {
		include('../view/top_bar.php');
	} else {
		include('../view/new_top_bar.php');
	}
	?>

	<div class="con">

		<?php
		if (isset($_GET['user_details'])) {
			$details = $_GET['user_details'];
			//print_r($details);
		}

		if (isset($_GET['user_level'])) {
			$user_level = $_GET['user_level'];
			//print_r($user_level);
		}
		?>

		<div class="profileCls">
			<?php
			if ($details['image_path']) {
				echo '<img src="' . $details['image_path'] . '" alt="user-avtar" width="100%" class="profilePic">';
			} else {
				echo '<img src="../resources/img/default.jpg" alt="user-avtar" width="100%" class="profilePic">';
			}
			?>

			<!-- <div class="star-rating">
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            </div> -->
		</div>

		<div class="formCls" style="margin-left: -50px;">
			<div class="formClsCls" style="width: 700px;">
				<div class="row">
					<div class="col-25">
						<label for="fName" class="lbl">Full Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="fName" <?php echo 'value="' . $details['first_name'] . '"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="gender" class="lbl">Gender</label>
					</div>
					<div class="col-75">
						<input type="text" name="gender" <?php echo 'value="' . $details['last_name'] . '"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="address" class="lbl">Address</label>
					</div>
					<div class="col-75">
						<input type="text" name="address" <?php echo 'value="' . $details['address'] . '"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="conNumber" class="lbl">Contact Number</label>
					</div>
					<div class="col-75">
						<input type="text" name="conNumber" <?php echo 'value="' . $details['contact'] . '"'; ?> readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="email" class="lbl">Email</label>
					</div>
					<div class="col-75">
						<input type="text" name="email" <?php echo 'value="' . $details['email'] . '"'; ?> readonly>
					</div>
				</div>

			</div>
		</div>

		<div class="btnCls">
			<form action="../controller/UserAccountAdmin_controller.php" method="post">
				<div class="btn">
					<button class="sectionBtn"  style="width:180px;margin-left:-20px;" type="submit" name="message_user">Message User</button>
				</div>
			</form>
			<!-- <div class="btn">
					<button class="sectionBtn" type="submit" name="reset_password">Reset Password</button>
				</div> -->
			<?php
			if ($_SESSION['level'] == 'admin') {
			?>
				<form action="../controller/delete_user_controller.php" method="get">
					<div class="btn" >
						<input type="hidden" name="user_id"  value="<?php echo $details['id']; ?>"></input>
						<button class="sectionBtn" style="width:180px;margin-left:-20px;" name="user_level" value="<?php echo $user_level; ?>" onclick="return confirm('Are you sure you want to Delete this Tour-guide Account?')"> Delete Account </button>
					</div>
				</form>
			<?php
			}
			?>
			<!-- </form> -->
		</div>
	</div>

	<?php include('../view/footer.php'); ?>
</body>

</html>