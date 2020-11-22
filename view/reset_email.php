<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Admin Profile-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/view_admin_profile.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background: none;">
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
			
            <!-- popup window -->
        <div class="form-popup" >
          <form action="../controller/reset_email_controller.php" method="post" class="form-container">
            <?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
            ?>
		
   			<label ><b>Current Password</b></label>
    		<input type="password" placeholder="Enter Current Password " name="current_password">

    		<label ><b>Enter New Email Address</b></label>
    		<input type="email" placeholder="Enter New Email Address (abc@gmail.com)" name="new_email">

			<button type="submit" name="cancel" class="btn cancel_form" >Cancel</button>
    		<button type="submit" name="update_email" class="btn">Update</button>
    		
  		 </form>
	    </div>
			


<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>