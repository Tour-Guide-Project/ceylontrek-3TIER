<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); 
session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\edit_guide_myprofile_sql.php'); ?>


<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}

//if click edit my profile button
if(isset($_POST['editmyprofile_btn'])){
    $guide_id=$_SESSION['id'];
    
    $result_set1=get_details($connection,$guide_id);
    $result_set2=get_vehicle_details($connection,$guide_id);
    
    if($result_set1 && $result_set2){
        
        $record=array();
        $vrecord=array();

        while($row1=mysqli_fetch_assoc($result_set1)){
            $record[]=$row1;      
        }
        while($row2=mysqli_fetch_assoc($result_set2)){
            $vrecord[]=$row2;      
        }
        $records=serialize($record);  
        $vrecords=serialize($vrecord);   
          
    header('Location:/ceylontrek-3tier/view/edit_guide_myprofile.php?'.http_build_query(array('data'=>$records,'vdata'=>$vrecords))); 
    }
}

//if click cancel button
if(isset($_POST['cancel'])){
    header('Location:/ceylontrek-3tier/view/tourGuideProfile.php');
}


//if click update button in edit profile
if(isset($_POST['update_profile'])){
    $errors=array();
    $guide_id=$_SESSION['id'];

    if(!isset($_POST['displayName']) || strlen(trim($_POST['displayName']))<1){
        $errors[]= 'Display Name is required/Invalid';
    }
    //check name has only a-z
    elseif(!preg_match(("/[^0-9]/"),$_POST['displayName'])){
        $errors[]= 'Display Name is Invalid';     
    }
    if(!isset($_POST['gRegNo']) || strlen(trim($_POST['gRegNo']))<1){
        $errors[]= 'Registration Number is required/Invalid';
    }
    if(!isset($_POST['NIC']) || strlen(trim($_POST['NIC']))<1){
        $errors[]= 'NIC Number is required/Invalid';
    }
    elseif(!preg_match(("/^[0-9]{9}[vVxX]$/"),$_POST['NIC']) && (!preg_match(("/^[0-9]{12}/"),$_POST['NIC']))){
        $errors[]= 'NIC Number is required/Invalid';
    }

    if(!isset($_POST['languages']) || strlen(trim($_POST['languages']))<1){
        $errors[]= 'Languages is required/Invalid';
    }
    elseif(!preg_match(("/[^0-9]/"),$_POST['languages'])){
        $errors[]= 'Languages is Invalid';     
    }

    if(!isset($_POST['experience']) || strlen(trim($_POST['experience']))>2){
        $errors[]= 'Years of Experience is required/Invalid';
    }
    elseif(!is_numeric($_POST['experience'])){
        $errors[]= 'Years of Experience is Invalid';
    }

    if(!isset($_POST['price']) || strlen(trim($_POST['price']))<1){
        $errors[]= 'Price is required/Invalid';
    }
    elseif(!is_numeric($_POST['price'])){
        $errors[]= 'Price is Invalid';
    }

    if(!isset($_POST['max_tourists']) || strlen(trim($_POST['max_tourists']))>2){
        $errors[]= 'No of Maximum Tourists is required/Invalid';
    }
    elseif(!is_numeric($_POST['max_tourists'])){
        $errors[]= 'No of Maximum Tourists is Invalid';
    }
    if(!isset($_POST['enterDescription']) || strlen(trim($_POST['enterDescription']))<1){
        $errors[]='The Description should be less than 2500 characters';
    }
    if(!isset($_POST['bio']) || strlen(trim($_POST['bio']))<1){
        $errors[]='The bio should be less than 500 characters';
    }
    

    //checking if NIC is already exists
    $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);// escaped special charactrs,we can create legal query from this.
    $result_set=exist_nic($connection,$NIC,$guide_id);
 
    if($result_set)
    {
        if(mysqli_num_rows($result_set)==1){
            $errors[]='Your NIC number is already exists';
        }
    } 
     
    //validate vehicle details 
    if(isset($_POST['haveVehicle'])){   
        $haveVehicle=1;

        if(!isset($_POST['vRegNo']) || strlen(trim($_POST['vRegNo']))<1){
            $errors[]= 'Vehicle Registration Number is required/Invalid';
        }
        if(!isset($_POST['vLicense']) || strlen(trim($_POST['vLicense']))<1){
            $errors[]= 'Vehicle License Number is required/Invalid';
        }
        if(!isset($_POST['vType']) || strlen(trim($_POST['vType']))<1){
            $errors[]= 'Vehicle Type is required/Invalid';
        }
        elseif(!preg_match(("/[^0-9]/"),$_POST['vType'])){
            $errors[]= 'Vehicle Type is Invalid';     
        }
        if(!isset($_POST['vMake']) || strlen(trim($_POST['vMake']))<1){
            $errors[]= 'Vehicle Make is required/Invalid';
        }
        elseif(!preg_match(("/[^0-9]/"),$_POST['vMake'])){
            $errors[]= 'Vehicle Make is Invalid';     
        }
        if(!isset($_POST['vModel']) || strlen(trim($_POST['vModel']))<1){
            $errors[]= 'Vehicle Model is required/Invalid';
        }
        elseif(!preg_match(("/[^0-9]/"),$_POST['vModel'])){
            $errors[]= 'Vehicle Model is Invalid';     
        }
        if(!isset($_POST['vSeats']) || strlen(trim($_POST['vSeats']))>2){
            $errors[]= 'Vehicle seats is required/Invalid';
        }
        elseif(!is_numeric($_POST['vSeats'])){
            $errors[]= 'Vehicle seats is Invalid';
        }
           
    }
    // //check image validation
    // for ($x = 0; $x <= 5; $x++) {
    //     $file_type=$_FILES['file']['type'][$x];
    //     $file_size=$_FILES['file']['size'][$x];
    
    //     $filename = $_FILES['file']['name'][$x];
    //     $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //    // print_r($ext);
       
    // }
    // //checking the image file type
    // if($ext !== 'jpg'){
    //     $errors[]='Only JPEG  files are allowed';
    // }
    // //checking image file size
    // if($file_size> 5000000000){
    //     $errors[]='File size should be less than 500mb';
    // }
  
    //if erros are not occured
    if(empty($errors)){

        $displayName=mysqli_real_escape_string($connection,$_POST['displayName']);
        $gRegNo = mysqli_real_escape_string($connection,$_POST['gRegNo']);
        $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
        $languages=mysqli_real_escape_string($connection,$_POST['languages']);
        $experience=mysqli_real_escape_string($connection,$_POST['experience']);
        $bio=mysqli_real_escape_string($connection,$_POST['bio']);
        $price=mysqli_real_escape_string($connection,$_POST['price']);
        $max_tourists=mysqli_real_escape_string($connection,$_POST['max_tourists']);
        $enterDescription=mysqli_real_escape_string($connection,$_POST['enterDescription']);

        //if guide has vehicle
        if(isset($_POST['haveVehicle'])){
                                        
            $Vehicle=1;
            $vRegNo=mysqli_real_escape_string($connection,$_POST['vRegNo']);
            $vType=mysqli_real_escape_string($connection,$_POST['vType']);
            $vMake=mysqli_real_escape_string($connection,$_POST['vMake']);
            $vModel=mysqli_real_escape_string($connection,$_POST['vModel']);
            $vLicense=mysqli_real_escape_string($connection,$_POST['vLicense']);
            $vSeats=mysqli_real_escape_string($connection,$_POST['vSeats']);

            $result1= update_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$Vehicle);
            $result2=insert_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats);
            $result3=update_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats);
            
            //if($result1 && $result2 && $result3){
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
            //}
    
            // else{
            //     $errors[]='Failed to modify the record.';
            // }
        }
        //if guide has not vehicle
        else{
            $Vehicle=0;

            $result1= update_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$Vehicle);
            $result2=V_update_vehicleinfo_query($connection,$guide_id);

           // if($result1 && $result2){
            header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
            //}
    
            // else{
            //     $errors[]='Failed to modify the record.';
            // }
        }

    }

    
    else{
        $guide_id=$_SESSION['id'];
    
        $result_set1=get_details($connection,$guide_id);
        $result_set2=get_vehicle_details($connection,$guide_id);
        
        if($result_set1 && $result_set2){
            
            $record=array();
            $vrecord=array();
    
            while($row1=mysqli_fetch_assoc($result_set1)){
                $record[]=$row1;      
            }
            while($row2=mysqli_fetch_assoc($result_set2)){
                $vrecord[]=$row2;      
            }
            $records=serialize($record);  
            $vrecords=serialize($vrecord);      
              
        header('Location:/ceylontrek-3tier/view/edit_guide_myprofile.php?'.http_build_query(array('data'=>$records,'vdata'=>$vrecords,'param'=>$errors))); 
        }
    }
}
if(isset($_POST['upload_img1'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/nic/";
    $target_path1=$target_path.basename($_FILES['image0']['name']);
       
    if(move_uploaded_file($_FILES ['image0']['tmp_name'],$target_path1)){
        $result_set1=update_image1($connection,$guide_id,$target_path1);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}
if(isset($_POST['upload_img2'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/nic/";
    $target_path2=$target_path.basename($_FILES['image1']['name']);
       
    if(move_uploaded_file($_FILES ['image1']['tmp_name'],$target_path2)){
        $result_set1=update_image2($connection,$guide_id,$target_path2);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}
if(isset($_POST['upload_img3'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/profile/";
    $target_path3=$target_path.basename($_FILES['image2']['name']);
      
    if(move_uploaded_file($_FILES ['image2']['tmp_name'],$target_path3)){
        $result_set1=update_image3($connection,$guide_id,$target_path3);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}
if(isset($_POST['upload_img4'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/profile/";
    $target_path4=$target_path.basename($_FILES['image3']['name']);
       
    if(move_uploaded_file($_FILES ['image3']['tmp_name'],$target_path4)){
        $result_set1=update_image4($connection,$guide_id,$target_path4);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}
if(isset($_POST['upload_img5'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/profile/";
    $target_path5=$target_path.basename($_FILES['image4']['name']);
       
    if(move_uploaded_file($_FILES ['image4']['tmp_name'],$target_path5)){
        $result_set1=update_image5($connection,$guide_id,$target_path5);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}
if(isset($_POST['upload_img6'])){

    $guide_id=$_SESSION['id'];

    $target_path="../resources/images/profile/";
    $target_path6=$target_path.basename($_FILES['image5']['name']);
       
    if(move_uploaded_file($_FILES ['image5']['tmp_name'],$target_path6)){
        $result_set1=update_image6($connection,$guide_id,$target_path6);
        header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
    }
}

//remove images
if(isset($_POST['remove_img1'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image1($connection,$guide_id); 
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');  
}
if(isset($_POST['remove_img2'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image2($connection,$guide_id); 
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated'); 
}
if(isset($_POST['remove_img3'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image3($connection,$guide_id);
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
}
if(isset($_POST['remove_img4'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image4($connection,$guide_id);
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
}
if(isset($_POST['remove_img5'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image5($connection,$guide_id);
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
}
if(isset($_POST['remove_img6'])){
    $guide_id=$_SESSION['id'];
    $result_set1=remove_image6($connection,$guide_id);
    header('Location:/ceylontrek-3tier/controller/edit_guide_myprofile_controller.php?successfullyUpdated');
}

        
 //successfully update alert  -->
if(isset($_GET['successfullyUpdated'])){

    $guide_id=$_SESSION['id'];
    
    $result_set1=get_details($connection,$guide_id);
    $result_set2=get_vehicle_details($connection,$guide_id);
    
    if($result_set1 && $result_set2){
        
        $record=array();
        $vrecord=array();

        while($row1=mysqli_fetch_assoc($result_set1)){
            $record[]=$row1;      
        }
        while($row2=mysqli_fetch_assoc($result_set2)){
            $vrecord[]=$row2;      
        }
        $records=serialize($record);  
        $vrecords=serialize($vrecord);      
          
    header('Location:/ceylontrek-3tier/view/edit_guide_myprofile.php?successfullyUpdated&'.http_build_query(array('data'=>$records,'vdata'=>$vrecords,'param'=>$errors))); 
    }
} 
    
        
   



?>