<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>View All Guide Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/view_users_page.css">
	<link rel="stylesheet" href="../resources/css/top_bar.css">
	<link rel="stylesheet" href="../resources/css/new_top_bar.css">
	<link rel="stylesheet" href="../resources/css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background:none;">
	<?php
	if (!isset($_SESSION['id'])) {
		include('../view/top_bar.php');
	} else {
		include('../view/new_top_bar.php');
	}
	?>

<?php if($_SESSION['level']=='moderator'){ ?>
<div class="side_bar">
			<img src="../resources/img/logo2.png" class="dashlogo">
			<img src="../resources/img/reviewimg.jpg" class="profile">
			<form action="../controller/moderator_dashboard_controller.php" method="post">
				<button class="edit" name="edit_profile" type="submit"><span>Edit Profile</span> </button><br>
			</form>
			<div class="sidebar-menu">
				<ul>
					<li>
						<a href="moderator_dashboard.php">
							<span class="menu-icon"><i class="fa fa-folder-open fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">My Dashboard</span>
						</a>
					</li>
					<li>
						<a href="../controller/chat_controller.php">
							<span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
							<span class="menu-title">Inbox</span>
						</a>
					</li>
					<li>
						<form action="../controller/complain_controller.php" method="post">
							<a href="">
								<span class="menu-icon"><i class="fa fa-question-circle fa-1x" aria-hidden="true"></i></span>
								<button type="submit" style=" 
								display: block;
								padding: 0 10px;
								height: 40px;
								font-size: medium;
								background:none;
								outline:none;
								border:none;
								color:white;
								line-height: 40px;
								text-align: start;" name="complain_button">Complain</button>
							</a>
						</form>
					</li>
					<li>
						<a href="../controller/view_users_admin_controller.php?user_level=tourguide">
							<span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View all Guides</span>
						</a>
					</li>
					<li>
						<a href="../controller/view_users_admin_controller.php?user_level=tourist">
							<span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View all Tourists</span>
						</a>
					</li>
					<li>
						<a href="../view/create_event.php">
							<span class="menu-icon"><i class="fa fa-calendar-plus-o fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">Create Event</span>
						</a>
					</li>
					<li>
						<a href="../view/view_event.php">
							<span class="menu-icon"><i class="fa fa-calendar-o fa-1x" aria-hidden="true"></i></span>
							<span class="menu-title">View Event</span>
						</a>
					</li>
				</ul>
			</div>
			<!--sidebar-manu-->
		</div>
		<!--side_bar-->
<?php }?>

	<div class="view_all_box">

		<div class="text_box_search_bar">
			<?php
			if (isset($_GET['user_level'])) {
				$user_level = $_GET['user_level'];
				//print_r($user_level);
			}
			?>
			<form action="../controller/view_users_admin_controller.php" method="get">
				<input type="hidden" name="user_level" value="<?php echo $user_level ?>" id=""></input>
				<input type="text" name="word" placeholder="Enter User Email.."></input>
				<input type="submit" name="search" value="Search"></input>
			</form>
		</div><!-- text_box_search_bar-->


		<div class="moderator_dashboard_box">
			<div class="prow">

				<?php
				if (isset($_GET['users'])) {
					$users = $_GET['users'];
					//print_r($users);

					foreach ($users as $user) {
				?>
						<div class="pcolumn">
							<div class="pcard">
								<?php
								if ($user['image_path']) {
									echo '<img src="' . $user['image_path'] . '" alt="" style="width:100%; height:250px;">';
								} else {
									echo '<img src="../resources/img/default.jpg" alt="" style="width:100%; height:250px;">';
								}
								?>

								<div class="pcontainer">
									<h2><?php echo $user['first_name'], " ", $user['last_name']; ?></h2>
									<p><?php echo $user['email']; ?></p>
									<form action="../controller/UserAccountAdmin_controller.php" method="get">
										<input type="hidden" name="user_level" value="<?php echo $user_level ?>" id=""></input>
										<button class="pbutton" type="submit" name="view_user" value="<?php echo $user['id']; ?>">View Profile</button>
									</form>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>

			</div> <!-- prow -->

		</div><!-- moderator_dashboard_box -->

	</div>
	<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>

</html>