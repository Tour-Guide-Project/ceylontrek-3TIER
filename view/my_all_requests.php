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
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:whitesmoke; background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

                  <?php

                if($_SESSION['level']=='tourist'){
                    include('../view/tourist_side_bar.php');
                }
                if($_SESSION['level']=='tourguide'){
                    include('../view/guide_side_bar.php');
                }

             ?>

	<div class="post_box">


			
			<form action="my_all_requests.php"  method="post">	
                <h3 style="color:black; font-size:30px; text-align:center; margin-top:0px; margin-left:20px; position:relative;">.......YOUR ALL REQUEST POSTS.......</h3>			
                <div class="myposts">   <!--request post start-->

					  <!--get associative array element to display-->
					  <?php
					      foreach ($mylist as $mylist_element){
						 ?>
						 
						<ul>
                            <h5><?php echo $mylist_element['day_no']; ?></h5>
							<h3><?php echo $mylist_element['title']; ?></h3>
							<li><i class='fa fa-calendar' aria-hidden='true'></i>Requested Date :<?php echo $mylist_element['requested_date']; ?></li>
							<li><i class='fa fa-clone' aria-hidden='true'></i>NO Of Dates :<?php echo $mylist_element['no_of_days']; ?></li>
                            <li><i class='fa fa-map-marker' aria-hidden='true'  style="margin-right:25px"></i>Places :<?php echo $mylist_element['places']; ?></li>
                            
                            <li style="height:200px;"><i class='fa fa-futbol-o' aria-hidden='true'></i>Activities & Other Details :<textarea rows ="10" cols = "70" style="background:transparent; border:none; outline:none"><?php echo $mylist_element['activities']; ?></textarea></li>

							
							  <div >
                              <button name='post_delete' style="color:white"><a  style="text-decoration:none" href="../controller/my_all_request_controller.php?post_id=<?php echo $mylist_element['post_id']; ?>" 
							  onclick="return confirm('Delete Post?');">DELETE</a></button>
							  <a type="button" style="text-decoration:none" href="../controller/update_post_controller.php?post_id=<?php echo $mylist_element['post_id']; ?>"><button type="button" name='post_update' onclick="openForm()" class="update">UPDATE</button></a>                                  
                                
						     </div>
						</ul>
				  <?php
					  }  
				    ?> 	   				    
				</div>	 <!-- request post end-->

	        </form>

	</div><!-- post_box -->

	<div class="add_request_btn">
        <a href="../controller/tour_request_post_controller.php"><button>Add new post</button></a>
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
