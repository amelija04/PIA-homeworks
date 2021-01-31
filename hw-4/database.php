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
$type="regular";
 
$sql="insert into korisnik (name, surname, email, username, password) values ('$name', '$surname', '$email', '$username', '$password')";
$query=mysqli_query($con, $sql);

function emptyInput($name, $surname, $email, $username, $password){
    if(empty($name) || empty($surname) || empty($email) || empty($username) || empty($password) ){
        return true;
    }
    else{
        return false;
    }
}
if(emptyInput($name, $surname, $email, $username, $password)==true){
    header("Location: signUp.php");
    exit();
}
else{
    header("Location: main.php");    
}

?>
