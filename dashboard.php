<?php require('header.php') ;?>
<?php
require('conf.php'); 
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM todo WHERE user_id = '{$user_id}' ";
$result = $conn->query($sql);
$done = 0;
$fav = 0;
$total = $result->num_rows;

while($row = $result->fetch_assoc()) 
{
    if($row['status']==1)
    {
        $done += 1;
    }

    if($row['is_fav']==1)
    {
        $fav += 1;
    }
}
$result = $conn->query($sql);
?>


<div class="container">
    <div class="control">
        <div class="add-btn">
            <a href="/SW-A1/addtodo.php" ><i class="fa fa-plus fa-plus-custom" aria-hidden="true"></i></a>
        </div>    
        <div class="stats">
            <button class="todo-button">Total: <?php echo $total?></button>
            <button class="todo-button">Done:  <?php echo $done?></button>
            <button class="todo-button">Star:  <?php echo $fav?></button>
        </div>
    </div>
    <div class="dashboard-container">
    <?php while($row = $result->fetch_assoc()):?>
        <div class="todo-card">
            <div class="todo-header">
                <h6><?php echo $row['title']?></h6>
                <a href="/SW-A1/modifytodo.php" style="margin-left:20px;">modify</a>
            </div>
            <div class="todo-footer">
                <div>
                    <?php if($row['status'] == 1):?>
                        <i class="fa fa-check fa-check-custom" aria-hidden="true"></i>
                    <?php endif; ?>
                    <?php if($row['is_fav'] == 1):?>
                        <i class="fa fa-star fa-star-custom" aria-hidden="true"></i>
                    <?php endif; ?>
                </div>
                    <span>due:<?php echo $row['due_date'];?></</span>
            </div>    
        </div>
    <?php endwhile; ?>
    </div>    
</div>
<?php require('footer.php') ?>

