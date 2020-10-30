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
        <!--Stylesheets-->
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">

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
            <div class="nav-sessions">
                <p>Hello, Kunal</p>
                <button href="#">Logout</button>
        </div>
        </div>
      
        <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Home</a>
        <a href="#">Dashboard</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
        </div>