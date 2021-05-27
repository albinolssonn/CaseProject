<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false){
        header('location: ../signup.php?emptyInput'); 
        exit(); 
    }

    if(invalidUid($username)!== false){
        header('location: ../signup.php?emptyUid'); 
        exit(); 
    }
    
    if(invalidEmail($email)!== false){
        header('location: ../signup.php?emptyEmail'); 
        exit(); 
    }

    if(pwdMatch($password, $pwdRepeat)!== false){
        header('location: ../signup.php?passwordDontMatch'); 
        exit(); 
    }

    if(uidExists($conn, $username)!== false){
        header('location: ../signup.php?usernameTaken'); 
        exit(); 
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else{
    header("location: ../signup.php");
}