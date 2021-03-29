<?php session_start();

$rewlist=$_SESSION['reviewlist']; // get reviews details
$rate_1=$_SESSION['rate_1']; //get rating values
$guide_de=$_SESSION['guide_de'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>Tour_Guide_All_Reviews</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/GuideAllReviews.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/top_bar.css">
    <link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="Guide_All_Reviewsbody">

    <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

 <div class="wrapper">
           <!--guide details-->
      <div class="split_left" >
            <?php 
                foreach($guide_de as $ge){
            ?>
           <img src="<?php echo $ge['image_path']; ?>">
           <h3><?php echo $ge['first_name']." ".$ge['last_name']; ?></h3>
           <?php
                }
           ?>
        
      </div><!--split_left--> 

            
      <div class="box rating">
                
            <table>
                            
                                
                    <tr>
                        <div class="star 4">
                        <td>
                             <div class="star-container">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                             </div><!--star-container-->
                       </td>

                       <td>
                             <div class="bar-container">
                                <div class="bar-4"  style="width:<?php  echo $rate_1[3];?>px">
    
                                </div>
                             </div><!--bar-container-->
                        </td>
                        </div><!--star 4-->                      
                     </tr>





                    <tr>
                    <div class="star 3">
                        <td>
                              <div class="star-container">
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                              </div><!--star-container-->
                        </td>
 
                        <td>
                              <div class="bar-container" >
                                 <div class="bar-3" style="width:<?php  echo $rate_1[2];?>px">     
                                 </div>
                              </div><!--bar-container-->
                        </td>
                     </div><!--star 3-->                        
                    </tr>






                    <tr>
                        <div class="star 2">
                         <td>
                              <div class="star-container">
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                              </div><!--star-container-->
                        </td>
 
                        <td>
                              <div class="bar-container">
                                 <div class="bar-2" style="width:<?php  echo $rate_1[1];?>px" >
     
                                 </div>
                              </div><!--bar-container-->
                         </td>
                        </div><!--star 2-->                         
                    </tr>



                    <tr>
                        <div class="star 1">
                         <td>
                              <div class="star-container">
                                  <span class="fa fa-star checked"></span>                                
                              </div><!--star-container-->
                        </td>
 
                        <td>
                              <div class="bar-container">
                                 <div class="bar-1" style="width:<?php  echo $rate_1[0];?>px" >                                    
                                 </div>
                              </div><!--bar-container-->
                         </td>
                        </div><!--star 1-->                        
                    </tr>


                    
            </table>    
        </div><!--star_rating-->     
                   
    

       <div class="reviews">
            <?php 
                foreach($rewlist as $r){
            ?>
            <div class="box review">                  
                    <h3><?php echo $r['first_name']." ".$r['last_name']; ?></h3>
                    <p><?php echo $r['reviews']; ?></p>                   
              </div><!--box review-->
             
            <?php
                }
            ?>
                 
       </div><!--reviews-->
        <div class="reviewend"><?php include('../view/footer.php'); ?> </div>
      </div><!--wrapper-->
      
</body>
  
</html>