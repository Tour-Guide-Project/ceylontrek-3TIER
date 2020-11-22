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
          <form action="../controller/view_reset_password_controller.php" method="post" class="form-container">
            <?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
			    }
            ?>
		
   			<label ><b>Current Password</b></label>
            <input type="password" placeholder="Enter Current Password " name="current_password" id="myInput1" style="width:90%;">
            <span class="eye" onclick="myFunction1()">
				<i id="hide-1" class="fa fa-eye" ></i>
				<i id="hide-2" class="fa fa-eye-slash" ></i>
            </span>
            <script >
				function myFunction1(){
					var x=document.getElementById("myInput1");
					var y=document.getElementById("hide-1");
					var z=document.getElementById("hide-2");
						
					if(x.type === "password"){
						x.type ="text";
						y.style.display = "block";
						z.style.display = "none";
					}
					else{
						x.type ="password";
						y.style.display = "none";
						z.style.display = "block";
					}
				}
			</script>

    		<label ><b> New Password</b></label>
            <input type="password" placeholder="Enter New Password" name="new_password" id="myInput2" style="width:90%;">
            <span class="eye" onclick="myFunction2()">
				<i id="hide1" class="fa fa-eye" ></i>
				<i id="hide2" class="fa fa-eye-slash"></i>
            </span>
            <script >
				function myFunction2(){
					var x=document.getElementById("myInput2");
					var y=document.getElementById("hide1");
					var z=document.getElementById("hide2");
						
					if(x.type === "password"){
						x.type ="text";
						y.style.display = "block";
						z.style.display = "none";
					}
					else{
						x.type ="password";
						y.style.display = "none";
						z.style.display = "block";
					}
				}
			</script>
            
            
            <label ><b> Confirm Password</b></label>
            <input type="password" placeholder="Enter Confirm Password" name="confirm_password" id="myInput3" style="width:90%;">
            <span class="eye" onclick="myFunction3()">
				<i id="hides1" class="fa fa-eye"></i>
				<i id="hides2" class="fa fa-eye-slash" ></i>
            </span>
            
			<script >
				function myFunction3(){
					var x=document.getElementById("myInput3");
					var y=document.getElementById("hides1");
					var z=document.getElementById("hides2");
						
					if(x.type === "password"){
						x.type ="text";
						y.style.display = "block";
						z.style.display = "none";
					}
					else{
						x.type ="password";
						y.style.display = "none";
						z.style.display = "block";
					}
				}
			</script>
            
            <div >
			<button type="submit" name="cancel" class="btn cancel_form" >Cancel</button>
            <button type="submit" name="update_password" class="btn">Update</button>
            </div>
    		
  		 </form>
	    </div>
			


<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>