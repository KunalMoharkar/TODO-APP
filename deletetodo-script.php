<?php session_start() ;?>
<?php require('conf.php');?>

<?php
    
    $id = $_GET['todo_id'];
    $sql = "DELETE FROM todo WHERE id=?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("i",$id);//prevent sql injection
    $stmt->execute();
    $conn->close();
    header("Location: /SW-A1/dashboard.php"); 
    exit;
    
?>

