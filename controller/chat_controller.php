<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\chat_sql.php'); ?>

<?php 
    
    // checked user has been logged
    if(!isset($_SESSION['id'])){
        header('Location:/ceylontrek-3tier/view/login.php');
    }

         //get sender mail
        $s_id= mysqli_real_escape_string($connection,$_SESSION['id']);

         // get sender details
        $sender_details=get_sender_details($connection,$s_id);
       
        if ($sender_details){
            if (mysqli_num_rows($sender_details) == 1) {

                // user found retrieve data
                $result = mysqli_fetch_assoc($sender_details);

                // pass data
                $_SESSION['sid']=$result['id'];
                $_SESSION['first_name']=$result['first_name'];
				$_SESSION['last_name']=$result['last_name'];
                $_SESSION['email']=$result['email'];
                $_SESSION['image']=$result['image_path'];
                $_SESSION['level']=$result['level'];
				$path=$result['image_path'];
                
                /*if($path){   
                    header('Location:/ceylontrek-3tier/controller/chat_list_controller.php');        
					//header('Location:/ceylontrek-3tier/view/inbox.php?path='.$path.'');
				}
                else{
                    header('Location:/ceylontrek-3tier/controller/chat_list_controller.php');
                }*/
				header('Location:/ceylontrek-3tier/controller/chat_list_controller.php');
            }

           
        }

        
       