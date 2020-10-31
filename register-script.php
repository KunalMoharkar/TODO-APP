<?php require('conf.php');?>

    <?php
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, email, password)
            VALUES (?, ?, ?)";
    
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);//prevent sql injection
   
    if (!($stmt->execute() === TRUE)) {
        
        header("Location: /SW-A1/error.php"); 
        exit;
    } 
    
    $conn->close();
    header("Location: /SW-A1/login.php"); 
    exit;

?>

