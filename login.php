<?php require('header.php');?>
    <div class="forms-pageContainer">
        <div class="form-container">
            <form action="/SW-A1/login-script.php" method="POST">
                <div class="form-body"> 
                    <div>
                        <label for="username">Username :</label>
                        <input type="text" name="username" required/>
                    </div>
                    <div>
                        <label for="username">Password :</label>
                        <input type="password" name="password" required />
                    </div>
                </div>
                <div class="form-footer">
                    <button class="todo-button" type="submit">Login</button>
                    <a class="todo-button" href="/SW-A1/register.php">Register</a>
                </div>
            </form>
        </div>
    </div> 

<?php require('footer.php');?>