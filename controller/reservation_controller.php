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
//    $arrival_date='';
//    $departure_date='';
   $notes='';
   $price_per_day='';
    $total_price='';
    $packageid='';
    

if ((isset($_SESSION['id']))&& ($_SESSION['level']=="tourist")) {

    header('Location:/ceylontrek-3tier/view/reservation.php?');
    
}
else{
    header('Location:/ceylontrek-3tier/view/login.php');
}


if(isset($_POST['submit'])){
  
    $tourist_id=$_SESSION['id'];
    $guide_id=$_SESSION['reservation_guide'];
    $tourist_name=$_POST['tourist_name']; 
    $tourist_email=$_POST['tourist_email'];
    $telephone_number=$_POST['tourist_phone'];
    $no_of_adults=$_POST['total_adults'];
    $no_of_children=$_POST['total_children'];
    $arrival_date=$_POST['arrival'];
    $departure_date=$_POST['departure'];
    $notes=$_POST['special_notes'];
  if(isset($_SESSION['reservation_package'])){
      $packageid=$_SESSION['reservation_package'];
  }
    $req_fields=array('tourist_name','tourist_email','tourist_phone','total_adults','total_children','arrival','departure','special_notes');
     $fields=array();//array to store all the required fields
     
  
  
     foreach($req_fields as $field){
         if(empty(trim($_POST[$field]))){
             $errors[]='*Fill out all Fields';
            break;
         
         }
     } //checking required fields
    
     foreach($req_fields as $field){
         
             $fields[]=$_POST[$field];
     } //storing fields in array
    
  
                 
     if(strlen(trim($_POST['special_notes']))>2500){
                     $errors[]='*The Description should be less than 2500 characters';
                 }
  
     if(!isset($_POST['agree'])){ //checking whether terms and conditions are agreed
         $errors[]='*Agree to the Terms and Conditions before submiting your Reservation.';
     }
     $fields[]=$tourist_id;
     $fields[]=$guide_id;
      
    //  header('Location: /ceylontrek-3tier/view/reservation.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
     $result1= get_price($connection,$guide_id);
    
     
     if($result1 && $no_of_adults){
       
         $row = mysqli_fetch_assoc($result1);
         
         $price_per_day=$row['price'];
         
         $total_price= $price_per_day*$no_of_adults + ($price_per_day*$no_of_children)/2;
         $fields[]=$price_per_day*$no_of_adults;   
     }

     if(empty($errors)){
         $tourist_id=mysqli_real_escape_string($connection,$_SESSION['id']);
         $guide_id=mysqli_real_escape_string($connection,$_SESSION['reservation_guide']);;
        $tourist_name= mysqli_real_escape_string($connection,$_POST['tourist_name']);
        $tourist_email=mysqli_real_escape_string($connection,$_POST['tourist_email']);
        $telephone_number=mysqli_real_escape_string($connection,$_POST['tourist_phone']);
        $no_of_adults=mysqli_real_escape_string($connection,$_POST['total_adults']);
        $no_of_children=mysqli_real_escape_string($connection,$_POST['total_children']);
        $arrival_date=mysqli_real_escape_string($connection,$_POST['arrival']);
        // $new_arrival_date = date("Y-m-d", strtotime($arrival_date));

        $departure_date=mysqli_real_escape_string($connection,$_POST['departure']);
        $notes=mysqli_real_escape_string($connection,$_POST['special_notes']);

        if(isset($_SESSION['reservation_package'])){
            $packageid=$_SESSION['reservation_package'];
            $has_package=1;
            $result= make_reservation_query($connection,$tourist_id,$guide_id,$tourist_name,$tourist_email,$telephone_number,$no_of_adults,$no_of_children,$arrival_date,$departure_date,$notes,$total_price,$has_package,$packageid);
            if($result){
              
             header('Location:/ceylontrek-3tier/controller/view_package_ad_controller.php?view_package='.$packageid.'&reservation=success');
         }
      
         else{
             $errors[]='Failed to modify the record.';
             header('Location: /ceylontrek-3tier/view/reservation.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
         }


        }//end of if
        else{
            $has_package=0;
            $tourpackageid=0;
            $result= make_reservation_query($connection,$tourist_id,$guide_id,$tourist_name,$tourist_email,$telephone_number,$no_of_adults,$no_of_children,$arrival_date,$departure_date,$notes,$total_price,$has_package,$packageid);
            if($result){
                print_r($result);
             header('Location:/ceylontrek-3tier/controller/view_guide_ad_controller.php?view_guide='.$guide_id.'&reservation=success');
         }
      
         else{
             $errors[]='Failed to modify the record.';
             header('Location: /ceylontrek-3tier/view/reservation.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
         }
        }//end of else
  
        
     }
  
  
        else{
           
         header('Location: /ceylontrek-3tier/view/reservation.php?'.http_build_query(array('param'=>$errors,'param1'=>$fields)));
     }
     
  
     }
  
     
  







?>