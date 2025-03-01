<?php
$host="mysql.weboke.nl";
$user="webshopAdmin";
$pass="";
$db="cirxqhfy_webshop";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB" .$conn->connect_error;
}
?>