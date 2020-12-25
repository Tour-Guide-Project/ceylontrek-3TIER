<?php session_start();

$places=$_SESSION['places'];

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

	<div class="con">

		<?php 
			foreach ($places as $place) {
		?>

		<div class="section">
			<div class="image">
				<!-- <img src="../resources/img/SmartSearchResult/hik.jpg" alt="" style="width:70%; height:100px"> -->
				<?php
					if($place['image_path']){
						echo '<img src="'.$place['image_path'].'" alt="Paris" style="width:70%; height:100px;">';
					}
					else{
						echo '<img src="../resources/img/default.jpg" alt="" style="width: 200px;height:250px;margin-left:60px;border-radius:100%;">';
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

<?php include('../view/footer.php');?>

</body>
</html>