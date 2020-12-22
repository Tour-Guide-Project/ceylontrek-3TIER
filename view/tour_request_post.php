<?php session_start();
//get the session value for varible
$lists = $_SESSION['list'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tour Request Post-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/tour_request_post.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
</head>
<body style="background-image: url('../resources/img/ct4.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
   <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
               
             
	<div class="tour_request_post_box">

	           <?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];				   
					    echo '<p class="error" style="color:red;height:50px">**Pleace check the form and fill again**</p>';
				    
			    }
			   ?>
			<!-- <h1>Tour Request Post </h1> -->
			<form action="..\controller\tour_request_post_Controller.php" method="post">

				<div class="text_box_search_bar">
					<input type="text" name="word" placeholder="Type Place ......" ></input>
					<input type="submit" name="search" value="Search"></input>
				</div><!-- text_box_search_bar-->	

				<div class="search_bar">
					<button type="submit" name="new_submit" value="new_submit">Newest First</button>
					<button type="submit" name="old_submit" value="old_submit">Oldest First</button>
				</div><!-- search_bar -->
								    
				<div class="allposts">
					
				         <!--get associative array element to display-->
				         <?php
						 
					      foreach ($lists as $list_element){
						 ?>
						 
						 <ul>
						    <h5><?php echo $list_element['day_no']; ?></h5>
							<h3><?php echo $list_element['title']; ?></h3>
							<li><i class='fa fa-calendar' aria-hidden='true'></i>Requested Date :<?php echo $list_element['requested_date']; ?></li>
							<li><i class='fa fa-clone' aria-hidden='true'></i>NO Of Dates :<?php echo $list_element['no_of_days']; ?></li>
							<li><i class='fa fa-map-marker' aria-hidden='true'style="margin-right:25px" ></i>Places :<?php echo $list_element['places']; ?></li>
							<button name='viewmore'><a style="text-decoration:none"  href='../controller/full_tour_request_post_view_controller.php?post_id=<?php echo $list_element['post_id']; ?>'>View More &raquo</a></button>
						  </ul>


					    <?php
						  }  
					    ?>
					  
					  	    				    
				</div>
			</form>

	</div><!-- tour_request_post_box -->

    <form action="tour_request_post.php"  method="post">
	<div class="create_request_btn">
		<button type="button"  name="p_create"  id="p_create" onclick="openForm()" > Create New Request</button>
	</div><!-- create_request_btn -->
    </form>
	
	<div class="form-popup" id="myForm">
	<form action="../controller/create_request_post_controller.php" class="form-container" method="post">
			   <h1>Create Your Tour Request</h1>
			   <?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {

					    echo '<p class="error" style="color:red ; height:10px;margin:10px">'.$error.'</p>';
				    }
			    }
			   ?>
			   

               <div>
			        <label style="margin-right:82px" for="title"><b>Title :</b></label>
                    <input type="text" placeholder="Enter any Title for your post here.." name="title">
			   </div>
			   
			   <div>
                    <label style="margin-right:70px" for="places"><b>Places :</b></label>
                    <input  type="text" placeholder="Enter Distric/Place name here.." name="places">
			   </div>
				
			   <div>
               <label style="margin-right:30px" for="no_of_days"><b>NO Of Days :</b></label>
               <input type="text" placeholder="Enter number of dates" name="no_of_days">
			   </div>

			   <div>
			   
               <label for="requested_date"><b>Requested Date :</b></label>
			   <input type="date" placeholder="DD/MM/YYYY" name="requested_date" id="requested_date" min=<?php echo date('Y-m-d');?>>
			   
			   </div>

               <label for="details"><b>Activities :</b></label>
    		   <textarea rows = "4" cols = "20" name = "activities" style="resize: vertical;height:100px;" placeholder="Enter Activites & Other details here..."></textarea>
    		 <button type="submit" class="btn" name="submit" id="submit" onclick="return confirm('If you not fill the any field , you have to fill whole form again.please check the form.  Add your post?');"  >Post</button>
    		<button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  		</form>
	</div>

	<script>
     function openForm() {
       
         document.getElementById('myForm').style.display = 'block';
     }
   
     function closeForm() {
         document.getElementById('myForm').style.display = 'none';
     }

	 $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#requested_date').attr('min', minDate);
});
   </script>
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
