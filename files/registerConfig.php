<?php
require_once 'dbConfig.php';


if(ISSET($_POST['register'])){
	$names = $_POST['names'];
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = md5($_POST['password']);
	$passwordC = md5($_POST['passwordC']);

	if ($_POST["password"] === $_POST["passwordC"]) {

		$check_email = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
		$emails_count = mysqli_num_rows($check_email);

			if($emails_count <= 0) {
				mysqli_query($conn, "INSERT INTO `users` VALUES('', '$names', '$email', '$password')"); 
				header("location: ../user_account.php");
				$_SESSION['loginerror'] = "";
				$_SESSION['email'] = $email;
				exit();
			}else{
				header("location: ../register.php");
				$_SESSION['loginerror'] = array('Oooppss... Credentials already Exist...', $_SESSION['loginerror']);
				exit();
			}
			
		}
	 }
?>
