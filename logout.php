<?php


require_once('classes/MyIncludes.php');


unset($_SESSION['username']);

session_destroy();

header('Location: index.php');

// header('Refresh: 3; index.php');

// echo "You will be logged out in 3 sec...";

exit();


?>