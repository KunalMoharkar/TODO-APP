<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO-APP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Stylesheets-->
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/utils.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/login.css">


        <script>
            function openNav() {
            document.getElementById("mySidebar").style.width = "200px";
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            }
        </script>

    </head>
    <body>
        <!--Navigation Bar-->
        <div class="navbar" id="main">
            <button class="openbtn" onclick="openNav()">☰</button>  
            <?php if($_SESSION["username"]):?>
                <div class="nav-sessions">
                    <p>Hello, Kunal</p>
                    <a href="/SW-A1/logout.php"><button >Logout</button></a>
                </div>
            <?php endif;?>
        </div>
      
        <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="/SW-A1/home.php">Home</a>
        <?php if($_SESSION["username"]):?>
            <a href="/SW-A1/dashboard.php">Dashboard</a>
        <?php endif;?>
        <a href="/SW-A1/login.php">Login</a>
        <a href="#">Register</a>
        </div>