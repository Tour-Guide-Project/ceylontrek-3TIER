<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>
<?php

      if(!isset($_SESSION['id'])){
        header('Location:/ceylontrek-3tier/view/login.php');
    }


    $outgoing_mail=$_SESSION['email'];
    $incoming_mail=mysqli_real_escape_string($connection, $_POST['incoming_mail']);
    $output="";

    $all_msgs=get_messages($connection, $outgoing_mail,$incoming_mail);
    
    if(mysqli_num_rows($all_msgs) > 0){
        while($row = mysqli_fetch_assoc($all_msgs)){
            if($row['s_mail'] === $outgoing_mail){
                $output .= '<div class="chat outgoing">
                               <div class="cdetails">
                                 <p> '. $row['msg'] .'</p>
                               </div>
                           </div>';
            }else{
                $output .= '<div class="chat incoming">
                             
                             <div class="cdetails">
                                <p>'. $row['msg'] .'</p>
                            </div>
                           </div>';

            }
        }
          echo  $output;
    }
?>