<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\review_rate_sql.php'); ?>

<?php

if (!isset($_SESSION['id'])) {
    header('Location:/ceylontrek-3tier/view/login.php');
   }


   $errors=array();

   //if (isset($_SESSION['id'])&& $_SESSION['level']=='tourist'){
  
     
     if(isset($_POST['save'])){

        $rate= mysqli_real_escape_string($connection,$_POST['rate']);
        $review= mysqli_real_escape_string($connection,$_POST['review']);  
        $tourist_id =mysqli_real_escape_string($connection,$_SESSION['id']);
        $guide_id=mysqli_real_escape_string($connection,$_POST['guide_id']);
        $reservation_id=mysqli_real_escape_string($connection,$_POST['reservation_id']);


        $result=write_rate_review($connection,$guide_id,$tourist_id,$reservation_id,$review,$rate);
     
       
        header('Location:/ceylontrek-3tier/controller/previous_tours_controller.php');
        

     }

   //}
?>
