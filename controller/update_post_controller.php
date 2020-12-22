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
                 

                    header('Location:/ceylontrek-3tier/view/update_post.php');
                    
               }else {
                   // user not found,redirect users page
                    header('Location:/ceylontrek-3tier/controller/my_all_request_controller.php?err=post_not_found');
                }
               
               }
          }

    //checking post button pressed
     if(isset($_POST['update_now'])){
           //  print_r($p_id);

          $errors=array();

           //get post created date and time
           $day_no=date('Y/m/d H:i:sa');
                  
       
              if(empty($_POST['title']) ){
                 $errors[]='* Title is requried/Invalid!';
              }
              if(empty($_POST['places']) ){
                 $errors[]='* Places is requried/Invalid!';
              }
              if(empty($_POST['requested_date']) ){
                 $errors[]='* Requested date is requried';
              }else{
                 if($_POST['requested_date']>$day_no){
                    $errors[]='* invalid';
                 }
              }
              if(empty($_POST['no_of_days']) ){
                 $errors[]='* Number of days is requried!';
              }
              //check number has only 0-9
              elseif(preg_match(("/[^0-9]/"), $_POST['no_of_days'])){
                 $errors[]='*please use the  0-9 number only for number of days';
              }
              if(empty($_POST['activities']) ){
                 $errors[]='* activities is requried/Invalid!';
              }
              
           //Assign data to varibles
           $post_id=$_POST['p_id'];
           $title=$_POST['title'];
           $activities=$_POST['activities'];
           $places=$_POST['places'];
           $no_of_days=$_POST['no_of_days'];
           $requested_date= $_POST['requested_date'];
           //print_r($title);


          //add post details to database
          if(empty($errors)){ 

           // no errors found .. addding record..
           $post_id= mysqli_real_escape_string($connection,$_POST['p_id']);
           $title= mysqli_real_escape_string($connection,$_POST['title']);          
           $activities= mysqli_real_escape_string($connection,$_POST['activities']);
           $places= mysqli_real_escape_string($connection,$_POST['places']);
           $no_of_days= mysqli_real_escape_string($connection,$_POST['no_of_days']);
           $requested_date= mysqli_real_escape_string($connection,$_POST['requested_date']);

           
           $result_request1=update_request($connection,$post_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date);
          

           // After add the post redirect to tour_request_post page
           if($result_request1){                     
            $_SESSION['u_title']=$_POST['title'];
            $_SESSION['u_places']=$_POST['places'];
            $_SESSION['u_no_of_days']=$_POST['no_of_days'];
            $_SESSION['u_requested_date']=$_POST['requested_date'];
            $_SESSION['u_activities']=$_POST['activities'];
            $updated='Update succsessfuly';
            header('Location:/ceylontrek-3tier/view/afterupdatedpost.php?updated');
               //if query was failed
           }else{
            header('Location:/ceylontrek-3tier/view/update_post.php?Not_updated');
           }

      }else{
         header('Location:/ceylontrek-3tier/view/update_post.php? '.http_build_query(array('param'=>$errors)));
      }
  
    }
   

?>