<?php session_start(); ?>

<html  lang="en">
    <head>
        <title>Create Guide Profile</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/new_top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/CreateTourPackagePage.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    
   
            <div class="section1"> 
            <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
<?php
include('../view/guide_side_bar.php');
?>
    <div class="content">
               
        <div class="con">
		<form action="../controller/createGuideProfile_controller.php" method="post" enctype="multipart/form-data">
        <div>
        <?php
            
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
                }
                
			?>
            		<div class="row">
				<div class="col-25">
					<label for="displayName" class="lbl">Display Name:</label>
				</div>
				<div class="col-75">
					<input type="text" name="displayName"  ></input>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="gRegNo" class="lbl">Guide Reg. Number:</label>
				</div>
				<div class="col-75">
					<input type="text" name="gRegNo"  ></input>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="NIC" class="lbl">NIC number :</label>
				</div>
				<div class="col-75">
					<input type="text" name="NIC" ></input>
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="imageUpload1" class="lbl">Upload NIC image :</br>(side 1)</label>
				</div>
				<div class="col-75">
                
                    <input type="file"  id="file"   name="image0" />
					
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Upload NIC image :</br>(side 2)</label>
				</div>
				<div class="col-75">
                <input type="file"   id="file"  name="image1" />
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="languages" class="lbl">Fluent Languages:</label>
				</div>
				<div class="col-75" >
					<input type="text" name="languages" ></input>
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="experience" class="lbl">Years of Experience:</label>
				</div>
				<div class="col-75" >
					<input type="text" name="experience" ></input>
				</div>
			</div>

            <div class="row">
                    <div class="col-25">
                        <label for="experience" class="lbl">Price($):</label>
                    </div>
                    <div class="col-75" >
                        <input type="text" name="price" ></input>
                    </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="experience" class="lbl">No of Maximum Tourists:</label>
                </div>
                <div class="col-75" >
                    <input type="text" name="max_tourists" ></input>
                </div>
            </div>

            <div class="row">
				<div class="col-25">
					<label for="bio" class="lbl" >Bio:</br>(max 500 characters)</label>
				</div>
				<div class="col-75">
					<textarea name="bio" style="height:100px" ></textarea>
				</div>
            </div>

			<div class="row">
				<div class="col-25">
					<label for="enterDescription" class="lbl" >Description:</br>(max 2500 characters)</label>
				</div>
				<div class="col-75">
					<textarea name="enterDescription" style="height:400px" ></textarea>
				</div>
            </div>
    
            <div class="row">
				<div class="col-25">
					<label for="imageUpload3" class="lbl">Upload Main image :</label>
				</div>
				<div class="col-75">
                <input type="file"  id="file"   name="image2" />
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload4" class="lbl">Upload image 2:</label>
				</div>
				<div class="col-75">
                <input type="file"  id="file"   name="image3" />
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload5" class="lbl">Upload image 3 :</label>
				</div>
				<div class="col-75">
                <input type="file"  id="file"   name="image4" />
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload6" class="lbl">Upload image 4:</label>
				</div>
				<div class="col-75">
                <input type="file" id="file"  name="image5" />
				</div>
            </div>

            <div class="row">
            
            <label for="haveVehicle" class="haveVehicle" > I have my own vehicle for tourism purposes</label>
            <input type="checkbox"  name="haveVehicle"  id="haveVehicle" style="margin-top:5%; width:15px; height:15px; font-size:17.5px;" onclick="vehicleFunction()">
			</div>

            
            <div id="vehicle" class="vehicle">
            <div class="row">
				<div class="col-25">
					<label for="vRegNo" class="lbl">Registration No. :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vRegNo" >
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vType" class="lbl">Type :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vType" >
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vMake" class="lbl">Make :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vMake" >
				</div>
            </div>
            

            
            <div class="row">
				<div class="col-25">
					<label for="vModel" class="lbl">Model :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vModel" >
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vLicense" class="lbl">License No. :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vLicense" >
				</div>
			</div>

            <div class="row">
				<div class="col-25">
					<label for="vSeats" class="lbl">No. of seats :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vSeats" >
				</div>
            </div>



            </div> 
            <!-- vehicle  -->

			
			<div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree" required>
				</div>
				<div class="agreed2">
					<label for="agree">I agree that I will take the whole responsibility of the tour and I will not hold Ceylon Trek against any problems occured during tour.</label>
				</div>
			</div>
			<div class="submitCls">
				<input type="submit" name="submit" value="Create Profile">
            </div>
        </div>
		</form>
    </div>
    <!-- form -->
    <?php 
		if(isset($_GET['profile-submitted'])=='true'){?>
			<script>alert('You have Successfully Created Your Profile!!!');</script>
	<?php }?>        
          
        
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>
        <script src="../resources/js/createGuideProfile.js"></script>

        </div>
    </body>
</html>