<!DOCTYPE html>
<html>
<head>
	<title>Smart Search Criteria Selection</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/SmartSearchCriteriaSelection.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('../resources/img/ct5.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

	<?php include('../view/top_bar.php');?>

	<div class="con">

		<button class="searchButton"><a style="color:white; text-decoration:none;" href='SmartSearchResultsPage.php'>Search</a></button>
			
		<div class="boxOutdoor clearfix">

			<div class="name1">
				<h2>Outdoor Activities</h2>
			</div>

			<div class="box">
				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" > Bicycle Tour
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Go-Cart racing
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Kite Surfing
					</label>
				</div>	

				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" checked="checked"> Hiking
					</label>
					<label class="cont">
						<input type="checkbox" > Deep Sea Fishing
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Surfing
					</label>
				</div>	

				<div class="checkbox1">	
					<label class="cont">
						<input type="checkbox" > Whale watching
					</label>	
					<label class="cont">
						<input type="checkbox" checked="checked"> Golf
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Rock Climbing
					</label>
				</div>
			</div>
		</div>

		<div class="boxIndoor clearfix">

			<div class="name1">
				<h2>Indoor Activities</h2>
			</div>

			<div class="box">

				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" checked="checked"> Museums
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Billiards
					</label>
					<label class="cont">
						<input type="checkbox" > Mosques
					</label>
				</div>	

				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" > Spa
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Tea Tasting
					</label>
					<label class="cont">
						<input type="checkbox" checked="checked"> Churches
					</label>
				</div>	

				<div class="checkbox1">	
					<label class="cont">
						<input type="checkbox" checked="checked"> Casino
					</label>	
					<label class="cont">
						<input type="checkbox" checked="checked"> Temples
					</label>
					<label class="cont">
						<input type="checkbox" > Hindu Shrines
					</label>
				</div>
			</div>
		</div>
	</div>

<?php include('../view/footer.php');?>
</body>
</html>