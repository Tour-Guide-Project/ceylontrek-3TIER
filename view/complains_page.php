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
					<a href="moderator_dashboard.php">
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
				<form action="../controller/complain_controller.php" method="post">
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
							text-align: start;" name="complain_button">Complain</button>
					</a>
				</form>
				</li>
				<li>
                    <a href="../controller/view_users_admin_controller.php?user_level=tourguide">
                        <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                        <span class="menu-title">View all Guides</span>
                    </a>
                </li>
                <li>
                    <a href="../controller/view_users_admin_controller.php?user_level=tourist">
                        <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                        <span class="menu-title">View all Tourists</span>
                    </a>
                </li>
				<li>
                    <a href="../view/create_event.php">
                        <span class="menu-icon"><i class="fa fa-calendar-plus-o fa-1x" aria-hidden="true"></i></span>
                        <span class="menu-title">Create Event</span>
                    </a>
				</li>
				<li>
                    <a href="../view/view_event.php">
                        <span class="menu-icon"><i class="fa fa-calendar-o fa-1x" aria-hidden="true"></i></span>
                        <span class="menu-title">View Event</span>
                    </a>                
			    </li>
			</ul>
		</div><!--sidebar-manu-->        
    </div><!--side_bar-->

	<div class="complains_box" >
	
		<form action="../controller/complain_controller.php" method="post">

			<div class="text_box_search_bar">
				<input type="text" name="complainee_name" placeholder="Enter Complainee Name.."></input>
				<input type="submit" name="search" value="Search"></input>
			</div><!-- text_box_search_bar-->	

			<div class="search_bar">
				<button type="submit" name="new_submit">Newest First</button>
				<button type="submit" name="old_submit">Oldest First</button>
			</div><!-- search_bar -->

			<?php 
			    if(isset($_GET['complaint'])){
					$records=unserialize($_GET['complaint']);
			
					foreach ($records as $record) { ?>
					
					<div class="text_box">
						<p><h2><?php echo $record['title'];?></h2><?php echo $record['description'];?>
						<button type="button" name="view_more" onclick="window.location='/ceylontrek-3tier/controller/complain_controller.php?id=<?php echo $record['complain_id'];?>'" >View More &raquo;</button>
						</p>
					</div>
					    
			<?php }} ?>
			
			
		</form>
	</div><!-- complains_box -->

	</div>   


	<!-- //success report admin alert  -->
	<?php 
		if(isset($_GET['success'])){?>
			<script>alert('You have Succefully Reported!');</script>
	<?php }?>

	<!-- //there are no complaints alert  -->
	<?php 
		if(isset($_GET['no_complaint'])){?>
			<script>alert('You have not any complaint!!!');</script>
			<script>window.location='../view/moderator_dashboard.php' </script>
	<?php }?>

	<!-- //moderaotor has checked complaint alert  -->
	<?php 
		if(isset($_GET['checked'])){?>
			<script>alert('You have Checked This Complaint!!!');</script>
	<?php }?>


<?php include('../view/footer.php'); ?>
</body>
</html>

