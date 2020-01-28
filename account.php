<?php
require_once 'functions.php';
session_start();
echo 'your username is ' . $_SESSION['username'] . '<br>';
echo 'your password is ' . $_SESSION['password'];


?>

<html>
<head>
    <body>
        <h1>Congrats, you are logged in!</h1>
        <form action="index.php">
            <input type="submit" name="logout" class="Log out" method="">
        </form>
    </body>
</head>
</html>
