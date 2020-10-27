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
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>

				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
			</form>

	</div><!-- tour_request_post_box -->

	<div class="create_request_btn">
		<button onclick="openForm()"> Create New Request</button>
	</div><!-- create_request_btn -->

	<div class="form-popup" id="myForm">
  		<form action="tour_request_post.php" class="form-container">
   			<label for="title"><b>Title</b></label>
    		<input type="text" placeholder="Enter title here.." name="title" required>

    		<label for="keywords"><b>Keywords</b></label>
    		<input type="text" placeholder="Enter keyword here.." name="keywords" required>

    		<label for="details"><b>Custom Tour Request</b></label>
    		<textarea rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;" placeholder="Enter details here..."></textarea>

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
