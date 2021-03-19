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
			<form action="../controller/complain_admin_controller.php" method="post">
				
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

					
					<button type="button" name="checked" class="report" onclick="window.location='/ceylontrek-3tier/controller/complain_admin_controller.php?checked_id=<?php echo $record['complain_id'];?>'">Checked</button>
						
				

				<?php } ?>
			</form>
	</div><!--full_complain_view_box -->


	
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

