<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="style.css">
        <script>
        function movies(){           
            window.location.href="main.php";                   
        }
        </script>
        <body>
        <?php
             $name = $surname = $email = $username = $password ="";
 
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 $name = test_input($_POST["name"]);
                 $surname = test_input($_POST["surname"]);
                 $email = test_input($_POST["email"]);
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
             <form method="post" action="database.php">  
                 Name: <br> <input type="text" name="name">
                 <br>
                 Surname: <br> <input type="text" name="surname">
                 <br>
                 Email: <br> <input type="text" name="email">
                 <br>
                 Username: <br> <input type="text" name="username">
                 <br>
                 Password: <br> <input type="text" name="password">  
                 <br><br>
                 <input  class="btn" onclick="movies()" type="submit" name="Sign up" value="Sign up">  
                 </form>
         </div>
</body>
</html>
