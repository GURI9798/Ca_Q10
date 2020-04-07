
<?php

//sudo apt install php-mysqli

$servername = "remotemysql.com";
$username = "ObZgD9mU1d";
$password = "zhLLOyg5jz";
$database_name ="ObZgD9mU1d";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name,$port);

// Check connection
if (!$conn) {
    ("Connection failed: " . mysqli_connect_error());
}

?>