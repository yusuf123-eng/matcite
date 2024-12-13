<?php
    $email = $_SESSION['email'];
    $grab_videos = mysqli_query($conn, "SELECT * FROM videos WHERE email='$email'");
    while($display=mysqli_fetch_array($grab_videos)){
?>
<div class="col-md-5 m-3">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo $display['link']?>" allowfullscreen></iframe>
    </div>
    <div class="h4"><?php echo $display['title']?></div>
    <div class="text-dark h6">
        <?php echo $display['description']?>
    </div>
</div>
<?php } ?>