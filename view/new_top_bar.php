
    <div class="container1">
        <nav class="navbar" style="background: #2f375b;">
            <header>
                  <a href="homepage.php"><img style=" padding: 0px; width:230px; height: 95px; margin-bottom: 0px; margin-right: 0px;margin-left: 5px; margin-top:5px" src="../resources/img/logo2.png" alt=""></a>
            </header>
            <ul class="list" style="width:60%">
                <!-- <li><a href="#home">Home</a></li> -->
                
                <li class="tour_guide" style="margin-top: 45px; font-size:17px; margin-left:0px"><a href="Guide_search_page.php">Tour Guides</a></li>
                <li class="tour_package" style="margin-top: 45px; font-size:17px; margin-left:-10px"><a href="package_search_page.php">Tour Packages</a></li>
                <li class="request_tour" style="margin-top: 45px; font-size:17px; margin-left:-10px"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                <li class="smart_search" style="margin-top: 45px; font-size:17px; margin-left:-10px"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
                <li class="travel_calendar" style="margin-top: 45px; font-size:17px; margin-left:-10px; margin-right:0px"><a href="calendar.php">Travel Calendar</a></li>
            </ul>
            <div>
                <i class="fa fa-user-circle fa-3x" aria-hidden="true" style="margin-top: 15px;margin-left: 25px ;margin-bottom:3px;color:white;"></i>
                <li style=" margin-top: 5px;
                        margin-right: 10px; 
                        text-decoration: none;
                        display:block;
                        width: 100%;
                       ">
                    <a href="/ceylontrek-3tier/controller/new_top_bar_controller.php" style="color: #f4f4f4;padding: 1px;text-decoration: none;text-transform: uppercase;" href="#contact" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#f4f4f4'">View Profile</a>
                </li>
            </div>

            <button onclick="window.location='/ceylontrek-3tier/controller/auth/logout_controller.php'" class="loginbutton sign_out" style="margin-right:50px; margin-left:20px"><span>Sign Out</span></button>
            
       
       
        </nav>

          
        <div class="mobnav" style="background: #2f375b;">
            <header >
                 <a href="homepage.php"><img style=" padding: 0px; width:250px; height: 95px; margin-bottom: 0px; margin-right: 70px;margin-left: 45px; margin-top:0px" src="../resources/img/logo2.png" alt=""></a>
                 <button class="dropbutton"style="width:40px; height:20px; marging-bottom:50px; margin-top:10px" onclick="(0"><i class="fa fa-bars" aria-hidden="true"></i></button>      
            </header>
            <div class="dropdown">
                
                <ul class="moblist">                  
                    <li style="display:flex margin-top:20px">
                        <li class="fa fa-user-circle fa-2x" aria-hidden="true" style="margin-top: 2px;margin-left: 45px ;margin-bottom:15px;"></i>
                            
                        <a style="color: #f4f4f4;padding: 1px;text-decoration: none;text-transform: uppercase; margin-top:5px; margin-left:10px;font-size:18px" href="#contact" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#f4f4f4'">View Profile</a>
                        </li>
                        
                    </li>
                    <li class="tour_guide" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="Guide_search_page.php">Tour Guides</a></li>
                    <li class="tour_package" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="package_search_page.php">Tour Packages</a></li>
                    <li class="request_tour" style="margin-top: 10px; font-size:17px; margin-left: 0px; margin-right:0px"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                    <li class="smart_search" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
                    <li class="travel_calendar" style="margin-top: 10px; font-size:17px; margin-right:0px;margin-left: 0px"><a href="calendar.php">Travel Calendar</a></li>
                    <li style="height: 60px" ><button onclick="window.location='/ceylontrek-3tier/controller/auth/logout_controller.php'" class="loginbutton sign_out" style="margin-top:10px; margin-left:20px;"><span>Sign Out</span></button></li>
                 </ul>
            </div>

         </div>

       
        
    </div>
     <!-- container -->
   
