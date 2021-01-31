<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="movie";
$con=mysqli_connect($dbHost, $dbUser, $dbPass,$dbName);

$title=$_POST['title'];
$description=$_POST['description'];
$genre=$_POST['genre'];
$screenplay=$_POST['screenplay'];
$director=$_POST['director'];
$distributed=$_POST['distributed'];
$actors=$_POST['actors'];
$picture=$_POST['picture'];
$year=$_POST['year'];
$duration=$_POST['duration'];

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO movie (Title, Description, Genre, Screenplay, Director, Distributed, Actors, Picture, Year, Duration)
VALUES ('$title', '$description', '$genre', '$screenplay', '$director', '$distributed', '$actors', '$picture', '$year', '$duration')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

function emptyMovie($title, $description, $genre, $screenplay, $director, $distributed, $actors, $picture, $year, $duration){
    if(empty($title) || empty($description) || empty($genre) || empty($screenplay) || empty($director) || empty($distributed) || empty($actors) || empty($picture) || empty($year) || empty($duration) ){
        return true;
    }
    else{
        return false;
    }
}
if(emptyMovie($title, $description, $genre, $screenplay, $director, $distributed, $actors, $picture, $year, $duration)==true){
    header("Location: addMovieMain.php");
    exit();
}
else{
    header("Location: main.php");    
}
?>
