<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Trek - Home</title>
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <img src="img/home/fish1.jpg" alt=""> -->
</head>

<body>
    <div class="container">

    <?php 
    if (!isset($_SESSION['id'])){ ?>
       <nav class="navbar"  style="background: rgba(0, 0, 0, 0.7); ">
       <ul>
           <!-- <li><a href="#home">Home</a></li> -->
           <li style=" padding: 0px; width:200px; height: 75px; margin-bottom: 0px; margin-right: 40px;margin-left: 3px; margin-top:0">
               <a href="homepage.php"><img src="../resources/img/logo2.png" alt=""></a>
           </li>
           <li style="margin-top: 45px; font-size:17px; margin-left:20px;margin-top:30px;"><a href="Guide_search_page.php">Tour Guides</a></li>
           <li style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="package_search_page.php">Tour Packages</a></li>
           <li class="request_tour" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
           <li style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
           <li class="travel_calendar" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="calendar.php">Travel Calendar</a></li>
       </ul>
       <button class="loginbutton login" type="button" onclick="window.location='../view/login.php'"><span>Login</span></button>
       <button class="loginbutton sign_up" type="button" onclick="window.location='../view/signup_selection_page.php'"><span>SignUp</span></button>
        </nav>

        <div class="mobnav" style="background: rgba(0, 0, 0, 0.7); ">
        <header >
             <a href="homepage.php"><img style=" padding: 0px; width:250px; height: 95px; margin-bottom: 0px; margin-right: 70px;margin-left: 40px; margin-top:0px" src="../resources/img/logo2.png" alt=""></a>
             <button class="dropbutton"style="width:40px; height:20px; marging-bottom:50px; margin-top:10px" onclick="(0)"><i class="fa fa-bars" aria-hidden="true"></i></button>      
        </header>
        <div class="dropdown">
            
            <ul class="moblist">                  
                
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="Guide_search_page.php">Tour Guides</a></li>
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="package_search_page.php">Tour Packages</a></li>
                <li class="request_tour" style="margin-top: 10px; font-size:17px; margin-left: 0px; margin-right:0px"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
                <li class="travel_calendar" style="margin-top: 10px; font-size:17px; margin-right:0px;margin-left: 0px"><a href="calendar.php">Travel Calendar</a></li>
                <div  style=" display:flex ">
                  <li><button class="loginbutton login" style="height:50px;" type="button" onclick="window.location='../view/login.php'"><span>Login</span></button> </li>
                   <li><button class="loginbutton sign_up" style="height:50px; " type="button" onclick="window.location='../view/signup_selection_page.php'"><span>SignUp</span></button></li>
                </div>
             </ul>
        </div>

        </div>

    <?php }else{ ?>
        <nav class="navbar"  style="background: rgba(0, 0, 0, 0.7); ">
       <ul>
           <!-- <li><a href="#home">Home</a></li> -->
           <li style=" padding: 0px; width:200px; height: 75px; margin-bottom: 0px; margin-right: 40px;margin-left: 3px; margin-top:0">
               <a href="homepage.php"><img src="../resources/img/logo2.png" alt=""></a>
           </li>
           <li style="margin-top: 45px; font-size:17px; margin-left:20px;margin-top:30px;"><a href="Guide_search_page.php">Tour Guides</a></li>
           <li style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="package_search_page.php">Tour Packages</a></li>
           <li class="request_tour" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
           <li style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
           <li class="travel_calendar" style="margin-top: 45px; font-size:17px; margin-left:-10px;margin-top:30px;"><a href="calendar.php">Travel Calendar</a></li>
       </ul>
            <div style="margin-right: 10px;">
                <i class="fa fa-user-circle fa-3x" aria-hidden="true" style="margin-top: 15px;margin-left: 20px ;margin-bottom:3px;color:white;"></i>
                <li style=" margin-top: 5px;
                        margin-right: 10px; 
                        text-decoration: none;
                        display:block;
                        width: 120%;
                       ">
                    <a href="/ceylontrek-3tier/controller/new_top_bar_controller.php" style="color: #f4f4f4;padding: 1px;text-decoration: none;text-transform: uppercase;"  onMouseOver="this.style.color='skyblue'" onMouseOut="this.style.color='#f4f4f4'">View Profile</a>
                </li>
            </div>

            <button onclick="window.location='/ceylontrek-3tier/controller/auth/logout_controller.php'" class="loginbutton sign_out" style="margin-right:50px; margin-left:20px; width:160px;"><span>Sign Out</span></button>
        </nav>

        <div class="mobnav" style="background: rgba(0, 0, 0, 0.7); ">
        <header >
             <a href="homepage.php"><img style=" padding: 0px; width:250px; height: 95px; margin-bottom: 0px; margin-right: 70px;margin-left: 40px; margin-top:0px" src="../resources/img/logo2.png" alt=""></a>
             <button class="dropbutton"style="width:40px; height:20px; marging-bottom:50px; margin-top:10px" onclick="(0)"><i class="fa fa-bars" aria-hidden="true"></i></button>      
        </header>
        <div class="dropdown">
            
            <ul class="moblist">                  
                
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="Guide_search_page.php">Tour Guides</a></li>
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px "><a href="package_search_page.php">Tour Packages</a></li>
                <li class="request_tour" style="margin-top: 10px; font-size:17px; margin-left: 0px; margin-right:0px"><a href="../controller/tour_request_post_controller.php">Request a Tour</a></li>
                <li style="margin-top: 10px; font-size:17px;margin-left: 0px; margin-right:0px"><a href="SmartSearchCriteriaSelection.php">Smart Search</a></li>
                <li class="travel_calendar" style="margin-top: 10px; font-size:17px; margin-right:0px;margin-left: 0px"><a href="calendar.php">Travel Calendar</a></li>
                <div  style=" display:flex ">
                <li style="height: 60px" ><button onclick="window.location='/ceylontrek-3tier/controller/auth/logout_controller.php'" class="loginbutton sign_out" style="margin-top:10px; margin-left:20px;"><span>Sign Out</span></button></li>
                </div>
             </ul>
        </div>

        </div>
        
    <?php } 
    ?>
       
        

        

        <section id="home">
            <h1 style="font-family: Pacifico;">Ceylon Trek</h1>
            <p class="lead">Travel Sri Lanka</p>
        </section>
        <section id="tourGuide">

            <h1>Tour Guides</h1>
            <p class="lead" style="float: left;">Sri Lankans are world-renowned for their hospitality. So are our Tour Guides.<br> Ceylon Trek offers the best and the most experienced Tour Guides available in Sri Lanka. <br>For your safety, we choose only the registered Tour Guides of the
                SriLankan Tourism Beaurae.<br> Reserve our Guides to get the most out of Sri Lanka. </p>
            <button class="loginbutton" style="width: 300px; margin-left: 350px; margin-top: 10px; font-size: 1.25rem; height: 70px;"><span><a style="color:white; text-decoration:none;" href='Guide_search_page.php'>Explore Tour Guides</a></span></button>




        </section>
        <section id="tourPackage">
            <h1>Tour Packages</h1>
            <p class="lead" style="float: left;">Sri Lanka is a small island packed with a lot of places to travel.<br> Ceylon Trek provides a variety of Tour Packages which will get where you want.<br> Choose from a variety of tour packages from One day Tours to Round trip Tours offered
                by our Tour Guides to get the most of this little island packed with a lot of surprises. </p>
            <button class="loginbutton" style="width: 300px; margin-left: 650px; margin-top: 10px; font-size: 1.25rem; height: 70px; "><span><a style="color:white; text-decoration:none;" href='package_search_page.php'>Explore Tour Packages</a></span></button>

        </section>
        <section id="requestTour">
            <h1>Request a Tour</h1>
            <p class="lead" style="float: left;">Not happy with the Tour Packages offered?<br> Ceylon Trek got you covered!<br> Simply post a request for a Tour and let all our Tour Guides know how you want to<br> spend your holiday in Paradise and wait for them to come up with the best
                itinerary for you. </p>
            <button class="loginbutton" style="width: 250px; margin-left: 350px; margin-top: 10px; font-size: 1.25rem; height: 70px; "><span><a style="color:white; text-decoration:none;" href='tour_request_post.php'>Request a Tour</a></span></button>

        </section>
        <section id="smartSearch">
            <h1>Smart Search</h1>
            <p class="lead" style="float: left;">Don't know where to travel?<br> We at Ceylon Trek are ready to help.<br> Simply choose your favourite activities and hobbies<br> and our Smart Search will suggest where exactly you belong in paradise !!! </p>
            <button class="loginbutton" style="width: 250px; margin-left: 650px; margin-top: 10px; font-size: 1.25rem; height: 70px; "><span><a style="color:white; text-decoration:none;" href='SmartSearchCriteriaSelection.php'>Smart Search</a></span></button>

        </section>
        <section id="travelCalendar">
            <h1>Travel Calendar</h1>
            <p class="lead" style="float: left;">Paradise isn't Paradise if it isn't happening!!<br> Use our travel calendar to choose the right days to travel to Sri Lanka to get the most <br>out of your visit. Because being a multi-ethnic, multi-cultural country, <br>Sri Lanka has a festival
                for everyone! </p>
            <button class="loginbutton" style="width: 250px; margin-left: 350px; margin-top: 10px; font-size: 1.25rem; height: 70px; "><span><a style="color:white; text-decoration:none;" href='calendar.php'>Travel Calendar</a></span></button>

        </section>
        <div class="dashend"> <?php include('../view/footer.php'); ?> </div>

    </div>

    

</body>

</html>