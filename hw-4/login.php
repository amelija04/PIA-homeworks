<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" href="style.css">

        <body>
       
            <?php
             

            $username = $password ="";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = test_input($_POST["username"]);
                $passsword = test_input($_POST["password"]);
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
            <div class="central">
                
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                Username: <br> <input type="text" name="username">       
                <br><br>
                Password: <br> <input type="text" name="password">  
                <br><br>
                <input  class="btn" type="submit" name="log in" value="Log in">  
                </form>
                <p>Don't have an account? Create one:</p>
                <input  class="btn" type="submit" name="sign up" value="Sign up">
        </div>
        </body>
    </head>
</html>
