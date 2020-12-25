<?php session_start();

$short_description=$_SESSION['short_description'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/smartSearchResultsPage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
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
		<div class="section">
			<div class="image">
				<!-- <img src="../resources/img/SmartSearchResult/hik.jpg" alt="Paris" style="width:70%; height:100px"> -->
				<?php
					if(isset($_GET['path'])){
						$path=$_GET['path'];
						echo '<img src="'.$path.'" alt="Paris" style="width:70%; height:100px;">';
					}
					else{
						echo '<img src="../resources/img/default.jpg" alt="" style="width: 200px;height:250px;margin-left:60px;border-radius:100%;">';
					}
				?>
			</div>

			<div class="paragraph">
				<p>
					<?php
						echo '$short_description';
					?>
				</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<!-- <div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/sigiriya.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div class="paragraph">
				<p>Sigiriya or Sinhagiri is an ancient rock fortress and one of the most valuable historical mouments of Sri Lanka located in Mathale.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/arugambay.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div class="paragraph">
				<p>Arugam Bay is a bay situated in Sri Lanka's southeast coast, and a historic settlement of the ancient Batticaloa.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/temple.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div  class="paragraph"> 
				<p>Sri Dalada Maligawa or the Temple of the Sacred Tooth Relic is a Buddhist temple in the city of Kandy, Sri Lanka.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/gallefort.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div class="paragraph">
				<p>Galle Fort or the Dutch Fort is a Portuguese fortress which was built in 1588 at the bay of Galle on the southwestern coast of Sri Lanka.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/hortan.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div class="paragraph">
				<p>Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div>

		<div class="section">
			<div class="image">
				<img src="../resources/img/SmartSearchResult/hakgala.jpg" alt="Paris" style="width:70%; height:100px">
			</div>

			<div class="paragraph">
				<p>Hakgala Botanical Garden is the second largest garden among the five botanical gardens in Sri Lanka situated Nuwara Eliya.</p>
			</div>

			<div class="btn">
				<button class="viewButton"><a style="color:white; text-decoration:none;" href='SSR_ViewMorePage.php'>View</a></button>
			</div>
		</div> -->
	</div>

<?php include('../view/footer.php');?>

</body>
</html>