<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tour Request Post-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/tour_request_post.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct4.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/top_bar.php'); ?>
	<div class="tour_request_post_box">
			<!-- <h1>Tour Request Post </h1> -->
			<form action="tour_request_post.php" method="post">

				<div class="text_box_search_bar">
					<input type="text" name="" placeholder="Keyword.."></input>
					<input type="submit" name="" value="Search"></input>
				</div><!-- text_box_search_bar-->	

				<div class="search_bar">
					<button type="submit" name="new_submit">Newest First</button>
					<button type="submit" name="old_submit">Oldest First</button>
				</div><!-- search_bar -->
				
				<div class="text_box">
					<p><h2>4 days around Galle, Hambanthota and Unawatuna</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit"><a style="color:white; text-decoration:none;" href='full_tour_request_post_view.php'>View More &raquo;</a></button></p>

				</div>
				<div class="text_box">
					<p><h2>4 days around Galle, Hambanthota and Unawatuna</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit"><a style="color:white; text-decoration:none;" href='full_tour_request_post_view.php'>View More &raquo;</a></button></p>
					
				</div>
				<div class="text_box">
					<p><h2>4 days around Galle, Hambanthota and Unawatuna</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit"><a style="color:white; text-decoration:none;" href='full_tour_request_post_view.php'>View More &raquo;</a></button></p>
					
				</div>
				<div class="text_box">
					<p><h2>4 days around Galle, Hambanthota and Unawatuna</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit"><a style="color:white; text-decoration:none;" href='full_tour_request_post_view.php'>View More &raquo;</a></button></p>
					
				</div>
			</form>

	</div><!-- tour_request_post_box -->

	<div class="create_request_btn">
		<button onclick="openForm()"> Create New Request</button>
	</div><!-- create_request_btn -->

	<div class="form-popup" id="myForm">
	<form action="../controller/create_new_request_controller.php" class="form-container" method="post">
			   <h1>Create Your Tour Request</h1>

               <div>
			        <label style="margin-right:82px" for="title"><b>Title :</b></label>
                    <input type="text" placeholder="Enter any Title for your post here.." name="title" required>
			   </div>
			   
			   <div>
                    <label style="margin-right:70px" for="places"><b>Places :</b></label>
                    <input  type="text" placeholder="Enter Distric/Place name here.." name="places" required>
			   </div>
				
			   <div>
               <label style="margin-right:30px" for="no_of_days"><b>NO Of Days :</b></label>
               <input type="text" placeholder="Enter number of dates" name="no_of_days" required>
			   </div>

			   <div>
               <label for="requested_date"><b>Requested Date :</b></label>
               <input type="date" placeholder="DD/MM/YYYY" name="requested_date" required>
			   </div>

               <label for="details"><b>Activities :</b></label>
    		   <textarea rows = "4" cols = "20" name = "activities" style="resize: vertical;height:100px;" placeholder="Enter Activites & Other details here..."></textarea>
    		<button type="submit" class="btn">Post</button>
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
