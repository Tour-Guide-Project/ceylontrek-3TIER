<?php session_start();?>
<html  lang="en">
    <head>
        <title>Guide dash board</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/new_top_bar.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/my_all_request.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <script type="text/javascript" src="../resources/js/jquery.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    
        <div class="section1"> 
        <?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

<div id="all" >
                
            
               
              <?php

                    include('../view/guide_side_bar.php');
            

             ?>
            
            <div class="content">
                <div class="schedule">
                    <h1>CeylonTrek Guide Dashboard</h1><br>
                    
                    <table class="table-fill">
                        <tbody class="table-hover">
                        <tr>
                                <td class="text-left">Guide Profile Status</td>
                                <td class="text-left">Active</td>
                            </tr>
                            <tr>
                                <td class="text-left">Tours in This Month</td>
                                <td class="text-left">5</td>
                            </tr>
                            <tr>
                                <td class="text-left">Earnings in This Month</td>
                                <td class="text-left">$ 800.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">All time Tours</td>
                                <td class="text-left">140</td>
                            </tr>
                                <tr>
                                <td class="text-left">Total Earnings</td>
                                <td class="text-left">$ 10,000.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">All Ratings</td>
                                <td class="text-left">140</td>
                            </tr>
                            <tr>
                                <td class="text-left">All Reviews</td>
                                <td class="text-left">120</td>
                            </tr>
                            <tr>
                                <td class="text-left">Due System Payment</td>
                                <td class="text-left">$ 80</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--schedule-->
          

                <div class="right_side">
                    <div class="notify">
                        <div class="circle" id="circle"></div>
                        <i id="bell" class="bell fa fa-bell fa-2x" aria-hidden="true"></i>
                    </div> 
                    <!-- bell-icon -->

                    <div class="dropdown" id="dropdown">
                        <div id="myDropdown" >
                           

                        </div>
                    </div>
                    <!-- drop down list -->

                <div class="guidecalender" id="guidecalender">
                    <div class="month">
                        <i class="fa fa-caret-left prev" aria-hidden="true"></i>
                        <div class="date"><h2></h2><h3></h3><p></p></div>
                        <i class="fa fa-caret-right next" aria-hidden="true"></i>
                    </div><!--month-->  
                    
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div><!--weeekdays-->
                             
                    <div class="days">
                              
                    </div><!--days-->
                </div><!--guidecalender-->
                </div>
                <!-- right_side -->

                <div class="corner_buttons">
                    <div>
                        <button class="cobutton" type="button" style="width:260px" onclick="openForm()"><i class="fa fa-credit-card" aria-hidden="true"></i>Make a Complain</button>
                    </div>
                    <div>
                        <button class="cobutton" style="width:275px"><i class="fa fa-credit-card" aria-hidden="true"></i>Pay System Fee</button>
                    </div>
                    <div>
                        <button class="cobutton" style="width:275px; "><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                    </div>
                </div><!--corner_button-->
            </div>

</div>


<!-- //complain popup form -->
	<div class="form-popup" id="myForm">
	    <form action="../controller/complain_controller.php" class="form-container" method="post">
			   <h1>Make Your Complain</h1>
			   <?php
				if(isset($_GET['param'])){
                    $errors=$_GET['param'];
				    foreach ($errors as $error) {
					    echo '<p class="error" id="errors" style="color:red ; height:10px;margin:10px">'.$error.'</p>';
				    }
			    }
			   ?>
			   
               <div>
			        <label  for="title"><b>Title :</b></label>
                    <input type="text" placeholder="Enter any Title for your complain here.." name="title">
			   </div>
			   
			

               <label for="details"><b>Enter Your Complain :</b></label>
    		   <textarea rows = "4" cols = "20" name = "complains" style="resize: vertical;height:100px;" placeholder="Enter Your complain here..."></textarea>
    		 <button type="submit" class="btn" name="submit_tourguide" id="submit" onclick="return confirm('If you not fill the any field , you have to fill whole form again.please check the form.  Submit your complain?');"  >Submit</button>
    		<button  class="btn cancel" type="button" onclick="closeForms()">Cancel</button>
  		</form>
	</div>

	<script>
     function openForm() {   
         document.getElementById('myForm').style.display = 'block';
         document.getElementById('all').classList.add("all");
     }
     if(document.getElementById('errors')){
        document.getElementById('myForm').style.display = 'block';
         document.getElementById('all').classList.add("all");
     }
   
     function closeForms() {
         document.getElementById('myForm').style.display = "none";
         document.getElementById('all').classList.remove("all");
     }
     </script>



                
    <div class="dashend"> 
       <?php include('../view/footer.php'); ?>
    </div>
         
    </body>

    <script src="../resources/js/guide dashboard.js"></script>
    <script type="text/javascript" src="../resources/js/notifications_tourguide.js"></script>
</html>