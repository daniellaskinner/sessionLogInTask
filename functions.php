<?php

//function to check if credentials are correct and re-direct to about page if so
function validateCredentials (string $usernameFromUser, string $passwordFromUser, string $username1, string $password1) {
    if($usernameFromUser == $username1 && $passwordFromUser == $password1) {
        header('Location: account.php');
    } else {
        return 'Invalid credentials, please try again';
    }
}



//password hashing
//function cleanseInput(string $userInput) :string {
//    $cleansedInput = trim($userInput);
//    $cleansedInput = stripslashes($userInput);
//    $cleansedInput = htmlspecialchars($userInput);
//    return $cleansedInput;
//}