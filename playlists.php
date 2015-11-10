<?php

// Start the session
session_start();

$username = '';

if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0) {
    $username = $_SESSION['username'];
} else {
    header('Location: index.php');
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans|Titillium+Web:700,400,300,200|Orbitron' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container-account">
        <nav class="links"><a href="index.php">HOME</a></nav>
        <header class="welcome-msg"><span>Welcome,</span><br><?= $username ?></header>
        <section class="primary-content">
            My Playlists
        </section>
        <footer>
            <a href="logout.php">LOGOUT</a>
        </footer>
    </div>
</body>
</html>