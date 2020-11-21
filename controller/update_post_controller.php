<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?php
     //checking if a user is logged in
	if (!isset($_SESSION['id'])) {
		header('Location:/ceylontrek-3tier/view/login.php');	
     }
    
     $u_result=array();

          // getting the user information
        //   $id = mysqli_real_escape_string($connection,$_SESSION['id']);
     
           if(isset($_GET['post_id'])){
               $post_id=mysqli_real_escape_string($connection,$_GET['post_id']);
              // print_r($post_id);
               $result=get_post_details($connection,$post_id);
               if($result){
                    if (mysqli_num_rows($result) == 1){

                    // found retrieve data
                    $u_result = mysqli_fetch_assoc($result);
                   //  print_r($u_result);
                     
                    // pass data
                    $_SESSION['u_post_id']=$u_result['post_id'];
                    $_SESSION['u_title']=$u_result['title'];
                    $_SESSION['u_requested_date']=$u_result['requested_date'];
                    $_SESSION['u_no_of_days']=$u_result['no_of_days'];
                    $_SESSION['u_places']=$u_result['places'];
                    $_SESSION['u_activities']=$u_result['activities'];
                  //  print_r($_SESSION['u_post_id']);

                    header('Location:/ceylontrek-3tier/view/update_post.php');
                    
               }else {
                   // user not found,redirect users page
                    header('Location:/ceylontrek-3tier/controller/my_all_request_controller.php?err=post_not_found');
                }
               
               }
          }

         
         
         

          //checking post button pressed
     if(isset($_POST['update_now'])){
           
     //if(isset($_POST['post_id'])){
          $errors=array();

           $tourist_id =mysqli_real_escape_string($connection,$_SESSION['id']);
           $post_id=mysqli_real_escape_string($connection,$_POST['post_id']);

          // print_r($post_id);
            if(!isset($_POST['title']) || strlen(trim($_POST['title']))<1){
               $errors[]='title is requried/Invalid!';
            }
            if(!isset($_POST['places']) || strlen(trim($_POST['places']))<1){
               $errors[]='places is requried/Invalid!';
            }
            if(!isset($_POST['no_of_days']) || strlen(trim($_POST['no_of_days']))<1){
               $errors[]='number is requried/Invalid!';
            }
            //check number has only 0-9
            elseif(preg_match(("/[^0-9]/"), $_POST['no_of_days'])){
               $errors[]='Invalid number';
            }
            if(!isset($_POST['activities']) || strlen(trim($_POST['activities']))<1){
               $errors[]='activities is requried/Invalid!';
            }
           //get post created date and time
           $day_no=date('Y/m/d H:i:sa');
           
           //Assign data to varibles
           $title=$_POST['title'];
           $activities=$_POST['activities'];
           $places=$_POST['places'];
           $no_of_days=$_POST['no_of_days'];
           $requested_date= $_POST['requested_date'];
           //print_r($title);


          //add post details to database
          if(empty($errors)){ 

           // no errors found .. addding record..
           $title= mysqli_real_escape_string($connection,$_POST['title']);          
           $activities= mysqli_real_escape_string($connection,$_POST['activities']);
           $places= mysqli_real_escape_string($connection,$_POST['places']);
           $no_of_days= mysqli_real_escape_string($connection,$_POST['no_of_days']);
           $requested_date= mysqli_real_escape_string($connection,$_POST['requested_date']);

           
           $result_request1=update_request($connection,$post_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date);


           // After add the post redirect to tour_request_post page
           if($result_request1){                     
               header('Location:/ceylontrek-3tier/controller/my_all_request_controller.php?update_post=true'); 
               //if query was failed
           }else{
                $errors[]="Query failed";
           }

      }else{
          header('Location:/ceylontrek-3tier/controller/my_all_request_controller.php?database_query_failed');
      }
  /*   }else{
          header('Location:/ceylontrek-3tier/controller/my_all_request_controller.php?update_post=true');
     }*/
    }
  

?>