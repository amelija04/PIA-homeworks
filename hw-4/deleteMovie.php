<?php
$link = mysqli_connect("localhost", "root", "", "movie");
$link=$_SESSION['Title'];
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "DELETE FROM movie WHERE Title=$link";

mysqli_close($link);
?>
