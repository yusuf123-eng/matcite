<?php
require_once 'dbConfig.php';

if(ISSET($_POST['save'])){
	$title = $_POST['title'];
	$link = $_POST['link'];
	$description = ($_POST['description']);
    $email = $_SESSION['email'];
	
    mysqli_query($conn, "INSERT INTO `videos` VALUES('', '$title', '$link', '$description', '$email')"); 
    
    header("location: ../user_account.php");
    $email = $_SESSION['email'];
    exit();
}
?>
