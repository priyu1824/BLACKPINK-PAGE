<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$sql = new mysqli($hostname,$username,$password,$dbname);
if($sql->connect_error){
    echo "connection failed";
}
?>