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
					<a href="../controller/chat_controller.php">
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

					<button class="msg"  type="submit" name="msg">Message <?php echo $record['complainee_level'];?></button>

					<?php 
						if(isset($_GET['report_status'])&&isset($_GET['checked_status'])){
							$status=$_GET['report_status'];
							$check=$_GET['checked_status'];
							if($status==0 && $check==0){?>
							<button type="button" name="report_admin" class="report" onclick="window.location='/ceylontrek-3tier/controller/complain_controller.php?report_id=<?php echo $record['complain_id'];?>'">Report Admin</button>
							
							<div class="tooltip">
  								<span class="tooltiptext">If you get action to this complain,please Tick..</span>
								<button type="button" onclick="window.location='/ceylontrek-3tier/controller/complain_controller.php?checked_id=<?php echo $record['complain_id'];?>'"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
							</div>
							
						<?php }else if($status==1 && $check==0){?>
							<button type="button" name="report_admin" class="alreadyreport" disabled>Already Reported</button>
						<?php }else {?>

					<?php }}?>

					

				<?php } ?>
			</form>
	</div><!--full_complain_view_box -->


	
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

