<?php


require_once('classes/MyIncludes.php');


$msg = '';
$username = '';
$password = '';
$errors = [];

$usernameValidator = new UsernameValidator;
$passwordValidator = new PasswordValidator;


if (isUserLoggedIn()) {

    header('Location: account.php');
    exit();

} else {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = getParamUsername();
        $password = getParamPassword();

        if (! $usernameValidator->isValid($username)) {
            $errors['invaliduser'] = "Invalid Username!";
        }

        if (! $passwordValidator->isValid($password)) {
            $errors['invalidpassword'] = "Invalid Password!";
        }

        if (count($errors) == 0) {
            logInUser($username);
            header('Location: account.php');
            exit();
        } 

    }

}


function logInUser($username) {

    $_SESSION['username'] = $username;

}

function getParamUsername() {

    if (isset($_POST['username'])) {
        return $_POST['username'];
    }

    return '';

}

function getParamPassword() {

    if (isset($_POST['password'])) {
        return $_POST['password'];
    }

    return '';

}

function errorMessage($errors) {
    if (count($errors) > 0) {
        foreach ($errors as $key => $value) {
            echo $value . '<br>';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans|Titillium+Web:400,300,200|Orbitron' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="container">
    <div class="background">
        
        <!-- GREETING MESSAGE -->
        <header>Greetings<br> Human!</header>
        
        <!-- LOGIN FORM -->
        <main>

            <article>Please login to continue:</article>

            <section class="login">
                    <form action="index.php" method="POST">

                        <div>
                            <input class="form" type="text" name="username" placeholder="Username" value="<?=$username?>" required><br> <br>
                        </div>

                        <div>
                            <input class="form" type="password" name="password" placeholder="Password" value="<?=$password?>" required><br> <br>
                        </div>

                        <div>
                            <button>Login</button>
                        </div>
                        
                        <div class="error">
                            <?= errorMessage($errors) ?>
                        </div>

                    </form>
            </section>

        </main>
        
        <!-- SIGN UP BUTTON -->
        <div class="signup">
            Sign Up Now!
        </div>

    </div>
    </div> 
  
</body>
</html>