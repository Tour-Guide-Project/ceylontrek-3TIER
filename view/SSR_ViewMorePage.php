<?php session_start();
	$place_name = $_SESSION['place_name'];
	$image_path = $_SESSION['image_path'];
	$long_description = $_SESSION['long_description'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/SSR_ViewMorePage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('../resources/img/2.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
?> 
	
	<div class="con">
		<?php
			// $place_name = $_GET['place_name'];
			// //print_r($place_name);
			// $image_path = $_GET['image_path'];
			// $long_description = $_GET['long_description'];
		?>
		<h1 class="ttl"><b> <?php echo "$place_name"; ?></b></h1>
		<div class="image">
			<?php
				if($image_path){
					echo '<img src="'.$image_path.'" alt="" style="width:60%; height:350px;">';
				}
				else{
					echo '<img src="../resources/img/SmartSearchResult/default.jpg" alt="" style="width:60%; height:350px;">';
				}
			?>
		</div>

		<div>
			<p class="paragraph"><?php echo "$long_description"; ?></p>
		</div>

		<?php 
		if ($_SESSION['level'] == 'moderator') {
		?>
			<div class="submitCls">
				<div>
					<form action="../controller/SS_edit_place_controller.php" method="get">
						<button class="btnbtn" name="edit_place" value="<?php echo $place_name;?>" >Edit Place</button>
					</form>
				</div>
				<div>
					<button class="btnbtn" name="delete_place" id="delete_place">Delete Place</button>
				</div>
			</div>
		<?php 
			}
		?>
	</div>

	<!-- JavaScript function for checked -->
	<script src="/ceylontrek-3TIER/resources/js/SS_delete_place.js"></script>

<?php include('../view/footer.php');?>

</body>
</html>