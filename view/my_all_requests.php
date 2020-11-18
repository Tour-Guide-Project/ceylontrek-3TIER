<?php session_start();
//get the session value for varible
$mylist = $_SESSION['mylist'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MY Request Post-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:whitesmoke; background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/new_top_bar.php'); ?>


                <div class="side_bar">
                    <img src="../resources/img/logo2.png" class="dashlogo">
                    <img src="../resources/img/reviewimg.jpg" class="profile" >
                    
                    <form action="../controller/tourist_dashboard_controller.php" method="post">
                    <button class="edit" name="edit_profile"> <span>Edit Profile</span></button><br>
                    </form>

                    

                  <div class="sidebar-menu">
                    <ul>

                    <li>
                            <a href="touristDashboard.php">
                                <span class="menu-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                                <span class="menu-title">My Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="Inbox.php">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href="touristFavGuides.php">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Guides</span>
                            </a>
                        </li>


                        <li>
                            <a href="touristFavPackages.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Packages</span>
                            </a>
                        </li>

                        


                        <li>
                            <a href="upcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Upcoming Tours</span>
                            </a>
                        </li>


                        <li>
                            <a href="touristPrevTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Previous Tours</span>
                            </a>
                        </li>

                        <li style="background-color:rgba(0, 0, 0, 0.3)">
                            <a href="my_all_requests.php">
                                <span class="menu-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">My All Request</span>
                            </a>
                        </li>

                    </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->

	<div class="post_box">
			
			<form action="my_all_requests.php"  method="post">	
                <h3 style="color:black; font-size:30px; text-align:center; margin-top:0px; margin-left:20px; position:relative;">.......YOUR ALL REQUEST POSTS.......</h3>			
                <div class="myposts">   <!--request post start-->

					  <!--get associative array element to display-->
					  <?php
					      foreach ($mylist as $mylist_element){
						 ?>
						 
						<ul>
							<h3><?php echo $mylist_element['title']; ?></h3>
							<li><i class='fa fa-calendar' aria-hidden='true'></i>Requested Date :<?php echo $mylist_element['requested_date']; ?></li>
							<li><i class='fa fa-clone' aria-hidden='true'></i>NO Of Dates :<?php echo $mylist_element['no_of_days']; ?></li>
							<li><i class='fa fa-map-marker' aria-hidden='true'  style="margin-right:25px"></i>Places :<?php echo $mylist_element['places']; ?></li>
							<li><i class='fa fa-futbol-o' aria-hidden='true'></i>Activities & Other Details :<?php echo $mylist_element['activities']; ?></li>
							<button name='post_delete' style="color:white"><a href="../controller/my_all_request_controller.php?post_id=<?php echo $mylist_element['post_id']; ?>" 
							  onclick="return confirm('Delete Post?');">DELETE</a></button>
							  <div>
							  <a href="../controller/update_post_controller.php?post_id=<?php echo $mylist_element['post_id']; ?>"><button name='post_update' onclick="openForm()" class="update">UPDATE</button></a>


							       <div class="form-popup" id="myForm">
								

	                                   <div class="update-form"> <!--update form start-->
			                                     <h1>Update Your Tour Request</h1>

                                                          <div>
			                                                  <label style="margin-right:82px" for="title"><b>Title :</b></label>
                                                              <input type="text" placeholder="Enter any Title for your post here.." name="title"  required >
			                                             </div>
			   
			                                              <div>
                                                               <label style="margin-right:70px" for="places"><b>Places :</b></label>
                                                               <input  type="text" placeholder="Enter Distric/Place name here.." name="places" required>                                                                                                                       
			                                             </div>                                                                                                                       
				                                                                                                                       
			                                              <div>                                                                                                                       
                                                                <label style="margin-right:30px" for="no_of_days"><b>NO Of Days :</b></label>                                                                                                                       
                                                                <input type="text" placeholder="Enter number of dates" name="no_of_days"  required>                                                                                                                       
			                                             </div>                                                                                                                       
                                                                                                                       
			                                              <div>                                                                                                                       
                                                                 <label for="requested_date"><b>Requested Date :</b></label>                                                                                                                       
                                                                 <input type="date" placeholder="DD/MM/YYYY" name="requested_date"  required>                                                                                                                       
			                                              </div>                                                                                                                       
                                                                                                                       
                                                                 <label for="details"><b>Activities :</b></label>                                                                                                                       
    		                                                     <textarea rows = "4" cols = "20" name = "activities" style="resize: vertical;height:100px;" placeholder="Enter Activites & Other details here..."  ></textarea>                                                                                                                       
																 
																 <a href="../controller/update_post_controller.php?post_id=<?php echo $mylist_element['post_id']; ?>"><button type="submit" class="btn" name="update_now" id="submit" >Update post</button></a>                                                                                                                       
    		                                                     <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>                                                                                                                       
									    </div> <!--update form end-->   
									                                                                                                                      
	                                </div><!---form-popup-->
						     </div>
						</ul>
				  <?php
					  }  
				    ?> 	   				    
				</div>	 <!-- request post end-->

	        </form>

	</div><!-- post_box -->

	<div class="add_request_btn">
        <a href="tour_request_post.php"><button>Add new post</button></a>
	</div><!-- create_request_btn -->
	
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
