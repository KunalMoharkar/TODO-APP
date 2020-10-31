<?php 
require('header.php');
require('conf.php'); 
$id = $_GET['todo_id'];
$sql = "SELECT * FROM todo WHERE id = '{$id}' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) 
{
    $title = $row['title'];
    $description = $row['description'];
    $due_date = $row['due_date'];
    $status = $row['status'];
    $is_fav = $row['is_fav'];
}


?>
    <div class="forms-pageContainer">
        <div class="form-container">
           
            <form action=<?php echo "/SW-A1/modifytodo-script.php?todo_id=".$id ?> method="POST">
                <div class="form-body"> 
                    <div>
                        <label for="title">Title :</label>
                        <input type="text" name="title" value=<?php echo '"'.$title.'"';?> required/>
                    </div>
                    <div>
                        <label for="description">Description :</label>
                        <input type="text" name="description"  value=<?php echo  '"'.$description.'"';?> required />
                    </div>
                    <div>
                        <label for="due">Due date:</label>
                        <input type="text" name="due"  value=<?php echo  '"'.$due_date.'"';?> required />
                    </div>
                    <div class="form-check-container">
                        <div>
                            <input type="checkbox" name="status"/>
                            <label for="status" >Mark as done</label>
                        </div>
                        <div>
                            <input type="checkbox" name="is_fav" />
                            <label for="is_fav">Add Bookmark</label>
                        </div>
                    </div>    
                </div>
                <div class="form-footer">
                    <button class="todo-button" type="submit">Update</button>
                    <a href=<?php echo"/SW-A1/deletetodo-script.php?todo_id=".$id;?> class="todo-button" style="background-color:#9C1B35;">Delete</a>
                </div>
            </form>
        </div>
    </div> 

<?php require('footer.php');?>