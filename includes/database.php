<?php

$servername = 'localhost';
$username = 'blog_9_1';
$password = 'admin';
$database = 'blog_9_1';

$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Connected successfully
echo 'Connected successfully';

?>