<?php
require_once 'functions.php';
session_start();

$_SESSION['username']=$inputUsername;
$_SESSION['password']=$inputPassword;
//var_dump($_SESSION);

$_GET

?>


<html>
<head>
    
</head>

<body>
    <h1>Please enter your log in details</h1>
    <form action="account.php">
        <input type="text" name="username" method="get">
        <input type="password" name="password" method="post">
        <input type="submit" name="submit" method="get">
    </form>
</body>
</html>

