<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\reservation_sql.php'); ?>

<?php

$guide_id=$_SESSION['current_guide_id'];
    if(isset($_POST['check_availability'])){
        $arrival_date=$_POST['arrivaldate'];
        $no_of_tourists=$_POST['no_of_tourists'];
        $departure_date=$_POST['departuredate'];
        $result = check_availability($connection, $guide_id,$arrival_date, $departure_date, $no_of_tourists);
        
        if(mysqli_num_rows($result)>0){
        
            header('Location: /ceylontrek-3tier/controller/view_guide_ad_controller.php?view_guide='.$guide_id.'&available=false'); 
        }
        else{
            // $info['guide_id']=$guide_id;
           $_SESSION['reservation_guide']=$guide_id;
            header('Location:/ceylontrek-3tier/controller/reservation_controller.php?view_guide='.$guide_id.'');
            
           
        }
    }
?>