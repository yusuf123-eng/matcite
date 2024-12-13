<li class="nav-item">
    <?php if(isset($_SESSION['email'])){ 
        echo '<a style="color: rgb(255, 255, 255, 0.7) !important;" href="user_account.php"  class="nav-link" title="User Account">'.$_SESSION["email"].'</a>';; }
        else{
        echo '<a style="color: rgb(255, 255, 255, 0.7) !important;" href="login.php" class="nav-link" title="Login">Login</a>';
        }
    ?>
</li>