<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function logOut(){
            window.location.href="login.php";
        }
       
        </script>
 
        <body>
          <nav>
              <div class="search-icon">
                <input type="search" placeholder="Search...">
              </div>
              <input  class="btn" onclick="logOut()" type="submit" name="log out" value="Log out">
          </nav>
</body>
</head>
</html>
