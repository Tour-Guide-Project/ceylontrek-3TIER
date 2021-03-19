<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\createTourPackage_sql.php'); ?>

<?php

$errors=array();
$title='';
$duration='';
$destinations='';
$maxMembers='';
$price='';
$description='';
$target_path1='';
$target_path2='';
$target_path3='';
$target_path4='';
$file_uploaded1='';
$file_uploaded2='';
$file_uploaded3='';
$file_uploaded4='';
$id=$_SESSION['id'];


if (isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/CreateTourPackagePage.php');
}
else{
    header('Location:/ceylontrek-3tier/view/login.php');
}


if(isset($_POST['createPackage'])){

    $title=$_POST['title'];
    $duration=$_POST['duration'];
    $destinations=$_POST['destinations'];
    $maxMembers=$_POST['maxMembers'];
    $price=$_POST['price'];
    $description=$_POST['description'];

    $req_fields=array('title','duration','destinations','maxMembers','price','description');

    foreach($req_fields as $field){
        if(empty(trim($_POST[$field]))){
            $errors[]='*Fill out all Fields';
        break;
        
        }
    } //checking required fields

    $fields=array();//array to store all the required fields

    foreach($req_fields as $field){
                    
        $fields[]=$_POST[$field];
} //storing fields in array

if(strlen(trim($_POST['enterDescription']))>2500){
    $errors[]='*The Description should be less than 2500 characters';
}


//begining of image upload
                $target_path="../resources/images/packages/";
                $target_path1=$target_path.basename($id . $_FILES['file']['name'][0]);
                $target_path2=$target_path.basename($id . $_FILES['file']['name'][1]);
                $target_path3=$target_path.basename($id . $_FILES['file']['name'][2]);
                $target_path4=$target_path.basename($id . $_FILES['file']['name'][3]);
                


                $file_uploaded1 = move_uploaded_file($_FILES ['file']['tmp_name'][0],$target_path1);
                $file_uploaded2 = move_uploaded_file($_FILES ['file']['tmp_name'][1],$target_path2);
                $file_uploaded3 = move_uploaded_file($_FILES ['file']['tmp_name'][2],$target_path3);
                $file_uploaded4 = move_uploaded_file($_FILES ['file']['tmp_name'][3],$target_path4);

                // if(!($file_uploaded2 || $file_uploaded1) || !($file_uploaded3 || $file_uploaded4)){
                //     $errors[]='*Errors in image upload /Upload all images';
                // }

            




if(!isset($_POST['agree'])){//checking whether terms and conditions are agreed
    $errors[]='*Agree to the Terms and Conditions before submiting your Profile.';
   
}


if(empty($errors)){
    $id=mysqli_real_escape_string($connection,$_SESSION['id']);
    $title=mysqli_real_escape_string($connection,$_POST['title']);
    $duration=mysqli_real_escape_string($connection,$_POST['duration']);
    $destinations=mysqli_real_escape_string($connection,$_POST['destinations']);
    $maxMembers=mysqli_real_escape_string($connection,$_POST['maxMembers']);
    $price=mysqli_real_escape_string($connection,$_POST['price']);
    $description=mysqli_real_escape_string($connection,$_POST['description']);

    $result=insert_packageinfo_query($connection,$id,$title,$duration,$destinations,$maxMembers,$price,$description,$target_path1,$target_path2,$target_path3,$target_path4);
    if($result){
        header('Location:/ceylontrek-3tier/controller/createTourPackage_controller.php?profile-submitted=true');
    }

    else{
        $errors[]='Failed to modify the record.';
    }
}
else{
    header('Location: /ceylontrek-3tier/view/CreateTourPackagePage.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
}

}//end of submit button



?>