<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>
<?php
   
   $r1=array(); // define the array for store the set of emails


    // get the sender mail
    $s_mail= mysqli_real_escape_string($connection,$_SESSION['email']);

    // select the all recivers
    $recivers=get_reciver_mail($connection,$s_mail);

    if(!empty($recivers)){ // check data set empty or not 
        $rows = mysqli_num_rows($recivers);  // check number of rows in db table
        //$columns = mysqli_num_fields($recivers);   // check number of column in db table



        for($i=0; $i < $rows; $i++){ 
            $r_mail = mysqli_fetch_array($recivers,MYSQLI_ASSOC);
            $r1[]=$r_mail;      //store the all recivers email address in array one by one 
        }
        $_SESSION['rlist']=$r1; // that array store in the  session 
        header('Location:/ceylontrek-3tier/controller/chatwindow_controller.php'); 
       
   }else{
       header('Location:/ceylontrek-3tier/controller/chatwindow_controller.php');
   }
?>