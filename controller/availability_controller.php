<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\reservation_sql.php'); ?>

<?php

$guide_id=$_SESSION['current_guide_id'];

    if(isset($_POST['check_availability'])){
        
        $arrival=$_POST['arrivaldate'];
        $arrival=str_replace('/', '-', $arrival);
        $arrival_date=date("Y-m-d", strtotime($arrival));
        $no_of_tourists=$_POST['no_of_tourists'];
        $departure=$_POST['departuredate'];
        $departure=str_replace('/', '-', $departure);
        $departure_date=date("Y-m-d", strtotime($departure));
      
        $result = check_availability($connection, $guide_id,$arrival_date, $departure_date, $no_of_tourists);
        print_r($result);
        if(mysqli_num_rows($result)>0){
        
            header('Location: /ceylontrek-3tier/controller/view_guide_ad_controller.php?view_guide='.$guide_id.'&available=false'); 
        }
        else{
            // $info['guide_id']=$guide_id;
           $_SESSION['reservation_guide']=$guide_id;
            header('Location:/ceylontrek-3tier/controller/reservation_controller.php?view_guide='.$guide_id.'');
            
           
        }
    }


    if(isset($_POST['check_availability_package'])){
        $package_id=$_SESSION['current_package_id'];
        $arrival=$_POST['arrivaldate'];
        $arrival_date=strtotime($arrival_date);
        $no_of_tourists=$_POST['no_of_tourists'];
        $departure=$_POST['departuredate'];
        $departure_date=strtotime($departure);
        $result = check_availability($connection, $guide_id,$arrival_date, $departure_date, $no_of_tourists);
        
        if(mysqli_num_rows($result)>0){
        
            header('Location: /ceylontrek-3tier/controller/view_package_ad_controller.php?view_package='.$package_id.'&available=false'); 
        }
        else{
            // $info['guide_id']=$guide_id;
           $_SESSION['reservation_guide']=$guide_id;
           $_SESSION['reservation_package']=$package_id;
            header('Location:/ceylontrek-3tier/controller/reservation_controller.php?view_guide='.$guide_id.'');
            
           
        }
    }
?>