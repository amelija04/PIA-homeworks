<?php
$dbHost="localhost";
$dbName="user";
$dbPass="";
$dbUser="root";

$search_value=$_POST['search'];
$con=new mysqli($dbHost, $dbUser, $dbPass,$dbName);
if($con->connect_error){
    echo 'Connection failed: '.$con->connect_error;
    }else{
        $sql="select * from movie where Title like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'Title:  '.$row["Title"];
            }       
        }
?>
