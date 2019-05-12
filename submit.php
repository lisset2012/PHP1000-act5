<?php


$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin" && $pass == "pass1234"){
    
    session_start();
    $_SESSION['user'] = $user;

    header('Location:home.php');

}else{
    echo "Usuario y contrasena incorrectos";
}

