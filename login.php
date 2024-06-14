<?php
$login = $_POST['login'];
$password = $_POST['password'];
if($login === "admin" && $password === "admin"){
    header("Location: admin.php");
}else{
    header("Location: login.html");
}

?>