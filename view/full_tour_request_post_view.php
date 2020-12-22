<?php session_start();
//get the session value for varible
$fullpost=$_SESSION['fullpost'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Full Tour Request Post View-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/full_tour_request_view.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct5.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	<div class="full_tour_request_post_view_box">
			<form action="..\controller\full_tour_request_post_view_controller.php" method="GET" >
				
				<div class="text_box">
					<img src="../resources/img/ct6.jpg" width="112" height="112" style="border-radius: 65px;vertical-align:middle;float: left;">
					<!--get associative array element to display-->
						
                        <!--get associative array element to display-->
                        <?php
					      foreach ($fullpost as $fullpost_element){
						 ?>
						 
						 <ul>
							<h5><?php echo $fullpost_element['day_no']; ?></h5>
							<h3><?php echo $fullpost_element['title']; ?></h3>
							<li><i class='fa fa-calendar' aria-hidden='true'></i>Requested Date :<?php echo $fullpost_element['requested_date']; ?></li>
							<li><i class='fa fa-clone' aria-hidden='true'></i>NO Of Dates :<?php echo $fullpost_element['no_of_days']; ?></li>
							<li><i class='fa fa-map-marker' aria-hidden='true'  style="margin-right:25px"></i>Places :<?php echo $fullpost_element['places']; ?></li>
							<li style="height:auto"><i class='fa fa-futbol-o' aria-hidden='true'></i>Activities & Other Details :<br><textarea rows ="10" cols = "50" style="background:transparent; border:none; outline:none"><?php echo $fullpost_element['activities']; ?></textarea></li>
							
						</ul>


					    <?php
						  }  
					    ?> 	   

				</div><!-- text_box -->
				<button class="msg">Message Tourist</button>
				<button class="report">Report</button>
			</form>
	</div><!-- tour_request_post_box -->
	
<?php include('../view/footer.php'); ?>
</body>
</html>
