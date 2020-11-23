<?php session_start();

$users = $_SESSION['users'];
//print_r($users);
//print_r($_SESSION['id']);

?>

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
    if (!isset($_SESSION['id'])){
        include('../view/top_bar.php');
    }else{
        include('../view/new_top_bar.php');
    }
    ?> 
	<div class="view_all_box">

			<!-- <form action="../controller/view_users_controller.php" method="post"> -->

			<div class="text_box_search_bar">
				<form action="../controller/view_users_admin_controller.php" method="get">
					<input type="text" name="word" placeholder="Keyword.."></input>
					<input type="submit" name="search" value="Search"></input>
				</form>	
			</div><!-- text_box_search_bar-->	


			<div class="moderator_dashboard_box">
				<div class="prow">

					<?php 
						foreach ($users as $user) {
					?>
										
						<div class="pcolumn">
							<div class="pcard">
								<?php
									if ($user['image_path']) {
										echo '<img src="'.$user['image_path'].'" alt="" style="width:100%; height:250px;">';
									}

									else {
										echo '<img src="../resources/img/default.jpg" alt="" style="width:100%; height:250px;">';
									}
								?>
								
								<div class="pcontainer">
									<h2><?php echo $user['first_name'] , " " , $user['last_name']; ?></h2>
									<p><?php echo $user['email']; ?></p>
									<form action="../controller/UserAccountAdmin_controller.php" method="get">
										<button class="pbutton" type="submit" name="view_user" value="<?php echo $user['id']; ?>">View Profile</button>
									</form>
								</div>
							</div>
						</div>

					<?php  
						}
					?>

				</div> <!-- prow -->						

			</div><!-- moderator_box -->

			<!-- </form> -->

	</div>
<?php include('../view/footer.php'); ?>
</body>
<script type="text/javascript" src="../resources/js/jscript.js"></script>
</html>
