<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "website1";

//create connection
$conn = new mysqli($servername,$username,$password,$db_name);

//check connection
if($conn -> connect_error){
    die("Connection failed" .$conn -> connect_error);
}
echo "Connected successfully!"

?>