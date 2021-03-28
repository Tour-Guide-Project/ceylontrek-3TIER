<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\cancellation_sql.php'); ?>

<?php
    $reservation_id='';
    if(isset($_GET['cancel'])){
        $reservation_id=$_GET['cancel'];
        $result=get_reservation_info($connection,$reservation_id);
        $info=mysqli_fetch_array($result);
        header('Location: /ceylontrek-3tier/view/cancellation.php?'.http_build_query(array('param1'=>$info)));
    }

    if(isset($_POST['submit_cancellation_tourist'])){
        $reservation_id=$_POST['submit_cancellation_tourist'];
        $result=get_reservation_info($connection,$reservation_id);
        $info=mysqli_fetch_array($result);
        $guide_id=$info['guide_id'];
        $tourist_id=$info['tourist_id'];
        $cancel_guide='';
        $cancel_tourist='';
        if($_SESSION['level']=="tourist"){
            $cancel_guide=0;
            $cancel_tourist=1;
        }
        elseif($_SESSION['level']){
            $cancel_guide=1;
            $cancel_tourist=0;
        }

       
        $viewed=0;
        $reason=$_POST['reason'];
     
        $result1=update_reservation($connection,$reservation_id);
        $result2=enter_cancellation_info($connection,$reservation_id,$guide_id,$tourist_id,$cancel_guide,$cancel_tourist,$viewed,$reason);
        if($result1 && $result2){
           if($_SESSION['level']=="tourist"){
            header('Location: /ceylontrek-3tier/controller/upcoming_tours_controller.php');
           }
           elseif($_SESSION['level']=="tourguide"){
            header('Location: /ceylontrek-3tier/controller/guide_upcoming_tour_controller.php');
           }
        }
    }

?>