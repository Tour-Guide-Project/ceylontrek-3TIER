<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Smart Search Criteria Selection</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/SmartSearchCriteriaSelection.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('../resources/img/ct5.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

	<?php
	if (!isset($_SESSION['id'])) {
		include('../view/top_bar.php');
		$_SESSION['level'] = 'noUser';
	} else {
		include('../view/new_top_bar.php');
	}
	?>

	<div class="con">

		<div class="optionB">
			<?php
			if ($_SESSION['level'] == 'moderator') {
			?>
				<div class="createB">
					<form action="../controller/SS_controller.php" method="get">
						<button class="searchButton" name="create_place">Create Place</button>
					</form>
				</div>
			<?php
			}
			?>
			<div class="searchB">
				<button class="searchButton" style="float: right;" id="btn">Search</button>
			</div>
		</div>

		<div class="boxmain clearfix">

			<div class="name1">
				<h2>Outdoor Activities</h2>
			</div>

			<div class="box">

				<?php
				if (isset($_GET['criterias_out'])) {
					$criterias_out = $_GET['criterias_out'];
					//print_r($criterias_out);

					foreach ($criterias_out as $c_out) {
				?>
						<div class="checkbox1">
							<label class="cont">
								<input type="checkbox" name="checkActivity" <?php echo 'value="' . $c_out['activity'] . '"'; ?>>
								<?php echo $c_out['activity']; ?>
							</label>
						</div>
				<?php
					}
				}
				?>
			</div>
		</div>

		<div class="boxmain clearfix">

			<div class="name1">
				<h2>Indoor Activities</h2>
			</div>

			<div class="box">

				<?php
				if (isset($_GET['criterias_in'])) {
					$criterias_in = $_GET['criterias_in'];
					//print_r($criterias_in);

					foreach ($criterias_in as $c_in) {
				?>
						<div class="checkbox1">
							<label class="cont">
								<input type="checkbox" name="checkActivity" <?php echo 'value="' . $c_in['activity'] . '"'; ?>>
								<?php echo $c_in['activity']; ?>
							</label>
						</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>

	<!-- JavaScript function for checked -->
	<script src="/ceylontrek-3TIER/resources/js/checkboxes.js"></script>

	<?php include('../view/footer.php'); ?>

	<!-- //successfully deleted alert  -->
	<?php
	if (isset($_GET['deleteSuccess'])) { ?>
		<script>
			alert('You have Successfully Deleted Your Place');
		</script>
	<?php } ?>
</body>

</html>