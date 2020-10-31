<?php session_start() ;?>
<?php require('conf.php');?>

    <?php
    
    $sql = "INSERT INTO todo (user_id, title, description, due_date)
            VALUES (?, ?, ?, ?)";
    
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("isss", $user_id, $title, $description, $due_date);//prevent sql injection
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due'];
    $user_id = $_SESSION['id'];

    echo $title;
    echo $description;
    echo $due_date;
    echo $user_id;

    $stmt->execute();
        
    $conn->close();
    header("Location: /SW-A1/dashboard.php"); 
    exit;
    

?>

