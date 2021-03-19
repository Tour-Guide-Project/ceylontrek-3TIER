<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Moderator Dashboard-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/admin_dashboard.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/guidedashboardpage.css">
	<link rel="stylesheet" href="../resources/css/pendingProfiles.css">
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

	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
        <img src="../resources/img/reviewimg.jpg" class="profile" >
        <form action="../controller/moderator_dashboard_controller.php" method="post">
            <button class="edit" name="edit_profile" type="submit"><span>Edit Profile</span> </button><br>
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
							<button type="submit" style=" 
								display: block;
								padding: 0 10px;
								height: 40px;
								font-size: medium;
								background:none;
								outline:none;
								border:none;
								color:white;
								line-height: 40px;
								text-align: start;" name="complain_button" >Complain</button>
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

	<div class="notification">
	<form action="moderator_dashboard.php" method="post">
			
		<button type="button" style="margin-left:1000px; " class="cobutton" onclick="openForm()">Create Notification</button>
		
	</form>
	</div>

	
	<div class="moderator_dashboard_box">
		<div class="prow">

			<div id="link_wrapper">

			</div>

			<!-- <div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%; height:300px;">
					<div class="pcontainer">
						<h2>Senal Arosh</h2>
						<p>Pending Profile</p>
						<p>senal@gmail.com</p>
						<p><button class="pbutton">View Profile</button></p>
					</div>
				</div>
			</div>
			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/2.jpg" alt="Jane" style="width:100%; height:300px;">
					<div class="pcontainer">
						<h2>Kamal Amarakon</h2>
						<p>Pending Profile</p>
						<p>kamal123@gmail.com</p>
						<p><button class="pbutton">View Profile</button></p>
					</div>
				</div>
			</div>
			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/5.jpg" alt="Jane" style="width:100%; height:300px;">
					<div class="pcontainer">
						<h2>Darshan Ravindu</h2>
						<p>Pending Profile</p>
						<p>ravindar@gmail.com</p>
						<p><button class="pbutton">View Profile</button></p>
					</div>
				</div>
			</div>
			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/4.jpg" alt="Jane" style="width:100%; height:300px;">
					<div class="pcontainer">
						<h2>Nimal Sepala</h2>
						<p>Pending Profile</p>
						<p>sepalasepala@gmail.com</p>
						<p><button class="pbutton">View Profile</button></p>
					</div>
				</div>
			</div>
			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/3.jpg" alt="Jane" style="width:100%; height:300px;">
					<div class="pcontainer">
						<h2>Adhithya Bandara</h2>
						<p>Pending Profile</p>
						<p>adhikuru@gmail.com</p>
						<p><button class="pbutton">View Profile</button></p>
					</div>
				</div>
			</div> -->

		</div> <!-- prow -->

	</div><!-- moderator_box -->

	
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
			  	<div>
					<input class="input_radio" style="width: 20%;" type="radio" name="gender" id="gender" value="tourist" required>
					<label>Tourist</label>
				
				
					<input class="input_radio" style="width: 20%;" type="radio" name="gender"  id="gender" value="tour-guide" required>
					<label>Tour-Guide</label>
				</div>
			<label for="details"><b>Title</b></label>
			<input type="text" name="title" placeholder="Enter title here..">

    		<label for="details"><b>Notification</b></label>
    		<textarea rows = "4" cols = "20" name = "notifications" style="resize: vertical;height:100px;" placeholder="Enter Notification Details here..."></textarea>

    		<button type="submit" name="notifications_btn" class="btn">Send</button>
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
<script>
	function loadXMLDoc() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("link_wrapper").innerHTML =
					this.responseText;
			}
		};
		xhttp.open("GET", "../controller/mod_approve_controller.php", true);
		xhttp.send();
	}
	setInterval(function() {
		loadXMLDoc();
		//1sec
	}, 1000);
	window.onload = loadXMLDoc;
</script>
