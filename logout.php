<?php

include('includes/config.php');

session_destroy();

// Verify the correct path for your application
header('Location: /CMS_Blog_9');
die();