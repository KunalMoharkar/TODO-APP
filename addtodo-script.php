<?php session_start() ;?>
<?php require('conf.php');?>

    <?php

    if(!isset($_SESSION['username']))
    {
        header("Location: /SW-A1/error.php"); 
        exit;
    }
    
    $sql = "INSERT INTO todo (user_id, title, description, due_date)
            VALUES (?, ?, ?, ?)";
    
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("isss", $user_id, $title, $description, $due_date);//prevent sql injection
    
    if(isset($_POST['title'])&&isset($_POST['description'])&&isset($_POST['due']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due'];
    }

    $user_id = $_SESSION['id']; //id of current logged in user
    

    if(!($stmt->execute()))
    {
              
        $conn->close();
        header("Location: /SW-A1/error.php"); 
        exit;
    
    }
        
    $conn->close();
    header("Location: /SW-A1/dashboard.php"); 
    exit;
    

?>

