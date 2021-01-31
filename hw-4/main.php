<?php
require "connect.php";
$fetch=mysqli_query($conn, "select * from movie");
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background-image: url("pozadina.jpg");
      }  
      table, th, td{
         text-align:left;
         padding:10px;
         background-color:#24173d;
         color:blanchedalmond;
      }
      td{
         border-bottom: 3px solid #ddd;      
      }     

      </style>
    <script>
        function logOut(){
            window.location.href="login.php";
        }
        function add(){
          window.location.href="addMovieMain.php"
        }          
        </script>
        <body>
          <nav>
              <input type="text" name="id" placeholder="Search...">
              <input class="btn" type="submit" name="search" value="Search">
              <input  class="btn" onclick="logOut()" type="submit" name="log out" value="Log out">
              <input  class="btn" onclick="add()" type="submit" name="addM" value="Add Movie">
              <input  class="btn" onclick="delete()" type="submit" name="deleteM" value="Delete Movie">
          </nav>
            <table>
          <tr>
                    <td>Title</td>                 
                    <td>Description</td>                  
                    <td>Genre</td>
                    <td>Screenplay</td>                 
                    <td>Director</td>                
                    <td>Distributed by</td>                
                    <td>Actors</td>                
                    <td>Picture</td>                
                    <td>Year</td>              
                    <td>Duration (min)</td>    
                  </tr>
            <?php
            while($row=(mysqli_fetch_assoc($fetch))){
              ?>
                  <tr>
                    <td><?php echo $row['Title'];?></td>         
                    <td><?php echo $row['Description'];?></td>                 
                    <td><?php echo $row['Genre'];?></td>
                    <td><?php echo $row['Screenplay'];?></td>                 
                    <td><?php echo $row['Director'];?></td>                
                    <td><?php echo $row['Distributed'];?></td>                
                    <td><?php echo $row['Actors'];?></td>                
                    <td><?php echo $row['Picture'];?></td>                
                    <td><?php echo $row['Year'];?></td>              
                    <td><?php echo $row['Duration'];?></td>          
                  </tr>
                  <?php } ?>
            </table>
</body>
</head>
</html>
