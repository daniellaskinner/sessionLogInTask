<?php
require_once 'functions.php';
session_start();

//checking user enters some credentials and assigning these credentials to variables
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username1 = 'daniellaskinner120@gmail.com';
    $password1 = 'password123';

    echo validateCredentials($username, $password, $username1, $password1);
};

//username1 and password1 are from the database normally but here they have been hard-coded



//if user tries to navigate to the log in page when already logged in re-direct to account page


//set the session variables for username and password
$_SESSION['username']= $username1;
$_SESSION['password']= $password1;

if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
//    $sessionUser = $username1;
//    $sessionPass = $password1;
    echo 'Welcome back ' . $username1;
} else {
    echo 'You are not logged in.';
}


var_dump($_SESSION);





//encrypting password

//function encryptPass(string $password) :string {
//$cleansedPass=cleanseInput($password);
//$hashedPass = password_hash($cleansedPass, PASSWORD_DEFAULT);
//$enterPassAgain = $password;
//$isCorrect = password_verify ($enterPassAgain, $hashedPass);
//return $isCorrect;
//}

//encryptPass($_GET['password']);
//
//if($isCorrect){
//    echo "Password entered is correct";
//} else {
//    echo "Password entered is incorrect.";
//}



?>


<html>
<head>
    
</head>

<body>
    <h1>Please enter your log in details</h1>
    <form method="post">
        <input type="email" name="username" >
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>

