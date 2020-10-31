<?php
   $servername = "localhost";
   $db_username = "softlabuser";
   $db_password = "softlabDB@user";
   $db_name = "Soft_lab";
   // Create connection
   $conn = new mysqli($servername, $db_username, $db_password, $db_name);
   // Check connection
   if ($conn->connect_error) {
     $message = "some error occured";
     die();
   }
   
   ?>
