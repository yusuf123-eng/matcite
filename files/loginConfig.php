<?php
require_once 'dbConfig.php';

if(ISSET($_POST['login'])){
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $_SESSION['email'] = $email;
	$password = md5($_POST['password']);

		$check_password = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        $password_validate = mysqli_num_rows($check_password);
		
        if($password_validate == 1){
			header("location: ../user_account.php");
            $_SESSION['loginerror'] = "";
            $_SESSION['email'] = $email;
            exit();
		}else{
            
			header("location: ../login.php");
            $_SESSION['loginerror'] = array('Oooppss... Credentials Not Correct', $_SESSION['loginerror']);
            exit();
		}

    }

?>
