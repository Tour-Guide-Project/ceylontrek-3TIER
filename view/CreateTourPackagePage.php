<?php session_start();?>
<html  lang="en">
    <head>
        <title>Create Tour Package</title>
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
                </form>
             <div class="content">
               
                <div class="con">
		<form  action="../controller/createTourPackage_controller.php"  method="post" enctype="multipart/form-data" >
        <div>
        <?php 

            
            $title='';
            $duration='';
            $destinations='';
            $maxMembers='';
            $price='';
            $description='';

            if(isset($_GET['param'])){
                $errors=$_GET['param'];
                foreach ($errors as $error) {
                    echo '<p class="error">'.$error.'</p>';
                }
            }
            if(isset($_GET['param1'])){
                $fields=$_GET['param1'];
                $title=$fields[0];
                $duration=$fields[1];
                $destinations=$fields[2];
                $maxMembers=$fields[3];
                $price=$fields[4];
                $description=$fields[5];
                            }
        
        
        ?>
        <!-- end of php -->
			<div class="row">
				<div class="col-25">
					<label for="title" class="lbl">Title :</label>
				</div>
				<div class="col-75">
					<input type="text" name="title"   <?php echo 'value="'.$title.'"'; ?>>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="duration" class="lbl">Duration :</label>
				</div>
				<div class="col-75">
					<input type="text" name="duration"   <?php echo 'value="'.$duration.'"'; ?>>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="destinations" class="lbl">Destinations :</label>
				</div>
				<div class="col-75">
					<input type="text" name="destinations"   <?php echo 'value="'.$destinations.'"'; ?>>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="maxMembers" class="lbl">Maximum No. Of Members </label>
				</div>
				<div class="col-75">
					<input type="text" name="maxMembers"   <?php echo 'value="'.$maxMembers.'"'; ?>>
				</div>
			</div>

            <div class="row">
				<div class="col-25">
					<label for="price" class="lbl">Price ($) :</label>
				</div>
				<div class="col-75">
					<input type="text" name="price"   <?php echo 'value="'.$price.'"'; ?>>
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="description" class="lbl">Description:</label>
				</div>
				<div class="col-75">
					<textarea name="description" style="height: 500px"> <?php echo "$description"; ?></textarea>
				</div>
			</div>

            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Select Main Image :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[0]" >
				</div>
			</div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Select Image 2 :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[1]" >
				</div>
			</div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Select Image 3 :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[2]" >
				</div>
			</div>
            <div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Select Image 4 :</label>
				</div>
				<div class="col-75">
                <input type="file"   name="file[3]" >
				</div>
			</div>
			
			<div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree">
				</div>
				<div class="agreed2">
					<label for="agree">I agree that I will take the whole responsibility of the tour and I will not hold Ceylon Trek against any problems occured during tour.</label>
				</div>
			</div>
			<div class="submitCls">
				<input type="submit" name="createPackage" value="Create Package">
            </div>
        </div>
		</form>
    </div>
    <!-- form -->
                
          
        
                <div class="dashend"> <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>

        </div>
    </body>
</html>