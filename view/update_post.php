<?php
session_start();

    $post_id=$_SESSION['u_post_id'];
    $title=$_SESSION['u_title'];
    $places=$_SESSION['u_places'];
    $activities=$_SESSION['u_activities'];
    $no_of_days=$_SESSION['u_no_of_days'];
    $requested_date=$_SESSION['u_requested_date'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Tour Request Post-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/tour_request_post.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:whitesmoke ; background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat; height:850px">
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	
	
	<div class="form-popup" id="myForm" style="display:block; position:relative; top:43%; z-index:1; margin-bottom:200px">
	<form action="../controller/update_post_controller.php" class="form-container" method="post" style="box-shadow:none; border:1px solid black">
			   <h1>Update Your Tour Request</h1>

               <div>
			        <label style="margin-right:82px" for="title"><b>Title :</b></label>
                    <input type="text" placeholder="Enter any Title for your post here.." name="title" <?php echo 'value="'.$title.'"'; ?>  required>
			   </div>
			   
			   <div>
                    <label style="margin-right:70px" for="places"><b>Places :</b></label>
                    <input  type="text" placeholder="Enter Distric/Place name here.." name="places" <?php echo 'value="'.$places.'"'; ?>  required>
			   </div>
				
			   <div>
               <label style="margin-right:30px" for="no_of_days"><b>NO Of Days :</b></label>
               <input type="text" placeholder="Enter number of dates" name="no_of_days" <?php echo 'value="'.$no_of_days.'"'; ?> required>
			   </div>

			   <div>
               <label for="requested_date"><b>Requested Date :</b></label>
               <input type="date" placeholder="DD/MM/YYYY" name="requested_date"  <?php echo 'value="'.$requested_date.'"'; ?> required>
			   </div>

               <label for="details"><b>Activities :</b></label>
    		   <textarea rows = "4" cols = "20" name = "activities" style="resize: vertical;height:100px;" placeholder="Enter Activites & Other details here..."><?php echo $activities ;?></textarea>
                
               <button type="submit" class="btn" name="update_now" id="update_now" onclick="return confirm('update  post?');">UPDATE</button>
                <?php echo $post_id; ?>
    		<button type="reset" class="btn cancel"><a herf="../controller/my_all_request_controller.php">Cancel</a></button>
  		</form>
	</div>

	

</body>
</div style="position:fixed"><?php include('../view/footer.php'); ?></div>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
