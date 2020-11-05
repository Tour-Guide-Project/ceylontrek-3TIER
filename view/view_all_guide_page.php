<?php session_start();

$result = $_SESSION['result'];
//print_r($_SESSION['result']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View All Guide Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/view_all_guide_page.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none;">
	<?php include('../view/new_top_bar.php'); ?>
	<div class="view_all_box">

			<form action="view_all_guide_page.php" method="post">

				<div class="text_box_search_bar">
					<input type="text" name="" placeholder="Keyword.."></input>
					<input type="submit" name="" value="Search"></input>
				</div><!-- text_box_search_bar-->	


				<div class="moderator_dashboard_box">
					<div class="prow">

						<?php 
							foreach ($result as $x => $guide) {
						?>
											
								<div class="pcolumn">
									<div class="pcard">
										<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
											<div class="pcontainer">
												<h2><?php echo "$x => $guide"; ?></h2>
												<p><?php echo $guide['email']; ?></p>
												<p><button  class="pbutton">View Profile</button></p>
											</div>
									</div>
								</div>

						<?php  
							}
						?>

					</div> <!-- prow -->						

			    </div><!-- moderator_box -->

			</form>

	</div>
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
