
<?php
    require('header.php');

    if(isset($_SESSION['username']))
    {
        session_unset();
        session_destroy();
        header("Location: /SW-A1/home.php"); 
        exit;
    }
    else
    {
        header("Location: /SW-A1/error.php"); 
        exit;
    }
    require('footer.php');
?>