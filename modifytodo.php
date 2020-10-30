<?php require('header.php');?>
    <div class="forms-pageContainer">
        <div class="form-container">
            <form>
                <div class="form-body"> 
                    <div>
                        <label for="title">Title :</label>
                        <input type="text" name="title" />
                    </div>
                    <div>
                        <label for="description">Description :</label>
                        <input type="text" name="description" />
                    </div>
                    <div>
                        <label for="due">Due date:</label>
                        <input type="text" name="due" />
                    </div>
                    <div class="form-check-container">
                        <div>
                            <input type="checkbox" name="status" />
                            <label for="status">Mark as done</label>
                        </div>
                        <div>
                            <input type="checkbox" name="fav" />
                            <label for="fav">Add Bookmark</label>
                        </div>
                    </div>    
                </div>
                <div class="form-footer">
                    <button class="todo-button" type="submit">Update</button>
                    <button class="todo-button" style="background-color:#9C1B35;" type="submit">Delete</button>
                </div>
            </form>
        </div>
    </div> 

<?php require('footer.php');?>