<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Complains-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/complains.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none;">
	<?php 
		if (!isset($_SESSION['id'])){
			include('../view/top_bar.php');
		}else{
			include('../view/new_top_bar.php');
		}
	?> 
	<div id="all">
	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
        <img src="../resources/img/reviewimg.jpg" class="profile" >
		<form action="../controller/moderator_dashboard_controller.php" method="post">
        	<button class="edit" name="edit_profile" type="submit"> Edit Profile</button><br>
		</form>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="admin_dashboard.php">
						<span class="menu-icon"><i class="fa fa-folder-open fa-1x" aria-hidden="true"></i></span>
						<span class="menu-title">My Dashboard</span>
					</a>
				</li>
				<li>
					<a href="inbox.php">
						<span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
						<span class="menu-title">Inbox</span>
					</a>
				</li>
				<li>
				<form action="../controller/complain_admin_controller.php" method="post">
					<a href="">
						<span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
						<button type="submit" style="display: block;
							padding: 0 10px;
							height: 40px;
							font-size: medium;
							background:none;
							outline:none;
							border:none;
							color:white;
							line-height: 40px;
							text-align: start;" name="submit_complain">Complain</button>
					</a>
				</form>
				</li>
			</ul>
		</div><!--sidebar-manu-->        
    </div><!--side_bar-->

	<div class="complains_box" >
	
		<form action="../controller/complain_admin_controller.php" method="post">

			<div style="display: block; margin-bottom:60px;">
				<div class="text_box_search_bar">
					<input type="text" name="complainee_name" placeholder="Enter Complainee Name.."></input>
					<input type="submit" name="search" value="Search"></input>
				</div><!-- text_box_search_bar-->	

				<div style="display: block;margin-top:-30px;">
					<div class="search_bar">
						<button type="submit" name="new_submit">Newest First</button>
						<button type="submit" name="old_submit">Oldest First</button>
					</div><!-- search_bar -->
					<div class="search_bars">
						<button type="submit" name="tourist_submit">Tourist's Complaint</button>
						<button type="submit" name="tourguide_submit">Tourguide's Complaint</button>
					</div><!-- search_bar -->
				</div>
			</div>

			<?php 
			    if(isset($_GET['complaint'])){
					$records=unserialize($_GET['complaint']);
			
					foreach ($records as $record) { ?>
					<?php if($record['checked_status_admin']==1){?>
						<div class="text_box" style="background-color:rgb(121, 157, 160);border-color: rgb(56, 15, 15);opacity:0.8;">
							<i style="float:left;color:rgb(87, 31, 31)" class="fa fa-check fa-2X" aria-hidden="true"></i>
							<h4>Checked</h4>
							<h3 class="level"><?php echo $record['complainee_level']?>'s complaint</h3>
							<p><h2><?php echo $record['title'];?></h2><?php echo $record['description'];?>
							<button type="button" name="view_more" onclick="window.location='/ceylontrek-3tier/controller/complain_admin_controller.php?id=<?php echo $record['complain_id'];?>'" >View More &raquo;</button>
							</p>
						</div>
					<?php }else{ ?>
						<div class="text_box">
							<h3 class="level"><?php echo $record['complainee_level']?>'s complaint</h3>
							<p><h2><?php echo $record['title'];?></h2><?php echo $record['description'];?>
							<button type="button" name="view_more" onclick="window.location='/ceylontrek-3tier/controller/complain_admin_controller.php?id=<?php echo $record['complain_id'];?>'" >View More &raquo;</button>
							</p>
						</div>
					<?php }?>
					    
			<?php }} ?>
			
			
		</form>
	</div><!-- complains_box -->

	</div>   


	<!-- //success report admin alert  -->
	<?php 
		if(isset($_GET['checked'])){?>
			<script>alert('You have Checked Complaint!');</script>
    <?php }?>
    
    <!-- //there are no complaints alert  -->
	<?php 
		if(isset($_GET['no_complaint'])){?>
			<script>alert('You have not any complaint!!!');</script>
			<script>window.location='../view/admin_dashboard.php' </script>
	<?php }?>


<?php include('../view/footer.php'); ?>
</body>
</html>

