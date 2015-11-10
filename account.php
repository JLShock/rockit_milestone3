<?php


require_once('classes/MyIncludes.php');


$username = '';


if (isUserLoggedIn()) {

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
    <link href='https://fonts.googleapis.com/css?family=PT+Sans|Titillium+Web:900,700,400,300,200|Orbitron:700,900' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- CSS STAR ANIMATION -->
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    
    <!-- MAIN CONTENT CONTAINER -->
    <div class="container-account">
        
        <!-- HOME LINK -->
        <nav class="links">
            <a href="account.php">home</a>
        </nav>
        
        <!-- WELCOME USER MESSAGE -->
        <header class="welcome-msg">
            <strong>Welcome,</strong><br><?= $username ?>
        </header>
        
        <!-- SERVICES -->
        <section class="service">
            My Playlists
        </section>

        <section class="service">
            New Playlist
        </section>

        <section class="service">
            Settings
        </section>

        <section class="service">
            My Account
        </section>
        
        <!-- LOGOUT LINK -->
        <footer>
            <a href="logout.php">logout</a>
        </footer>

    </div>

</body>
</html>