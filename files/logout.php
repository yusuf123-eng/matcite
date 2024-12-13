<?php
require_once 'dbConfig.php';
    if(ISSET($_POST['logout'])){
    session_destroy();
    header('Location: ../index.php');
}
?>