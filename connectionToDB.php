<?php
//connection to database using mysql
$servername = "localhost";
$username = "root";
$password = "";
$db = "workDB";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
  die("Sorry we failed to connect to the database" . "<br>" . mysqli_connect_error());
} else {
  echo "Connection was successfull" . "<br>";
}
