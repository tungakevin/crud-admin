<?php
session_start();
require_once "../config/config.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$qry = "SELECT * FROM `users` WHERE `username` = '$user'";
$res = mysqli_query($conn,$qry);
if(mysqli_num_rows($res)>0){
    $data = mysqli_fetch_array($res);
    if($data['password'] == $pass){
        $_SESSION['user'] = $data;
        if($data['type'] == 'admin'){
            header('location:../index.php');
        }elseif($data['type'] == 'user'){
            header('location:../index.php');
        }else{
            header('location:../index.php');
        }
    }else{
        $_SESSION['error'] = "Incorrect Password!";
        header('location:../login.php');
    }
}else{
    $_SESSION['error'] = "User doesn't Exist!";
    header('location:../login.php');
}
 

