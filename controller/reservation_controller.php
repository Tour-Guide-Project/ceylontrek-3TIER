<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\reservation_sql.php'); ?>

<?php
$errors=array();

    $tourist_id='';
    $guide_id='';
   $tourist_name=''; 
   $tourist_email='';
   $telephone_number='';
   $no_of_adults='';
   $no_of_children='';
   $arrival_date='';
   $departure_date='';
   $notes='';
   $price_per_day='';
    $total_price='';


if (isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/reservation.php');
}
else{
    header('Location:/ceylontrek-3tier/view/login.php');
}

if(isset($_GET['reserve'])){
   $tourist_id=$_SESSION['id'];
   $guide_id=$_GET['guide_id'];
   $tourist_name=$_GET['tourist_name']; 
   $tourist_email=$_GET['tourist_email'];
   $telephone_number=$_GET['tourist_phone'];
   $no_of_adults=$_GET['total_adults'];
   $no_of_children=$_GET['total_children'];
   $arrival_date=$_GET['arrival'];
   $departure_date=$_GET['departure'];
   $notes=$_GET['special_notes'];

   $req_fields=array('tourist_name','tourist_email','tourist_phone','total_adults','total_children','arrival','departure','special_notes');
                $fields=array();//array to store all the required fields

                foreach($req_fields as $field){
                    if(empty(trim($_GET[$field]))){
                        $errors[]='*Fill out all fields';
                        break;
                    
                    }
                } //checking required fields
                
                foreach($req_fields as $field){
                    
                        $fields[]=$_GET[$field];
                } //storing fields in array

    if(strlen(trim($_GET['special_notes']))>2500){
                    $errors[]='*The Description should be less than 2500 characters';
                }

    if(!isset($_GET['agree'])){ //checking whether terms and conditions are agreed
        $errors[]='*Agree to the Terms and Conditions before submiting your Reservation.';
    }

    $price_per_day= get_price($connection,$guide_id);
    $errors[]=$price_per_day;
    $errors[]=$guide_id;
    
    // $errors[]=mysqli_num_rows($price_per_day);
    if(!$price_per_day){
        $errors[]='xxx';
    }
    $total_price= $price_per_day*$no_of_adults + ($price_per_day*$no_of_children)/2;

    if(empty($errors)){
        $tourist_id=mysqli_real_escape_string($connection,$_SESSION['id']);
        $guide_id=mysqli_real_escape_string($connection,$_GET['guide_id']);
       $tourist_name= mysqli_real_escape_string($connection,$_GET['tourist_name']);
       $tourist_email=mysqli_real_escape_string($connection,$_GET['tourist_email']);
       $telephone_number=mysqli_real_escape_string($connection,$_GET['tourist_phone']);
       $no_of_adults=mysqli_real_escape_string($connection,$_GET['total_adults']);
       $no_of_children=mysqli_real_escape_string($connection,$_GET['total_children']);
       $arrival_date=mysqli_real_escape_string($connection,$_GET['arrival']);
       $departure_date=mysqli_real_escape_string($connection,$_GET['departure']);
       $notes=mysqli_real_escape_string($connection,$_GET['special_notes']);

       $result= make_reservation_query($connection,$tourist_id,$guide_id,$tourist_name,$tourist_email,$telephone_number,$no_of_adults,$no_of_children,$arrival_date,$departure_date,$notes,$total_price);
       if($result){
        header('Location:/ceylontrek-3tier/controller/view_guide_ad_controller.php?view_guide='.$guide_id.'&reservation=success');
    }

    else{
        $errors[]='Failed to modify the record.';
    }
    }


       else{
        header('Location: /ceylontrek-3tier/view/reservation.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
    }
    

    }
    




?>