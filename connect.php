<?php

$servername="localhost";
$username="root";
$password="";
$dbname="users";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Csatlakozási hiba".$conn->connect_error);
}
$conn->set_charset("utf8");
?>

