<?php session_start();

$places = $_SESSION['places'];
//$activities = $_SESSION['activities'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/smartSearchResultsPage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('../resources/img/18.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
?> 
<div class="main">
<?php
	foreach ($places as $key=>$placess) {
?>
	<div class="second">
		<div class="title">
			<h1><?php echo $key; ?></h1>
		</div>

		<div class="con">

			<?php
				foreach ($placess as $place) {
			?>
				<div class="section">
					<div class="place">
						<h2> <?php echo $place['place_name'];?> </h2>
					</div>
					<div class="image">
						<?php
							if($place['image_path']){
								echo '<img src="'.$place['image_path'].'" alt="Paris" style="width:70%; height:100px;">';
							}
							else{
								echo '<img src="../resources/img/SmartSearchResult/default.jpg" alt="" style="width:70%; height:100px;">';
							}
						?>
					</div>

					<div class="paragraph">
						<p>
							<?php
								echo $place['short_description'];
							?>
						</p>
					</div>

					<div class="btn">
						<form action="../controller/SSviewmore_controller.php" method="get">
							<button class="viewButton" style="color:white; text-decoration:none;" type="submit" name="view_place" value="<?php echo $place['place_name']; ?>">View</a></button>
						</form>
					</div>
				</div>

			<?php 
				}
			?>
		</div>
	</div>
<?php 
	}
?>
</div>
<?php include('../view/footer.php');?>

</body>
</html>