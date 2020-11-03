<?php session_start() ;?>
<?php require('conf.php');?>

    <?php
    
    if(!(isset($_SESSION['username'])))
    {
        header("Location: /SW-A1/error.php"); 
        exit;
    }
    
    $sql = "UPDATE todo SET title=?,description=?,due_date=?,status=?,is_fav=? WHERE id=?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("sssiii", $title, $description, $due_date, $status, $is_fav, $id);//prevent sql injectio
   
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due'];
    $status = $_POST['status'];
    $is_fav = $_POST['is_fav'];
    $id = $_GET['todo_id'];

    if($status == "on")
    {
        $status = 1;
    }
    else
    {
        $status = 0;
    }

    if($is_fav == "on")
    {
        $is_fav = 1;
    }
    else
    {
        $is_fav = 0;
    }

   
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

