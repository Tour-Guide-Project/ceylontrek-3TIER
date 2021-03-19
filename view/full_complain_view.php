<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Full Complain View-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/complains.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: none;">
	<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	<div class="full_complain_view_box">
			<form action="../controller/complain_controller.php" method="post">
				
				<?php 
			    if(isset($_GET['view_complain'])){
					$record=unserialize($_GET['view_complain']);?>
					
					<div class="text_box">
						<h1><?php echo $record['title'];?></h1>
						<h3><?php echo $record['complainee_level'];?> Name : <?php echo $record['complainee'];?></h3>
						<h3>Reported Date : <?php echo $record['date'];?></h3>
						<h3>Reported Time : <?php echo $record['time'];?></h3>
						<p><?php echo $record['description'];?></p>
					</div><!-- text_box -->

					<button class="msg">Message <?php echo $record['complainee_level'];?></button>

					<?php 
						if(isset($_GET['report_status'])){
							$status=$_GET['report_status'];
							if($status==0){?>
							<button type="button" name="report_admin" class="report" onclick="window.location='/ceylontrek-3tier/controller/complain_controller.php?report_id=<?php echo $record['complain_id'];?>'">Report Admin</button>
							
							<div class="tooltip">
  								<span class="tooltiptext">If you get action to this complain,please Tick..</span>
								<button type="button" onclick="window.location='/ceylontrek-3tier/controller/complain_controller.php?checked_id=<?php echo $record['complain_id'];?>'"><i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i></button>
							</div>
							
						<?php }else{?>
						<button type="button" name="report_admin" class="alreadyreport" disabled>Already Reported</button>
					<?php }}?>

				<?php } ?>
			</form>
	</div><!--full_complain_view_box -->


	
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

