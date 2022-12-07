<?php
define("Host","localhost");
define("User","root");
define("Pass","");
define("Db","nyamata");

$conn = mysqli_connect(Host,User,Pass,Db);

print $conn ? "": header('location:../ooops.php');
