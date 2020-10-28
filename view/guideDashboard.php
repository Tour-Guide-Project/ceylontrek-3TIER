<html  lang="en">
    <head>
        <title>Guide dash board</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../resources/css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../resources/css/top_bar.css">
        <link rel="stylesheet" href="../resources/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    
        <div class="section1"> 
            <?php include('../view/new_top_bar.php'); ?>
                
            <div class="side_bar">
                <img src="../resources/img/logo2.png" class="dashlogo">
                <img src="../resources/img/reviewimg.jpg" class="profile" >
                <form action="../controller/guide_dashboard_controller.php" method="post">
                    <button class="edit" name="edit_profile"><span>Edit Profile</span> </button><br>
                </form>
                  
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <span class="menu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Create tour package</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">View My Tour Packages</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Upcoming Tours</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <span class="menu-title">Previous Tours</span>
                            </a>
                        </li>
                    </ul>
                </div><!--sidebar-manu-->        
            </div><!--side_bar-->

            <div class="content">
                <div class="schedule">
                    <h1>CeylonTrek Guide Dashboard</h1><br>
                    
                    <table class="table-fill">
                        <tbody class="table-hover">
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
                        <button class="cobutton" style="width:275px"><i class="fa fa-credit-card" aria-hidden="true"></i>Pay System Fee</button>
                    </div>
                    <div>
                        <button class="cobutton" style="width:275px; margin-top:20px"><i class="fa fa-phone  aria-hidden="true"></i>Contact Ceylon Treck</button>
                    </div>
                </div><!--corner_button-->
            </div>
                
            <div class="dashend"> <?php include('inc/footer.php'); ?> </div>
            <script src="js/guide dashboard.js"></script>
        </div>
    </body>
</html>