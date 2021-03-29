<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\config\connection.php'); ?>
<?php require_once('C:\xampp\htdocs\ceylontrek-3tier\sql\signup_sql.php'); ?>
<?php 
session_start();
//check the submit button has been pressed
if (isset($_POST['submit'])) {

        $errors = array();
        $errors['first']="";
        $errors['last']="";
        $errors['tel']="";
        $errors['add']="";
        $errors['email']="";
        $errors['password']="";


        $errors['sucess']='unsucess';
        $level=$_SESSION['level'];
	//check correct details has been entered
	if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
        $errors['first']= 'First Name is required/Invalid';
        }
        //check name has only a-z
        elseif(!preg_match(("/^([a-zA-Z']+)$/"),$_POST['first_name'])){
        $errors['first']= 'First Name is Invalid';     
        }
	if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
        $errors['last']= 'Last Name is required/Invalid';
        }
        //check name has only a-z
        elseif(!preg_match(("/^([a-zA-Z']+)$/"),$_POST['last_name'])){
        $errors['last']= 'Last Name is Invalid';     
        }
	if(!isset($_POST['tel_no']) || strlen(trim($_POST['tel_no']))<1){
        $errors['tel']= 'Contact Details is required/Invalid';
        }
        elseif(strlen(trim($_POST['tel_no']))<10){
        $errors['tel']= 'Contact Details is Invalid';
        }
        //check contact details has only 0-9
        elseif(preg_match(("/[^0-9]/"), $_POST['tel_no'])){
        $errors['tel']='Invalid phone number';
        }
	if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1){
        $errors['add']= 'Address is required/Invalid';
	}
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
        $errors['email']= 'Email Address is required/Invalid';
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
        $errors['password']= 'Password is required/Invalid';
	}
	// if(strlen(trim($_POST['password']))<6){
        // $errors['password']= 'Please create strong password,Password must contain at least 6 characters!';
        // }

        //checking if email address already exists
        $email=mysqli_real_escape_string($connection,$_POST['email']);//(email sanitized) escaped special charactrs,we can create legal query from this.
	$result_set1=exist_email($connection,$email);

	if($result_set1)
	{
		if(mysqli_num_rows($result_set1)==1){
			$errors['email']='Your Email address already exists';
		}
        } 
        
        //if error is empty
        if($errors['first']=="" && $errors['last']=="" && $errors['tel']=="" && $errors['add']=="" && $errors['email']=="" && $errors['password']==""){

        $first_name=mysqli_real_escape_string($connection,$_POST['first_name']);
        $last_name=mysqli_real_escape_string($connection,$_POST['last_name']);
        $address=mysqli_real_escape_string($connection,$_POST['address']);
        $contact=mysqli_real_escape_string($connection,$_POST['tel_no']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        

        $result_set2=signup($connection,$first_name,$last_name,$email,$address,$contact,$password);
        
        $result_set3=get_id($connection,$email,$level);
        $record=mysqli_fetch_assoc($result_set3);
        $_SESSION['id']=$record['id'];


        
        $errors['sucess']='sucess';
        $errors['level']=$level;
        }

        echo json_encode($errors);
}




?>
<?php mysqli_close($connection);?>