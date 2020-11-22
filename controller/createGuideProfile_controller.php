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
if (isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/createGuideProfile.php');
}
else{
    header('Location:/ceylontrek-3tier/view/login.php');
}

if(isset($_POST['submit'])){
                
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
                        $errors[]='Fill out all Fields';
                    break;
                    
                    }
                } //checking required fields
                
                foreach($req_fields as $field){
                    
                        $fields[]=$_POST[$field];
                } //storing fields in array

                if(strlen(trim($_POST['enterDescription']))>500){
                    $errors[]='The Description should be less than 500 characters';
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
                            $errors[]='Complete vehicle details';
                        break;
                        }

                        foreach($vehicle_fields as $vFeild){
                            $vfields[]=$_POST[$vFeild];
                            }

                    }

                   
    }//end of vehicle unit

                if(empty($errors)){
                    $gRegNo = mysqli_real_escape_string($connection,$_POST['gRegNo']);
                    $DOB = mysqli_real_escape_string($connection,$_POST['DOB']);
                    $NIC=mysqli_real_escape_string($connection,$_POST['NIC']);
                    $languages=mysqli_real_escape_string($connection,$_POST['languages']);
                    $experience=mysqli_real_escape_string($connection,$_POST['experience']);
                    $enterDescription=mysqli_real_escape_string($connection,$_POST['enterDescription']);
                    $haveVehicle=mysqli_real_escape_string($connection,$_POST['haveVehicle']);

                    $result1= insert_guideinfo_query($connection,$isd,$gRegNo,$DOB,$NIC,$languages,$experience,$enterDescription,$haveVehicle);
                  

                    if($result1){
                        header('Location:/ceylontrek-3tier/controller/createGuideProfile_controller.php?profile-submitted=true');
                    }
        
                    else{
                        $errors[]='Failed to modify the record.';
                    }


                }
                else{
                    header('Location: /ceylontrek-3tier/view/createGuideProfile.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields,'param2'=>$vfields)));
                }

}


?>


