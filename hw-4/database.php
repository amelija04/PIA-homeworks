<?php
$dbHost="localhost";
$dbName="korisnik";
$dbPass="";
$dbUser="root";
$con=mysqli_connect($dbHost, $dbUser, $dbPass,$dbName);

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

 
$sql="insert into korisnik (name, surname, email, username, password) values ('$name', '$surname', '$email', '$username', '$password')";
$query=mysqli_query($con, $sql);

?>
