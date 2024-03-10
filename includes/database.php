<?php

$connect = mysqli_connect('localhost', 'blog_9', 'admin', 'blog_9');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>