<?php session_start();
$raddress=$_SESSION['rlist'];

?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>

<?php
   if($_GET['r_mail']){  // check the mail address empty or not
      
      $mail = mysqli_real_escape_string($connection,$_GET['r_mail']); //convert mail address 
      $d=get_search_recivers($connection,$mail); // select the details using mail
      $r_mail = mysqli_fetch_array($d,MYSQLI_ASSOC);     
      $_SESSION['mail']=$r_mail; // store in the session
      header('Location:/ceylontrek-3tier/view/chatwindow.php');
   }


   elseif($raddress){ // check session variable

      foreach($raddress as $relement){
         $d=get_search_recivers($connection,$relement['r_mail']);   
         if(!empty($d)){
            $rows = mysqli_num_rows($d);  // check number of rows in db table
            $columns = mysqli_num_fields($d);   // check number of column in db table
        
            for($i=0; $i < $rows; $i++){ 
                $r_mail = mysqli_fetch_array($d,MYSQLI_ASSOC);
                $r1[]=$r_mail;      
            }               
            $_SESSION['chatlist']=$r1;           
         }
         else{           
            header('Location:/ceylontrek-3tier/view/inbox.php');
         }
   }                
      header('Location:/ceylontrek-3tier/view/inbox.php');
   
   }else{
      $_SESSION['chatlist']='0';  //default value
      header('Location:/ceylontrek-3tier/view/inbox.php');
   }



?>