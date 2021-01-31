<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
             function signUp(){
                   window.location.href="signUp.php";
             }
        </script> 
        <style>
            body{
                background-image:url('pozadina.jpg');
            }
         </style>
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
                
            <form method="post" action="addition.php">  
                <input type="text" name="username" placeholder="Username..">       
                <br><br>
                <input type="text" name="password" placeholder="Password..">  
                <br><br>
                <input  class="btn" type="submit" name="log in" value="Log in">  
                </form>
                <p>Don't have an account? Create one:</p>
                <input  class="btn" onclick="signUp()" type="submit" name="sign up" value="Sign up">
        </div>
        </body>
    </head>
</html>
