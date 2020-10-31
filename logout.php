
<?php
    require('header.php');
    session_unset();
    session_destroy();
    header("Location: /SW-A1/home.php"); 
    exit;
    require('footer.php');
?>