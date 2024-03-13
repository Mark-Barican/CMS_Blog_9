<?php

<<<<<<< Updated upstream
$connect = mysqli_connect('localhost', 'blog_9', 'admin', 'blog_9');
=======
$servername = 'localhost';
$username = 'blog_9_1';
$password = 'admin';
$database = 'blog_9_1';
>>>>>>> Stashed changes

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Connected successfully
echo 'Connected successfully';

?>