<?php session_start() ;?>
<?php require('conf.php');?>

<?php

    if(!isset($_SESSION['username']))
    {
        header("Location: /SW-A1/error.php"); 
        exit;
    }
    
    $id = $_GET['todo_id'];
    $sql = "DELETE FROM todo WHERE id=?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("i",$id);    //prevent sql injection
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

