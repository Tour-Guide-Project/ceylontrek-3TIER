<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reset password-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/reset_password.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('../resources/img/ct2.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
<?php 
     include('../view/top_bar.php');
   
    ?> 

	<div class="reset_password_box">
			<h1>Reset Password</h1>
			<form action="/ceylontrek-3tier/controller/reset_password_controller.php" method="post">
				<?php 
					if(isset($_GET['param'])){
						$errors=$_GET['param'];
						foreach ($errors as $error) {
							echo '<p class="error">'.$error.'</p>';
						}
					}
           		?>  
				<div class="text_box">
					<i class="fa fa-lock fa-2x" aria-hidden="true"></i>
					<input type="password" name="newpassword" placeholder="New Password" id="myInput1" >
					<span class="eye" onclick="myFunction1()">
						<i id="hide1" class="fa fa-eye"></i>
						<i id="hide2" class="fa fa-eye-slash"></i>
					</span>
					<script>
						function myFunction1(){
							var x=document.getElementById("myInput1");
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
				</div><!-- text_box -->	

				<div class="text_box">
					<i class="fa fa-lock fa-2x" aria-hidden="true"></i>
					<input type="password" name="confirmpassword" placeholder="Confirm Password" id="myInput2">
					<span class="eye" onclick="myFunction2()">
						<i id="hide-1" class="fa fa-eye"></i>
						<i id="hide-2" class="fa fa-eye-slash"></i>
					</span>
					<script >
						function myFunction2(){
							var x=document.getElementById("myInput2");
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
				</div><!-- text_box -->	
				<a href="../view/login.php">&laquo; Back</a>

				<button type="submit" name="submit">Submit</button>
			
			</form>

	</div><!-- reset_password_box -->

<?php include('../view/footer.php'); ?>
</body>
</html>

