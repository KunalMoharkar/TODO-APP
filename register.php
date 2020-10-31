<?php require('header.php');?>

    <div class="forms-pageContainer">
        <div class="form-container">
            <form action="/SW-A1/register-script.php" method="POST">
                <div class="form-body"> 
                    <div>
                        <label for="username" required>Username :</label>
                        <input type="text" name="username" />
                    </div>
                    <div>
                        <label for="email" required>Email :</label>
                        <input type="text" name="email" />
                    </div>
                    <div>
                        <label for="password" required>Password :</label>
                        <input type="password" name="password" />
                    </div>
                </div>
                <div class="form-footer">
                    <button class="todo-button" type="submit">Register</button>
                </div>
                <?php echo $message?>
            </form>
        </div>
    </div> 

<?php require('footer.php');?>