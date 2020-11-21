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

    
       
        //checking post button pressed
        if(isset($_POST['submit'])){
                  
            if (isset($_SESSION['id'])){

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
               
            $errors=array();
             // get tourist id 
            $tourist_id =mysqli_real_escape_string($connection,$_SESSION['id']);
            
            //get post created date and time
            $day_no=date('Y/m/d H:i:sa');
            
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
           header('Location:/ceylontrek-3tier/controller/tour_request_post_controller.php?failed to post'); 
          }           
      }

    }else{
      header('Location:/ceylontrek-3tier/controller/tour_request_post_controller.php?failed to post'); 
    }  
  
?>
<?php mysqli_close($connection);?>