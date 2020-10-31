<?php require('header.php');?>
    <div class="forms-pageContainer">
        <div class="form-container">
            <form action="/SW-A1/addtodo-script.php" method="POST">
                <div class="form-body"> 
                    <div>
                        <label for="title">Title :</label>
                        <input type="text" name="title" required/>
                    </div>
                    <div>
                        <label for="description">Description :</label>
                        <input type="text" name="description" required/>
                    </div>
                    <div>
                        <label for="due">Due date:</label>
                        <input type="text" name="due" />
                    </div>
                </div>
                <div class="form-footer">
                    <button class="todo-button" type="submit">Add Todo</button>
                </div>
            </form>
        </div>
    </div> 

<?php require('footer.php');?>