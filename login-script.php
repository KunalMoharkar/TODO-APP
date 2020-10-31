<?php session_start();?>
<?php require('conf.php');?>

    <?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' ";
    $result = $conn->query($sql);

    
    
    if ($result->num_rows === 0) {
        
        header("Location: /SW-A1/error.php"); 
        exit;
    } 

    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['id'];
    $conn->close();
    header("Location: /SW-A1/home.php"); 
    exit;

?>

