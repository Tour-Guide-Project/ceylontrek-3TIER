<?php session_start(); ?>

<html  lang="en">
    <head>
        <title>Edit Guide Profile</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/new_top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/CreateTourPackagePage.css">
        <script type="text/javascript" src="../resources/js/jquery.js"></script>
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
		    <form action="../controller/edit_guide_myprofile_controller.php" method="post" enctype="multipart/form-data">
            <div>
                <?php 
					if(isset($_GET['param'])){
						$errors=$_GET['param'];
							foreach ($errors as $error) {
								echo '<p class="error">'.$error.'</p>';
							}
						}
           			?> 
			    <?php 
			    if(isset($_GET['data'])){
					$records=unserialize($_GET['data']);?>
                    <?php foreach ($records as $record) {?>
                    
            	<div class="row">
                    <div class="col-25">
                        <label for="displayName" class="lbl">Display Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="displayName" value="<?php echo $record['displayName'];?>" >
                    </div>
			    </div>
                <div class="row">
                    <div class="col-25">
                        <label for="gRegNo" class="lbl">Guide Reg. Number:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="gRegNo" value="<?php echo $record['government_reg_no'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="NIC" class="lbl">NIC number :</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="NIC" value="<?php echo $record['nic'];?>">
                    </div>
                </div>
			
                <div class="row">
                    <img src="<?php echo $record['img_nic1']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload1" class="lbl">Upload NIC image :</br>(side 1)</label>
                    </div>
                    <div class="col-75">
                        <input type="file"  id="file1" name="file[]" >  
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img" id="upload1" name="upload_img1" >Upload</button>  
                        <?php if($record['img_nic1']=='../resources/images/nic/default_nic.jpg'){?>
                            <button type="submit button" class=" remove_img disable"  id="remove1" name="remove_img1" disabled>Remove</button>
                        <?php }else{?>
                            <button type="submit button" class=" remove_img"  id="remove1" name="remove_img1" >Remove</button>
                        <?php }?>

                    </div>
                </div>
                <div class="row">
                    <img src="<?php echo $record['img_nic2']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload" class="lbl">Upload NIC image :</br>(side 2)</label>
                    </div>
                    <div class="col-75">
                        <input type="file"  id="file2" name="file[]" >
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img"  id="upload2" name="upload_img2" >Upload</button>
                        <?php if($record['img_nic2']=='../resources/images/nic/default_nic.jpg'){?>
                            <button type="submit button" class=" remove_img disable"  id="remove2" name="remove_img2" disabled>Remove</button>
                        <?php }else{?>
                            <button type="submit button" class=" remove_img"  id="remove2" name="remove_img2" >Remove</button>
                        <?php }?>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-25">
                        <label for="languages" class="lbl">Fluent Languages:</label>
                    </div>
                    <div class="col-75" >
                        <input type="text" name="languages" value="<?php echo $record['fluent_languages'];?>" >
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-25">
                        <label for="experience" class="lbl">Years of Experience:</label>
                    </div>
                    <div class="col-75" >
                        <input type="text" name="experience" value="<?php echo $record['experience'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="experience" class="lbl">Price($):</label>
                    </div>
                    <div class="col-75" >
                        <input type="text" name="price" value="<?php echo $record['price'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="experience" class="lbl">No of Maximum Tourists:</label>
                    </div>
                    <div class="col-75" >
                        <input type="text" name="max_tourists" value="<?php echo $record['max_tourists'];?>">
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-25">
                        <label for="bio" class="lbl" >Bio:</br>(max 500 characters)</label>
                    </div>
                    <div class="col-75">
                        <textarea name="bio" style="height:100px" ><?php echo $record['bio'];?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="enterDescription" class="lbl" >Description:</br>(max 2500 characters)</label>
                    </div>
                    <div class="col-75">
                        <textarea name="enterDescription" style="height:400px" ><?php echo $record['gdescription'];?></textarea>
                    </div>
                </div>
    
                <div class="row">
                    <img src="<?php echo $record['img1']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload3" class="lbl">Upload Main image:</label>
                    </div>
                    <div class="col-75">
                        <input type="file"  id="file3" name="file[]" >
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img" id="upload3" name="upload_img3" >Upload</button> 
                        <?php if($record['img1']=='../resources/images/profile/default.jpg'){?> 
                            <button type="submit button" class=" remove_img disable"  id="remove3" name="remove_img3" disabled >Remove</button>
                        <?php }else{?> 
                            <button type="submit button" class=" remove_img"  id="remove3" name="remove_img3" >Remove</button>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <img src="<?php echo $record['img2']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload4" class="lbl">Upload image 2:</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="file4"  name="file[]" >
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img" id="upload4" name="upload_img4" >Upload</button>
                        <?php if($record['img2']=='../resources/images/profile/default.jpg'){?>  
                            <button type="submit button" class=" remove_img disable"  id="remove4" name="remove_img4" disabled>Remove</button>
                        <?php }else{?> 
                            <button type="submit button" class=" remove_img"  id="remove4" name="remove_img4" >Remove</button>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <img src="<?php echo $record['img3']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload5" class="lbl">Upload image 3 :</label>
                    </div>
                    <div class="col-75">
                        <input type="file"  id="file5" name="file[]" >
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img" id="upload5" name="upload_img5" >Upload</button> 
                        <?php if($record['img3']=='../resources/images/profile/default.jpg'){?> 
                            <button type="submit button" class=" remove_img disable"  id="remove5" name="remove_img5" disabled >Remove</button>
                        <?php }else{?> 
                            <button type="submit button" class=" remove_img"  id="remove5" name="remove_img5" >Remove</button>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <img src="<?php echo $record['img4']?>" alt="" class="nic">
                    <div class="col-25">
                        <label for="imageUpload6" class="lbl">Upload image 4:</label>
                    </div>
                    <div class="col-75">
                        <input type="file"  id="file6" name="file[]" >
                    </div>
                    <div class="col-75">
                        <button type="submit button" class=" upload_img" id="upload6" name="upload_img6" >Upload</button> 
                        <?php if($record['img4']=='../resources/images/profile/default.jpg'){?> 
                            <button type="submit button" class=" remove_img disable"  id="remove6" name="remove_img6" disabled >Remove</button>
                        <?php }else{?>
                            <button type="submit button" class=" remove_img"  id="remove6" name="remove_img6" >Remove</button>
                        <?php }?> 
                    </div>
                </div>

                <?php if($record['haveVehicle']==0){?>
                <div class="row">
                    <label for="haveVehicle" class="haveVehicle" > I have my own vehicle for tourism purposes</label>
                    <input type="checkbox"  name="haveVehicle"  id="haveVehicle" style="margin-top:5%; width:15px; height:15px; font-size:17.5px;"  onclick="vehicleFunction()">
                </div>

            
                <div id="vehicle" class="vehicle">
                    <div class="row">
                        <div class="col-25">
                            <label for="vRegNo" class="lbl">Registration No:</label>
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
                <?php }}}?>
                

                <!-- if guide has vehicle -->
                <?php if($record['haveVehicle']==1){?>
                <?php 
			        if(isset($_GET['vdata'])){
					$vrecords=unserialize($_GET['vdata']);
                    foreach ($vrecords as $vrecord) {?>
                   
                <div class="row">
                    <label for="haveVehicle" class="haveVehicle" > I have my own vehicle for tourism purposes</label>
                    <input type="checkbox"  name="haveVehicle"  id="haveVehicle" style="margin-top:5%; width:15px; height:15px; font-size:17.5px;" onclick="vehicleFunction()" <?php echo "checked";?>>
                </div>

                <div id="vehicle" class="vehicle" style="display: block;">
                    <div class="row">
                        <div class="col-25">
                            <label for="vRegNo" class="lbl">Registration No:</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vRegNo" value="<?php echo $vrecord['vehicle_reg_no']?>">
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-25">
                            <label for="vType" class="lbl">Type :</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vType" value="<?php echo $vrecord['type']?>" >
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-25">
                            <label for="vMake" class="lbl">Make :</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vMake" value="<?php echo $vrecord['make']?>" >
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-25">
                            <label for="vModel" class="lbl">Model :</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vModel" value="<?php echo $vrecord['model']?>">
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-25">
                            <label for="vLicense" class="lbl">License No. :</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vLicense" value="<?php echo $vrecord['license_no']?>" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="vSeats" class="lbl">No. of seats :</label>
                        </div>
                        <div class="col-75" >
                            <input type="text" name="vSeats" value="<?php echo $vrecord['no_of_seats']?>" >
                        </div>
                    </div>
                </div> 
            <!-- vehicle  -->
                <?php }?>


                <?php if($record['modApproved']==0){?>
                    <div class="row">
                        <div class="col-25" style="width: 50%;margin-top:-14px;">
                            <label for="" class="lbl">Is This Profile Approved by Moderator?</label>
                        </div>
                        <div class="col-75" style="width: 50%;" >
                            <input type="text" style="opacity:0.4;" value="No" readonly >
                        </div>
                    </div>
                <?php }else{?>
                    <div class="row">
                        <div class="col-25" style="width: 50%;margin-top:-14px;">
                            <label for="" class="lbl">Is This Profile Approved by Moderator?</label>
                        </div>
                        <div class="col-75" style="width: 50%;">
                            <input type="text" style="opacity:0.4;" value="Yes" readonly >
                        </div>
                    </div>
                <?php }?>

            <?php }}?>

                <div class="updateCls">
                    <input type="submit" name="update_profile" value="Update Profile">
                </div>

                <div class="updateCls cancel">
                    <input type="submit" name="cancel" value="Cancel">
                </div>

            </div>
		    </form>
        </div>
    <!-- form -->
    </div>              

<!-- //successfully update alert  -->
<?php 
	if(isset($_GET['successfullyUpdated'])){?>
	<script>alert('You have Successfully Updated Your Profile!');</script>
<?php }?>
<div class="dashend">
    <?php include('../view/footer.php'); ?>
</div>
<script src="../resources/js/guide dashboard.js"></script>
<script src="../resources/js/createGuideProfile.js"></script>
</body>
<script type="text/javascript" src="../resources/js/upload_img.js"></script>
</html>