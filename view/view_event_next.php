<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Event-Ceylon Trek</title>
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

	<div class="form-popup_event" id="myForm">
	    <form action="../controller/view_event_controller.php" class="form-container" method="post">
               <h1>View Event</h1>

            <!-- get error from url -->
               <?php 
			    if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
                ?>

            <!-- get date from url -->
            <div>
                <label for="date"><b>Start Date :</b></label>
                <?php
                if(isset($_GET['startdate'])){
                    $startdate=unserialize($_GET['startdate']); ?> 
                <input style="width:100%;" type="date"  name="date"  readonly value="<?php echo $startdate;?>">
            </div>
                <?php }?>


            <!-- //get events from url -->
            <div>
                <label for="details"><b>Events:</b></label>
                <?php
                if(isset($_GET['event'])){
                    $events=unserialize($_GET['event']);
                    foreach ($events as $event) { ?>
                         
               
                <div class="event_addmore">
                    <input name="events"  readonly value="<?php echo $event['title'];?>" >
                    <div class="edits">
                        <button type="button" class="editbtn" name="edit"  id="edit" onclick="window.location='/ceylontrek-3tier/controller/view_event_controller.php?id=<?php echo $event['id'];?>'" >Edit <i class="fa fa-pencil fa-1x" aria-hidden="true"></i></button>
                    </div>
                </div>
                <?php }?>
               
               


               <!-- not get event from url -->

                <?php if(empty($events)){ ?>
                <input name="events" style="width:100%;" placeholder="No Events" readonly> 
                <p class="addevent">If you want to add event  please click the <b>Add Event</b> button.</p>
                <button type="submit" class="btn" name="submit1" id="submit1" onclick ="AddRequired();">Add Event</button>
    		    <button type="submit" class="btn cancel" name="cancel_next" onclick ="RemoveRequired();" >Cancel</button> 
                
                <?php }else{ ?>
    		    <button type="submit" class="btn cancel" name="cancel_next" style="float:left;background-color: rgb(19, 19, 82);" onclick ="RemoveRequired();" ><i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back</button>
                <?php }}?>
            </div>
               

    		
  	    </form>
    </div>
    
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
<script type="text/javascript" src="../resources/js/upload_img.js"></script>
</html>

