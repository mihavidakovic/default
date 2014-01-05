<?php 

// Glavne nastavitve

$naslovStrani = "Default";




// Povezava z bazo

$host = "localhost";  // Ponavadi 'localhost'
$user = "root"; // Uporabniško ime
$pass = ""; // Geslo
$db = ""; // Ime podatkovne baze

$con=mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>