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

    while($row = $result->fetch_assoc())
    {  
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username']; //set sessions
    }
    $conn->close();
    header("Location: /SW-A1/dashboard.php"); 
    exit;

?>

