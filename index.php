<?php
require_once 'functions.php';
session_start();

if(isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
};

?>


<html>
<head>
    
</head>

<body>
    <h1>Please enter your log in details</h1>
    <form action="account.php" method="get">
        <input type="text" name="username" >
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>

