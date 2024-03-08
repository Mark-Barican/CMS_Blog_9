<?php

$connect = mysqli_connect('localhost', 'Blog_9', 'secretpassword', 'Blog_9');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>