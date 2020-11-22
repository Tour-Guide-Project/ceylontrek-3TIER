<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Complains-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/complains.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:none;">
<?php 
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 

	<div class="side_bar">
        <img src="../resources/img/logo2.png" class="dashlogo">
        <img src="../resources/img/reviewimg.jpg" class="profile" >
        <button class="edit"> Edit Profile</button><br>
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
                            <span class="menu-title">View Tour Package</span>
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

	<div class="complains_box">
	
			<form action="complains_page.php" method="post">

				<div class="text_box_search_bar">
					<input type="text" name="" placeholder="Keyword.."></input>
					<input type="submit" name="" value="Search"></input>
				</div><!-- text_box_search_bar-->	

				<div class="search_bar">
					<button type="submit" name="new_submit">Newest First</button>
					<button type="submit" name="old_submit">Oldest First</button>
				</div><!-- search_bar -->
				
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>

				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
				<div class="text_box">
					<p><h2>Title</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<button type="submit">View More &raquo;</button></p>
					
				</div>
			</form>

	</div><!-- complains_box -->

<?php include('../view/footer.php'); ?>
</body>
</html>

