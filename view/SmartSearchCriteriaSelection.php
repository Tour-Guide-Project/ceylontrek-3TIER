<?php session_start();?>
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
    if (!isset($_SESSION['id'])){
		include('../view/top_bar.php');
		$_SESSION['level'] = 'noUser';
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

	<div class="con">

		<div class="optionB">
			<?php 
				if ($_SESSION['level'] == 'moderator') {
			?>
				<div class="createB">
					<form action="../controller/SS_controller.php" method="post">
						<button class="searchButton" name="create_place">Create Place</button>		
					</form>
				</div>
			<?php 
				}
			?>
				<div class="searchB">
					<button class="searchButton" style="float: right;"  id="btn">Search</button>
				</div>
		</div>
			
		<div class="boxOutdoor clearfix">

			<div class="name1">
				<h2>Outdoor Activities</h2>
			</div>

			<div class="box">
				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Bicycle Tour"> Bicycle Tour
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Go-Cart Racing"> Go-Cart Racing
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Kite Surfing"> Kite Surfing
					</label>
				</div>	

				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Hiking"> Hiking
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Deep Sea Fishing"> Deep Sea Fishing
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Surfing"> Surfing
					</label>
				</div>	

				<div class="checkbox1">	
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Whale Watching"> Whale Watching
					</label>	
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Golf"> Golf
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Rock Climbing"> Rock Climbing
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
						<input type="checkbox" name="checkActivity" value="Museums"> Museums
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Billiardsg"> Billiards
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Mosques"> Mosques
					</label>
				</div>	

				<div class="checkbox1">
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Spa"> Spa
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Tea Tasting"> Tea Tasting
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Churches"> Churches
					</label>
				</div>	

				<div class="checkbox1">	
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Casino"> Casino
					</label>	
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Temples"> Temples
					</label>
					<label class="cont">
						<input type="checkbox" name="checkActivity" value="Hindu Shrines"> Hindu Shrines
					</label>
				</div>
			</div>
		</div>
		<div id="result"></div>
	</div>

	<!-- JavaScript function for checked -->
	<script src="/ceylontrek-3TIER/resources/js/checkboxes.js"></script>

<?php include('../view/footer.php');?>
</body>
</html>