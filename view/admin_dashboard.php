<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/admin_dashboard.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/Guidedashboardpage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none">
	<?php include('../view/new_top_bar.php'); ?>

	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
		<img src="../resources/img/reviewimg.jpg" class="profile" >
		<form action="../controller/admin_dashboard_controller.php" method="post">
		<button class="edit" name="edit_profile" type="submit"><span>Edit Profile</span> </button><br>
		</form>
            <div class="sidebar-menu">
              <ul>
                  <li>
                      <a href="#">
                          <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                          <span class="menu-title">Inbox</span>
                      </a>
                  </li>
              </ul>
            </div><!--sidebar-manu-->        
    </div><!--side_bar-->

	<div class="admin_dashboard_box">
	
			<form action="../controller/admin_dashboard_controller.php" method="post">
					<button type="submit" name="submit_complain">Complains</button>
					<button type="submit" >View Guide</button>
					<button type="submit" >View User</button>
					<button type="submit" name="submit_admin" >Create Admin Account</button>
					<button type="submit" name="submit_moderator">Create Moderator Account</button>
					<button type="button" class="create_notification_btn" onclick="openForm()">Create Notification</button>
				<div class="text_box">
					<label for="details"><b>System Statics</b></label>
    				<textarea rows = "20" cols = "20" name = "details" placeholder="system statics details here..."></textarea>
				</div>
			</form>

	</div><!-- complains_box -->

	<!-- send notification popup window -->
	<div class="form-popup" id="myForm">
  		<form action="../view/full_complain_view.php" class="form-container">
   			<label for="title"><b>Title</b></label>
    		<input type="text" placeholder="Enter title here.." name="title" required>

    		<label for="details"><b>Notification</b></label>
    		<textarea rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;" placeholder="Enter Notification Details here..."></textarea>

    		<button type="submit" class="btn">Send</button>
    		<button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  		</form>
	</div>

<script>
	function openForm() {
  		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
  		document.getElementById("myForm").style.display = "none";
	}
</script>
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>

