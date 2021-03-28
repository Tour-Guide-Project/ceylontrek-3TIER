
<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createGuideProfile_sql.php'); ?>


<?php


if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
}



if(isset($_POST['submit'])){
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

    if(empty($_FILES['image0']['name'])){
        $errors[]="Please upload side 1 of NIC Image";
    }
    if(empty($_FILES['image1']['name'])){
        $errors[]="Please upload side 2 of NIC Image";
    }
     
    //validate vehicle details 
    if(isset($_POST['haveVehicle'])){   
        // $haveVehicle=1;

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
                //end of vehicle unit

                //image uploading begins
               
                if(isset($_FILES['image0']) ){
                    $target_path="../resources/images/nic/";
                    $target_path1=$target_path.basename($_FILES['image0']['name']); 
                    $upload1= move_uploaded_file($_FILES ['image0']['tmp_name'],$target_path1);    
                  
                }
                else{
                    $target_path1="../resources/images/nic/default_nic.jpg";
                }
                if(isset($_FILES['image1'])){
                    $target_path="../resources/images/nic/";
                    $target_path2=$target_path.basename( $_FILES['image1']['name']); 
                    $upload2= move_uploaded_file($_FILES ['image1']['tmp_name'],$target_path2); 
                }
                else{
                    $target_path2="../resources/images/nic/default_nic.jpg";
                }

                if(isset($_FILES['image2'])){
                    echo "hiif";
                    $target_path_a="../resources/images/profile/";
                    $target_path3=$target_path_a.basename( $_FILES['image2']['name']);
                    $upload3= move_uploaded_file($_FILES ['image2']['tmp_name'],$target_path3); 
                    
                }
                if(empty($_FILES['image2']['name'])){
                    $target_path3="../resources/images/profile/default.jpg";
                }

                //
                if(isset($_FILES['image3'])){
                    $target_path_a="../resources/images/profile/";
                    $target_path4=$target_path_a.basename( $_FILES['image3']['name']);
                    $upload4= move_uploaded_file($_FILES ['image3']['tmp_name'],$target_path4); 
                    
                }
                if(empty($_FILES['image3']['name'])){
                    $target_path4="../resources/images/profile/default.jpg";
                }

                //
                if(isset($_FILES['image4'])){
                    $target_path_a="../resources/images/profile/";
                    $target_path5=$target_path_a.basename( $_FILES['image4']['name']);
                    $upload5= move_uploaded_file($_FILES ['image4']['tmp_name'],$target_path5); 
                    
                }
                if(empty($_FILES['image4']['name'])){
                    $target_path5="../resources/images/profile/default.jpg";
                }

                //
                if(isset($_FILES['image5'])){
                    $target_path_a="../resources/images/profile/";
                    $target_path6=$target_path_a.basename( $_FILES['image5']['name']);
                    $upload6= move_uploaded_file($_FILES ['image5']['tmp_name'],$target_path6); 
                    
                }
                if(empty($_FILES['image5']['name'])){
                    $target_path6="../resources/images/profile/default.jpg";
                }
               
            
                    if(empty($errors)){
                            $guide_id=mysqli_real_escape_string($connection,$_SESSION['id']);
                            $displayName=mysqli_real_escape_string($connection,$_POST['displayName']);
                            $gRegNo = mysqli_real_escape_string($connection,$_POST['gRegNo']);
                            $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
                            $languages=mysqli_real_escape_string($connection,$_POST['languages']);
                            $experience=mysqli_real_escape_string($connection,$_POST['experience']);
                            $bio=mysqli_real_escape_string($connection,$_POST['bio']);
                            $enterDescription=mysqli_real_escape_string($connection,$_POST['enterDescription']);
                            $price=mysqli_real_escape_string($connection,$_POST['price']);
                            $max_tourists=mysqli_real_escape_string($connection,$_POST['max_tourists']);
                          
                            
                            if(isset($_POST['haveVehicle'])){
                                        
                                    $Vehicle=1;
                                    print_r($Vehicle);
                                    $vRegNo=mysqli_real_escape_string($connection,$_POST['vRegNo']);
                                    $vType=mysqli_real_escape_string($connection,$_POST['vType']);
                                    $vMake=mysqli_real_escape_string($connection,$_POST['vMake']);
                                    $vModel=mysqli_real_escape_string($connection,$_POST['vModel']);
                                    $vLicense=mysqli_real_escape_string($connection,$_POST['vLicense']);
                                    $vSeats=mysqli_real_escape_string($connection,$_POST['vSeats']);

                                    $result1= insert_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$Vehicle,$target_path1,$target_path2,$target_path3,$target_path4,$target_path5,$target_path6);
                                    $result2=insert_vehicleinfo_query($connection,$guide_id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats);

                                    if($result1 && $result2){
                                        //header('Location:/ceylontrek-3tier/view/createGuideProfile.php?profile-submitted=true');
                                    }else{
                                        $errors[]='Failed to modify the record.';
                                    }

                            }else{

                                    $Vehicle=0;
                                        
                                    $result1= insert_guideinfo_query($connection,$guide_id,$displayName,$gRegNo,$NIC,$languages,$experience,$bio,$enterDescription,$price,$max_tourists,$Vehicle,$target_path1,$target_path2,$target_path3,$target_path4,$target_path5,$target_path6);
                                            

                                            if($result1){
                                              
                                               // header('Location:/ceylontrek-3tier/view/createGuideProfile.php?profile-submitted=true');
                                            }
                                
                                            else{
                                                $errors[]='Failed to modify the record.';
                                            }

                        }
                
                   


                }
                else{
                    header('Location: /ceylontrek-3tier/view/createGuideProfile.php?'.http_build_query(array('param'=>$errors)));
                }

}


?>

  
