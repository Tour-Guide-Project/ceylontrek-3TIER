<?php session_start();?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\request_post_sql.php'); ?>

<?php 

       //check the user has been logged into the website   
  // if (isset($_GET['p_create'])){     
       if (!isset($_SESSION['id'])) {
          header('Location:/ceylontrek-3tier/view/login.php');
         }
    //  }

    
       $errors=array();
        //checking post button pressed
        if(isset($_POST['submit'])){

            //get post created date and time
            $day_no=date('Y/m/d H:i:sa');
                  
            if (isset($_SESSION['id'])&& $_SESSION['level']=='tourist'){

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
               
           
             // get tourist id 
            $tourist_id =mysqli_real_escape_string($connection,$_SESSION['id']);
            
            
            
           //Assign data to varibles
           $title=$_POST['title'];
           $activities=$_POST['activities'];
           $places=$_POST['places'];
           $no_of_days=$_POST['no_of_days'];
           $requested_date= $_POST['requested_date'];
           

           //add post details to database
         if(empty($errors)){ 

            // no errors found .. addding record..
            $title= mysqli_real_escape_string($connection,$_POST['title']);          
            $activities= mysqli_real_escape_string($connection,$_POST['activities']);
            $places= mysqli_real_escape_string($connection,$_POST['places']);
            $no_of_days= mysqli_real_escape_string($connection,$_POST['no_of_days']);
            $requested_date= mysqli_real_escape_string($connection,$_POST['requested_date']);

             
            
            $result_request= request($connection,$tourist_id,$title,$activities,$places,$day_no,$no_of_days,$requested_date);

                      // After add the post redirect to tour_request_post page
                     if($result_request){
                        header('Location:/ceylontrek-3tier/controller/tour_request_post_controller.php?add_post=true'); 
                     //if query was failed
                     }else{
                        $errors[]="failed to post";
                     }
          }else{
           header('Location:/ceylontrek-3tier/view/tour_request_post.php?'.http_build_query(array('param'=>$errors))); 
          }           
      }else{
         header('Location:/ceylontrek-3tier/controller/tour_request_post_controller.php?'); 
      }

    }else{
      header('Location:/ceylontrek-3tier/controller/tour_request_post_controller.php?failed to post'); 
    }  
  
?>
<?php mysqli_close($connection);?>