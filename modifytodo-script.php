<?php session_start() ;?>
<?php require('conf.php');?>

    <?php
    
    
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

    

    echo $title;
    echo $description;
    echo $due_date;
    echo $status;
    echo $is_fav;
    echo $id;

   
    $stmt->execute();
    $conn->close();
    header("Location: /SW-A1/dashboard.php"); 
    exit;
    

?>

