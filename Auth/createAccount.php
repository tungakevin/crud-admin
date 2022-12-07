<?php
session_start();
require_once "../config/config.php";

$user = $_POST['username'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$type = $_POST['type'];

$qry = "INSERT INTO `users`(`username`, `password`, `phone`, `type` ) VALUES ('$user','$pass','$phone','$type')";
$res = mysqli_query($conn,$qry);
if($res){
    $_SESSION['success'] = "User have been created!";
    header('location:../createUser.php');
}else{
    $_SESSION['error'] = "Something went wrong try again!";
    header('location:../createUser.php');
}
