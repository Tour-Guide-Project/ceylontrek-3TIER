<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/admin_dashboard.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none">
	<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	<div id="all" >
		<div class="side_bar">
			<img src="../resources/img/logo2.png" class="dashlogo">
			<img src="../resources/img/reviewimg.jpg" class="profile" >
			<form action="../controller/admin_dashboard_controller.php" method="post">
			<button class="edit" name="edit_profile" type="submit"><span>Edit Profile</span> </button><br>
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
						<a href="../controller/chat_controller.php">
							<span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
							<span class="menu-title">Inbox</span>
						</a>
					</li>
				</ul>
				</div><!--sidebar-manu-->        
		</div><!--side_bar-->

		<div class="admin_dashboard_box">
				<form action="../controller/complain_admin_controller.php" method="post">
					<button type="submit" name="submit_complain">Complains</button>
				</form> 
				<form action="../controller/admin_dashboard_controller.php" method="post">
					<button type="submit" name="submit_guide">View All Guides</button>
					<button type="submit" name="submit_tourist">View All Tourists</button>
					<button type="submit" name="submit_admin" >Create Admin Account</button>
					<button type="submit" name="submit_moderator">Create Moderator Account</button>
					<button type="button" class="create_notification_btn" onclick="openForm()">Create Notification</button>
					<div class="text_box">
						<label for="details"><b>System Statics</b></label>
						<textarea rows = "20" cols = "20" name = "details" placeholder="system statics details here..."></textarea>
					</div>
				</form>

		</div><!-- complains_box -->
	</div>
		<!-- send notification popup window -->
		<div class="form-popup" id="myForm">
			<form action="../controller/create_notifications.php" class="form-container" method="post">

				<?php
					if(isset($_GET['param'])){
						$errors=$_GET['param'];
						
						foreach ($errors as $error) {
							echo "<script>alert('$error!');</script>";
						}
					}
				?>
				<label for="title"><b>Select User</b></label>
					<div class="radio">
						<input class="input_radio" style="width: 20%;" type="radio" name="gender" id="gender" value="tourist" required>
						<label >Tourist</label>
				
						<input class="input_radio" style="width: 20%;" type="radio" name="gender"  id="gender" value="tour-guide" required>
						<label >Tour-Guide</label>

						<input class="input_radio" style="width: 20%;" type="radio" name="gender"  id="gender" value="both" required>
						<label >Both</label>
					</div>
				<label class="lab" for="details"><b>Title</b></label>
				<input style="margin:0;" type="text" name="title" placeholder="Enter title here..">

				<label class="lab" for="details"><b>Notification</b></label>
				<textarea rows = "4" cols = "20" name = "notifications" style="resize: vertical;height:100px;" placeholder="Enter Notification Details here..."></textarea>

				<button type="submit" name="notifications_btn" class="btn">Send</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
			</form>
		</div>
	

<script>
	function openForm() {
  		document.getElementById("myForm").style.display = "block";
		document.getElementById('all').classList.add("all");
	}

	function closeForm() {
  		document.getElementById("myForm").style.display = "none";
		document.getElementById('all').classList.remove("all");
	}
</script>
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

