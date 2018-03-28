<?php

$numberOne = 1;
$numberTwo = 2;

$sumOfTwoNumbers = $numberOne + $numberTwo;

echo ($sumOfTwoNumbers === 3) ? '1 plus 2 equals 3!' : 'Something is terribly wrong';
echo '<br>';
$servername = "docker-mysql";
$username = "root";
$password = "docker";
$database = "blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

