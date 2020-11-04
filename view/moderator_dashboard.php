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
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none;">
	<?php include('../view/new_top_bar.php'); ?>

	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
        <img src="../resources/img/reviewimg.jpg" class="profile" >
        <a class="edit" href="view_moderator_profile.php">Edit Profile</a><br>
            <div class="sidebar-menu">
              <ul>
                  <li>
                      <a href="#">
                          <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                          <span class="menu-title">Inbox</span>
                      </a>
                  </li>

                   <li>
                       <a href="#">
                           <span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
                           <span class="menu-title">Complains</span>
                       </a>
                   </li>


                    <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-folder-open fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">Pending Profiles</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View all Guides</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                            <span class="menu-title">View all Tourists</span>
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
							
			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>

			<div class="pcolumn">
				<div class="pcard">
					<img src="../resources/img/guide/1.jpg" alt="Jane" style="width:100%">
						<div class="pcontainer">
							<h2>Senal Arosh</h2>
							<p>Pending Profile</p>
							<p>senal@gmail.com</p>
							<p><button  class="pbutton">View Profile</button></p>
						</div>
				</div>
			</div>
				
		</div> <!-- prow -->						

    </div><!-- moderator_box -->

	
<!-- send notification popup window -->
	<div class="form-popup" id="myForm">
  		<form action="full_complain_view.php" class="form-container">
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

