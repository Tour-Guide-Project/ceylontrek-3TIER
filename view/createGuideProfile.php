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
                <div class="side_bar">
                    <img src="../resources/img/home/logo2.png" class="dashlogo">
                    <img src="../resources/img/reviewimg.jpg" class="profile" >
                    <button class="edit"> Edit Profile</button><br>
                  <div class="sidebar-menu">
                  <ul>

                    <li>    
                            
                            <a href="guideDashboard.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">My Dashboard</span>
                            </a> 
                            
                        </li>
                    
                        <li>
                            <a href="Inbox.php">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <span class="menu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href=createGuideProfile.php>
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Create My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="CreateTourPackagePage.php">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Create tour package</span>
                            </a>
                        </li>

                        <li>
                            <a href="tourGuideProfile.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideMyPackages.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Tour Packages</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideUpcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Upcoming Tours</span>
                            </a>
                        </li>

                        <li>
                            <a href="guideUpcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Previous Tours</span>
                            </a>
                        </li>
                    </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->
             <div class="content">
               
                <div class="con">
		<form action="../controller/createGuideProfile_controller.php" method="post" enctype="multipart/form-data">
        <div>
        <?php
                $displayName='';
                $gRegNo ='';
                $DOB='';
                $NIC='';
                $languages='';
                $experience='';
                $bio='';
                $enterDescription='';
                $haveVehicle='';
                $vRegNo='';
                $vType='';
                $vMake='';
                $vModel='';
                $vLicense='';
                $vSeats='';

				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error">'.$error.'</p>';
				    }
                }
                if(isset($_GET['param1'])){
                    $fields=$_GET['param1'];
                    $gRegNo = $fields[0];
                    $NIC=$fields[1];
                    $languages=$fields[2];
                    $experience=$fields[3];
                    $bio=$fields[4];
                    $enterDescription=$fields[5];
                    $displayName=$fields[6];
				    
                }
                if(isset($_GET['param2'])){
                    $vfields=$_GET['param2'];
				    $vRegNo=$vfields[0];
                    $vType=$vfields[1];
                    $vMake=$vfields[2];
                    $vModel=$vfields[3];
                    $vLicense=$vfields[4];
                    $vSeats=$vfields[5];
			    }
			?>
            		<div class="row">
				<div class="col-25">
					<label for="displayName" class="lbl">Display Name:</label>
				</div>
				<div class="col-75">
					<input type="text" name="displayName" <?php echo 'value="'.$displayName.'"'; ?> >
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="gRegNo" class="lbl">Guide Reg. Number:</label>
				</div>
				<div class="col-75">
					<input type="text" name="gRegNo" <?php echo 'value="'.$gRegNo.'"'; ?> >
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="NIC" class="lbl">NIC number :</label>
				</div>
				<div class="col-75">
					<input type="text" name="NIC" <?php echo 'value="'.$NIC.'"'; ?>>
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="imageUpload1" class="lbl">Upload NIC image :</br>(side 1)</label>
				</div>
				<div class="col-75">
                
                    <input type="file"   name="file[]" >
					
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Upload NIC image :</br>(side 2)</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[]" >
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="languages" class="lbl">Fluent Languages:</label>
				</div>
				<div class="col-75" >
					<input type="text" name="languages" <?php echo 'value="'.$languages.'"'; ?>>
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="experience" class="lbl">Years of Experience:</label>
				</div>
				<div class="col-75" >
					<input type="text" name="experience" <?php echo 'value="'.$experience.'"'; ?>>
				</div>
			</div>

            <div class="row">
				<div class="col-25">
					<label for="bio" class="lbl" >Bio:</br>(max 500 characters)</label>
				</div>
				<div class="col-75">
					<textarea name="bio" style="height:100px" ><?php echo "$bio"; ?></textarea>
				</div>
            </div>

			<div class="row">
				<div class="col-25">
					<label for="enterDescription" class="lbl" >Description:</br>(max 2500 characters)</label>
				</div>
				<div class="col-75">
					<textarea name="enterDescription" style="height:400px" ><?php echo "$enterDescription"; ?></textarea>
				</div>
            </div>
    
            <div class="row">
				<div class="col-25">
					<label for="imageUpload3" class="lbl">Upload Main image :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[]" >
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload4" class="lbl">Upload image 2:</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[]" >
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload5" class="lbl">Upload image 3 :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[]" >
				</div>
            </div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload6" class="lbl">Upload image 4:</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[]" >
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
					<input type="text" name="vRegNo" <?php echo 'value="'.$vRegNo.'"'; ?>>
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vType" class="lbl">Type :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vType" <?php echo 'value="'.$vType.'"'; ?>>
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vMake" class="lbl">Make :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vMake" <?php echo 'value="'.$vMake.'"'; ?>>
				</div>
            </div>
            

            
            <div class="row">
				<div class="col-25">
					<label for="vModel" class="lbl">Model :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vModel" <?php echo 'value="'.$vModel.'"'; ?>>
				</div>
            </div>
            
            <div class="row">
				<div class="col-25">
					<label for="vLicense" class="lbl">License No. :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vLicense" <?php echo 'value="'.$vLicense.'"'; ?>>
				</div>
			</div>

            <div class="row">
				<div class="col-25">
					<label for="vSeats" class="lbl">No. of seats :</label>
				</div>
				<div class="col-75" >
					<input type="text" name="vSeats" <?php echo 'value="'.$vSeats.'"'; ?>>
				</div>
            </div>



            </div> 
            <!-- vehicle  -->

			
			<div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree">
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
                
          
        
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>
        <script src="../resources/js/createGuideProfile.js"></script>

        </div>
    </body>
</html>