<?php
ob_start(); 
session_start();
$conn=mysqli_connect('localhost', 'matcitec_root', 'Matcite', 'matcitec_videos');
if(!$conn){
	die("Error: Failed to connect to database!");
}
?>

