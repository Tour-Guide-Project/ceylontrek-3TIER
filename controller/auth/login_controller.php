<?php session_start(); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\login_sql.php'); ?>
<?php
//check the sumbit button has been pressed
if (isset($_POST['submit'])) {

	$errors = array();

	//check usrrname and password has been entered
	if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
		$errors[] = 'Username is required/Invalid';
		header('Location:/ceylontrek-3tier/view/login.php?' . http_build_query(array('param' => $errors)));
	}

	if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
		$errors[] = 'Password is required/Invalid';
		header('Location: /ceylontrek-3tier/view/login.php?' . http_build_query(array('param' => $errors)));
	}

	//check if there are any errors
	if (empty($errors)) {
		//save the username and password into the variables from form
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);
		$hashed_password = sha1($password);

		$result = loging($connection, $email, $hashed_password); //call sql function
		//print_r($result);
		if ($result) {
			//query successfull
			if (mysqli_num_rows($result) == 1) {
				//valid user found
				$record = mysqli_fetch_assoc($result);
				if ($record['level'] == 'admin') {
					$_SESSION['level'] = 'admin';
					$_SESSION['id'] = $record['id'];
					header('Location: /ceylontrek-3tier/view/admin_dashboard.php');
				}
				if ($record['level'] == 'moderator') {
					$_SESSION['level'] = 'moderator';
					$_SESSION['id'] = $record['id'];
					header('Location:/ceylontrek-3tier/view/moderator_dashboard.php');
				}
				if ($record['level'] == 'tourist') {
					$_SESSION['level'] = 'tourist';
					$_SESSION['id'] = $record['id'];
					header('Location: /ceylontrek-3tier/view/touristDashboard.php');
				}
				if ($record['level'] == 'tourguide') {
					$_SESSION['level'] = 'tourguide';
					$_SESSION['id'] = $record['id'];
					header('Location: /ceylontrek-3tier/view/guideDashboard.php');
				}
			} else {   //user name and password invalid
				$errors[] = 'Invalid Username/Password';
				header('Location: /ceylontrek-3tier/view/login.php?' . http_build_query(array('param' => $errors)));
			}
		} else {
			$errors[] = 'Invalid Username/Password';
		}
	}
}
?>
<?php mysqli_close($connection); ?>