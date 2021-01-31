<?php
$username=$_POST['username'];
$password=$_POST['password'];
function emptyInputLog($username, $password){
    if(empty($username) || empty($password) ){
          return true;            
    }
    else{
          return false;      
    }
}
if(emptyInputLog($username, $password)==true){
    header("Location: login.php");
    exit();
}
else{
    header("Location: main.php");
    exit();
}
?>
