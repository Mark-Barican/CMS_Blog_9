<?php


$connect = mysqli_connect('localhost', 'blog_9', 'admin', 'blog_9');
$servername = 'localhost';
$username = 'blog_9';
$password = 'admin';
$database = 'blog_9';


if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


?>