<!DOCTYPE html>
<html>
    <head>    
        <link rel="stylesheet" href="style.css">
        <style>
            div.central{
                margin-top:3%;
            }
        </style>
        <body>
        <?php          
             $title= $description= $genre= $screenplay= $director= $distributed= $actors= $picture= $year= $duration="";
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 $title=test_input($_POST["title"]);
                 $description=test_input($_POST["description"]);
                 $genre=test_input($_POST["genre"]);
                 $screenplay=test_input($_POST["screenplay"]);
                 $director=test_input($_POST["director"]);
                 $distributed=test_input($_POST["distributed"]);
                 $actors=test_input($_POST["actors"]);
                 $picture=test_input($_POST["picture"]);
                 $year=test_input($_POST["year"]);
                 $duration=test_input($_POST["duration"]);
             }
             function test_input($data) {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
             }
             ?>
        <div class="central">   
                <form method="post"  action="addMovie.php">  
                    Title: <input type="text" name="title">       
                    <br><br>
                    Description:  <input type="text" name="description">  
                    <br><br>
                    Genre: <input type="text" name="genre">       
                    <br><br>
                    Screenplay: <input type="text" name="screenplay">       
                    <br><br>
                    Director: <input type="text" name="director">       
                    <br><br>
                    Distributed by: <input type="text" name="distributed">       
                    <br><br>
                    Actors: <input type="text" name="actors">       
                    <br><br>
                    Picture: <input type="text" name="picture">       
                    <br><br>
                    Year: <input type="text" name="year">       
                    <br><br>
                    Duration (min): <input type="text" name="duration">       
                    <br><br>
                    <input  class="btn" type="submit" name="add" value="Add movie">
                    </form>
            </div>
        </body>
    </head>  
</html>
