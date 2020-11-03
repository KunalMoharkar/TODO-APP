<?php session_start();?>
<?php require('conf.php');?>

    <?php
    //handle errors
    if(!(isset($_POST['username'])&&isset($_POST['password'])))
    {
      header("Location: /SW-A1/error.php"); 
      exit;
  
    }
    
    $username = $_POST['username'];
    $password = md5($_POST['password']); //hashed password

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

