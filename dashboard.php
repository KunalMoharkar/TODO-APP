<?php require('header.php') ?>
<div class="container">
    <div class="control">
        <div class="add-btn">
            <a href="/SW-A1/addtodo.php" ><i class="fa fa-plus fa-plus-custom" aria-hidden="true"></i></a>
        </div>    
        <div class="stats">
            <button class="todo-button">Total: 12</button>
            <button class="todo-button">Done: 4</button>
            <button class="todo-button">Star: 3</button>
        </div>
    </div>
    <div class="dashboard-container">
        <div class="todo-card">
            <div class="todo-header">
                <h4>Title</h4>
                <a href="/SW-A1/modifytodo.php">modify</a>
            </div>
            <div class="todo-footer">
                <div>
                    <i class="fa fa-check fa-check-custom" aria-hidden="true"></i>
                    <i class="fa fa-star fa-star-custom" aria-hidden="true"></i>
                </div>
        
                    <span>due:12/11/2002</span>
            </div>    
        </div>
    </div>    
</div>
<?php require('footer.php') ?>

