<html  lang="en">
    <head>
        <title>Tourist  Dashboard</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>

    <body class="body">
    <div class="dashnav"></div>
            <div class="section1"> 
            <?php include('../view/new_top_bar.php'); ?>
                <div class="side_bar">
                    <img src="../resources/img/logo2.png" class="dashlogo">
                    <img src="../resources/img/reviewimg.jpg" class="profile" >
                    
                    <form action="../controller/tourist_dashboard_controller.php" method="post">
                    <button class="edit" name="edit_profile"> <span>Edit Profile</span></button><br>
                    </form>

                    

                  <div class="sidebar-menu">
                    <ul>

                    <li>
                            <a href="touristDashboard.php">
                                <span class="menu-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                                <span class="menu-title">My Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="Inbox.php">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href="touristFavGuides.php">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Guides</span>
                            </a>
                        </li>


                        <li>
                            <a href="touristFavPackages.php">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Packages</span>
                            </a>
                        </li>

                        


                        <li>
                            <a href="upcomingTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Upcoming Tours</span>
                            </a>
                        </li>


                        <li>
                            <a href="touristPrevTours.php">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Previous Tours</span>
                            </a>
                        </li>

                        <li>
                            <a href="../controller/my_all_request_controller.php">
                                <span class="menu-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">My All Request</span>
                            </a>
                        </li>

                    </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->
             <div class="content">
                <div class="schedule">
                    <h1 >Welcome to Your CeylonTrek Profile</h1><br>
                   <p>This is your personalised profile. You can view your Favourite Guides, Favourite Packages, Upcoming Tours and Previous Tours.</p>
                   <p>To rate any Guide or Package, use your Previous Tours Tab. </p>
                   <p>For all the frequently asked questions, view our <a href="#">FAQ</a> Page or simply Contact CeylonTrek.</p>
                   <p>Heres is a Summary of your interaction with CeylonTrek.</p>

                   <table class="table-fill">
                                
                        <tbody class="table-hover">
                            <tr>
                                <td class="text-left">All Previous Tours with CeylonTrek</td>
                                <td class="text-left">5</td>
                            </tr>
                            <tr>
                                <td class="text-left">All Upcoming Tours with CeylonTrek</td>
                                <td class="text-left">1</td>
                            </tr>
                                
                            <tr>
                                <td class="text-left">Guides Reviewed</td>
                                <td class="text-left">2</td>
                            </tr>
                            <tr>
                                <td class="text-left">Packages Reviewed</td>
                                <td class="text-left">2</td>
                            </tr>

                        </tbody>
                    </table>
                 
                </div><!--schedule-->
          
                <div class="guidecalender">
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

                <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:260px"><i class="fa fa-credit-card" aria-hidden="true"></i>Make a Complain</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:260px; margin-top:20px"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
            </div> <!--content -->

            <div class="dashend">
        <?php include('../view/footer.php'); ?> </div>
        <script src="../resources/js/guide dashboard.js"></script>

    </div>
    </body>
</html>