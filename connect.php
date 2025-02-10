<?php
$servername = "sql211.infinityfree.com";
$username = "if0_37552200";
$password = "584vXoOU6o";
$dbname = "if0_37552200_registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
