<?php 
    if(isset($_SESSION['loginerror'])) {
    echo '<div class="text-danger">'. json_encode(implode(str_replace('"', ' ', $_SESSION['loginerror'] ))) . '</div>';
    }
?>