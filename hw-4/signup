<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="style.css">

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
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
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
                 <input  class="btn" type="submit" name="Sign uo" value="Sign up">  
                 </form>
         </div>
</body>
</html>
