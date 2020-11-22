<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createGuideProfile_sql.php'); ?>


<?php

$errors=array();
$gRegNo ='';
$DOB='';
$NIC='';
$languages='';
$experience='';
$enterDescription='';
$haveVehicle='';
$vRegNo='';
$vType='';
$vMake='';
$vModel='';
$vLicense='';
$vSeats='';
$img_error=0;
$target_path1='';
$target_path2='';
$file_uploaded1='';
$file_uploaded2='';
if (isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/createGuideProfile.php');
}
else{
    header('Location:/ceylontrek-3tier/view/login.php');
}






if(isset($_POST['submit'])){
                $id=$_SESSION['id'];
                $gRegNo = $_POST['gRegNo'];
                $DOB = $_POST['DOB'];
                $NIC=$_POST['NIC'];
                $languages=$_POST['languages'];
                $experience=$_POST['experience'];
                $enterDescription=$_POST['enterDescription'];
                $haveVehicle=$_POST['haveVehicle'];
                

                $req_fields=array('gRegNo','DOB','NIC','languages','experience','enterDescription');
                $fields=array();//array to store all the required fields
                $vfields=array();//array to store all the vehicle details
                foreach($req_fields as $field){
                    if(empty(trim($_POST[$field]))){
                        $errors[]='*Fill out all Fields';
                    break;
                    
                    }
                } //checking required fields
                
                foreach($req_fields as $field){
                    
                        $fields[]=$_POST[$field];
                } //storing fields in array

                if(strlen(trim($_POST['enterDescription']))>500){
                    $errors[]='*The Description should be less than 500 characters';
                }

                if(isset($_POST['haveVehicle'])){   
                    $haveVehicle=1;
                    $vRegNo=$_POST['vRegNo'];
                    $vType=$_POST['vType'];
                    $vMake=$_POST['vMake'];
                    $vModel=$_POST['vModel'];
                    $vLicense=$_POST['vLicense'];
                    $vSeats=$_POST['vSeats'];
    
                    $vehicle_fields=array('vRegNo','vType','vMake','vModel','vLicense','vSeats');
                    foreach($vehicle_fields as $vFeild){
                        if(empty(trim($_POST[$vFeild]))){
                            $errors[]='*Complete vehicle details';
                        break;
                        }
                    }
                    
                    foreach($vehicle_fields as $vFeild){
                        $vfields[]=$_POST[$vFeild];
                        }

                   
                }
                //end of vehicle unit

                //image uploading begins
                $target_path="../resources/images/nic/";
                $target_path1=$target_path.basename($id . $_FILES['file']['name'][0]);
                $target_path2=$target_path.basename($id . $_FILES['file']['name'][1]);

                $file_type1 = $_FILES['image']['type'][0];
                $file_type2 = $_FILES['image']['type'][1];

                // if ($file_type1 != 'image/*' ) {
                //     $errors[] = '*Only image files are allowed for NIC image side 1.';
                //     $img_error=1;

                // }
                // if ($file_type2 != 'image/*' ) {
                //     $errors[] = '*Only image files are allowed for NIC image side 2';
                //     $img_error=1;

                // }

                if($img_error==0){
                    $file_uploaded1 = move_uploaded_file($_FILES ['file']['tmp_name'][0],$target_path1);
                    $file_uploaded2 = move_uploaded_file($_FILES ['file']['tmp_name'][1],$target_path2);
                }

                if(!($file_uploaded2 && $file_uploaded1)){
                    $errors[]='*Errors in image upload';
                }
                










                if(!isset($_POST['agree'])){//checking whether terms and conditions are agreed
                    $errors[]='*Agree to the Terms and Conditions before submiting your Profile.';
                }

                

                        
                    if(empty($errors)){
                            $id=mysqli_real_escape_string($connection,$_SESSION['id']);
                            $gRegNo = mysqli_real_escape_string($connection,$_POST['gRegNo']);
                            $DOB = mysqli_real_escape_string($connection,$_POST['DOB']);
                            $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
                            $languages=mysqli_real_escape_string($connection,$_POST['languages']);
                            $experience=mysqli_real_escape_string($connection,$_POST['experience']);
                            $enterDescription=mysqli_real_escape_string($connection,$_POST['enterDescription']);
                            
                            if(isset($_POST['haveVehicle'])){
                                        
                                    $Vehicle=1;
                                    $vRegNo=mysqli_real_escape_string($connection,$_POST['vRegNo']);
                                    $vType=mysqli_real_escape_string($connection,$_POST['vType']);
                                    $vMake=mysqli_real_escape_string($connection,$_POST['vMake']);
                                    $vModel=mysqli_real_escape_string($connection,$_POST['vModel']);
                                    $vLicense=mysqli_real_escape_string($connection,$_POST['vLicense']);
                                    $vSeats=mysqli_real_escape_string($connection,$_POST['vSeats']);

                                            $result1= insert_guideinfo_query($connection,$id,$gRegNo,$DOB,$NIC,$languages,$experience,$enterDescription,$Vehicle,$target_path1,$target_path2);
                                            $result2=insert_vehicleinfo_query($connection,$id,$vRegNo,$vType,$vMake,$vModel,$vLicense,$vSeats);

                                        if($result1 && $result2){
                                            header('Location:/ceylontrek-3tier/controller/createGuideProfile_controller.php?profile-submitted=true');
                                        }
                            
                                        else{
                                            $errors[]='Failed to modify the record.';
                                        }

                            }
                            else{

                                        $Vehicle=0;
                                                $result1= insert_guideinfo_query($connection,$id,$gRegNo,$DOB,$NIC,$languages,$experience,$enterDescription,$Vehicle,$target_path1,$target_path2);
                                            

                                            if($result1){
                                                header('Location:/ceylontrek-3tier/controller/createGuideProfile_controller.php?profile-submitted=true');
                                            }
                                
                                            else{
                                                $errors[]='Failed to modify the record.';
                                            }

                    }
                
                   


                }
                else{
                    header('Location: /ceylontrek-3tier/view/createGuideProfile.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields,'param2'=>$vfields)));
                }

}


?>


