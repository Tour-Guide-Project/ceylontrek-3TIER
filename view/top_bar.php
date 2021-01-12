
  
    <div class="container">
        <nav class="navbar" style="background: #2f375b;">
            <ul>
                <!-- <li><a href="#home">Home</a></li> -->
                <li style=" padding: 0px; width:200px; height: 75px; margin-bottom: 0px; margin-right: 40px;margin-left: 3px; margin-top:0">
                    <a href="homepage.php"><img src="../resources/img/logo2.png" alt=""></a>
                </li>
                <li class="tour_guide" style="margin-top: 45px; font-size:17px; margin-left:20px;margin-top:30px;"><a href="Guide_search_page.php">Tour Guides</a></li>
                <li class="tour_package" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="package_search_page.php">Tour Packages</a></li>
                <li class="request_tour" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                <li class="smart_search" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="../controller/SS_criteria_selection_controller.php">Smart Search</a></li>
                <li class="travel_calendar" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="calendar.php">Travel Calendar</a></li>
            </ul>
            <button class="loginbutton login" type="button" onclick="window.location='../view/login.php'"><span>Login</span></button>
            <button class="loginbutton sign_up" type="button" onclick="window.location='../view/signup_selection_page.php'"><span>SignUp</span></button>
        </nav>

        <div class="mobnav" style="background: #2f375b; ">
            <header >
                 <a href="homepage.php"><img style=" padding: 0px; width:250px; height: 95px; margin-bottom: 0px; margin-right: 70px;margin-left: 40px; margin-top:0px" src="../resources/img/logo2.png" alt=""></a>
                 <button class="dropbutton"style="width:40px; height:20px; marging-bottom:50px; margin-top:10px" onclick="(0)"><i class="fa fa-bars" aria-hidden="true"></i></button>      
            </header>
            <div class="dropdown">
                
                <ul class="moblist">                  
                    <li style="display:flex; margin-top:20px;">
                        <li class="fa fa-user-circle fa-2x" aria-hidden="true" style="margin-top: 2px;margin-left: 45px ;margin-bottom:15px;"></i>
                            
                        <a style="color: #f4f4f4;padding: 1px;text-decoration: none;text-transform: uppercase; margin-top:5px; margin-left:10px;font-size:18px" href="#" onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#f4f4f4'">View Profile</a>
                        </li>
                        
                    </li>
                    <li class="tour_guide" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="Guide_search_page.php">Tour Guides</a></li>
                    <li class="tour_package" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="package_search_page.php">Tour Packages</a></li>
                    <li class="request_tour" style="margin-top: 10px; font-size:17px; margin-left: 0px; margin-right:0px"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                    <li class="smart_search" style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px"><a href="../controller/SS_criteria_selection_controller.php">Smart Search</a></li>
                    <li class="travel_calendar" style="margin-top: 10px; font-size:17px; margin-right:0px;margin-left: 0px"><a href="calendar.php">Travel Calendar</a></li>
                    <div  style=" display:flex ">
                      <li><button class="loginbutton login" style="height:50px;" type="button" onclick="window.location='../view/login.php'"><span>Login</span></button> </li>
                       <li><button class="loginbutton sign_up" style="height:50px; " type="button" onclick="window.location='../view/signup_selection_page.php'"><span>SignUp</span></button></li>
                    </div>
                 </ul>
            </div>

         </div>


        
    </div>
    <!-- container -->
