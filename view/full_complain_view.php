<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Full Complain View-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/complains.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct5.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('../view/new_top_bar.php'); ?>
	<div class="full_complain_view_box">
			<form action="full_complain_view.php" method="post">
				
				<div class="text_box">
					<h1>Title</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					<br>
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div><!-- text_box -->
				<button class="msg">Message Tourist</button>
				<button type="button" class="report" onclick="openForm()">Report Admin</button>
			</form>
	</div><!--full_complain_view_box -->

	<!-- report admin popup window -->
	<div class="form-popup" id="myForm">
  		<form action="full_complain_view.php" class="form-container">
   			<label for="title"><b>Title</b></label>
    		<input type="text" placeholder="Enter title here.." name="title" required>

    		<label for="details"><b>Enter Complain Details</b></label>
    		<textarea rows = "4" cols = "20" name = "details" style="resize: vertical;height:100px;" placeholder="Enter details here..."></textarea>

    		<button type="submit" class="btn">Report</button>
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

