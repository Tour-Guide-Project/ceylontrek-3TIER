<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>

<?php
    
    if(!isset($_SESSION['id'])){
        header('Location:/ceylontrek-3tier/view/login.php');
    }


    $outgoing_mail=mysqli_real_escape_string($connection, $_POST['outgoing_mail']);
    $incoming_mail=mysqli_real_escape_string($connection, $_POST['incoming_mail']);
    $message=mysqli_real_escape_string($connection, $_POST['message']);
    
    if(!empty($message)){
        $day=date('Y/m/d ');
        $time=date('Y/m/d H:i:sa');
        sent_message($connection,$time,$day,$outgoing_mail,$incoming_mail,$message);
        header('Location:/ceylontrek-3tier/view/chatwindow.php');
    }
?>