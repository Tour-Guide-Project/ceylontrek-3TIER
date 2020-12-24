<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create Event-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/guidedashboardpage.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/event.css">
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
            <button class="edit" name="edit_profile"><span>Edit Profile</span> </button><br>
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
						<a href="complains_page.php">
							<span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">Complains</span>
						</a>
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

	<div class="form-popup_event" id="myForm">
	    <form action="../controller/create_event_controller.php" class="form-container" method="post">
               <h1>Add Event</h1>
               <?php 
			    if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
		        ?>

			   <div>
               <label for="date"><b>Start Date :</b></label>
               <input style="width:100%;"  type="date" placeholder="DD/MM/YYYY" name="startdate" >
               </div>

               <div>
               <label for="date"><b>End Date :</b></label>
               <input style="width:100%;"  type="date" placeholder="DD/MM/YYYY" name="enddate" >
               </div>
               
               <div>
               <label for="details"><b>Events:</b></label>
               <input style="width:100%;" type="text" placeholder="Enter an event" name="events">
               </div>


               <label for="details"><b>Add More :</b></label>
    		   <textarea rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;" placeholder="Enter More Details Here..."></textarea>
               
    		 <button type="submit" class="btn" name="submit" id="submit" onclick ="AddRequired();">Add Event</button>
    		<button type="submit" class="btn cancel" name="cancel" onclick ="RemoveRequired();" >Cancel</button>
  	    </form>
    </div>
    
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
<script type="text/javascript" src="../resources/js/upload_img.js"></script>
</html>

