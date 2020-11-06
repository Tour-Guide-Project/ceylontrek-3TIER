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
			<img src="img/ct6.jpg" alt="user-avtar" width="100%" class="profilePic">

			<div class="star-rating">
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            	<span class="fa fa-star checked"></span>
            </div>
		</div>

		<div class="formCls">
			<div class="formClsCls">
				<form>
					<div class="row">
						<div class="col-25">
							<label for="fName" class="lbl">Full Name</label>
						</div>
						<div class="col-75">
							<input type="text" name="fName" value="Sulakshanee Theja" readonly>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-25">
							<label for="dob" class="lbl">Date Of Birth</label>
						</div>
						<div class="col-75">
							<input type="text" name="dob" value="11.08.1997" readonly>
						</div>
					</div> -->
					<div class="row">
						<div class="col-25">
							<label for="gender" class="lbl">Gender</label>
						</div>
						<div class="col-75">
							<input type="text" name="gender" value="Female" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="address" class="lbl">Address</label>
						</div>
						<div class="col-75">
							<input type="text" name="address">
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-25">
							<label for="nic" class="lbl">NIC Number</label>
						</div>
						<div class="col-75">
							<input type="text" name="nic">
						</div>
					</div> -->
					<div class="row">
						<div class="col-25">
							<label for="conNumber" class="lbl">Contact Number</label>
						</div>
						<div class="col-75">
							<input type="text" name="conNumber">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="email" class="lbl">Email</label>
						</div>
						<div class="col-75">
							<input type="text" name="email" value="sulatheja8@gmail.com" readonly>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="btnCls">
			<div class="btn">
				<button class="sectionBtn">Message User</button>
			</div>
			<div class="btn">
				<button class="sectionBtn">Reset Password</button>
			</div>
			<div class="btn">
				<button class="sectionBtn">Delete Account</button>
			</div>
		</div>
	</div>

<?php include('../view/footer.php');?>

</body>
</html>