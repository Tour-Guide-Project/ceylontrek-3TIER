<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/SSR_ViewMorePage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<h1 class="ttl"><b>Hikkaduwa</b></h1>
		<div class="image">
			<img src="../resources/img/SmartSearchResult/hik.jpg" alt="Paris" style="width:60%;">
		</div>

		<div>
			<p class="paragraph">Hikkaduwa is a long beautiful beach providing excellent opportunity for surfing, swimming and snorkelling. This was replaced by tourism when its golden sandy beaches were discovered.</p>

			<p class="paragraph">Hikkaduwa is a small town on the south coast of Sri Lanka located in the Southern Province, about 17 km (11 mi) north-west of Galle and 98 km (61 mi) south of Colombo.</p>

			<p class="paragraph">Hikkaduwa Coral Sanctuary - located a few hundred metres offshore. The sanctuary has approximately seventy varieties of multi-coloured corals.Hikkaduwa is one of the most beautiful place in Sri Lanka.</p>
		</div>
	</div>

<?php include('../view/footer.php');?>

</body>
</html>