<?php
require_once 'functions.php';
session_start();


?>

<html>
<head>
    <body>
        <h1>Congrats, you are logged in!</h1>
        <form action="index.php">
            <button type="submit" name="logout" method="">Log Out </button>
        </form>
    </body>
</head>
</html>
