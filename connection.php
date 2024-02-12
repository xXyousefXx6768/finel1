<?php
$username = "root";
$localhost = "localhost";
$pass = '';
$dbname = 'yousef_db';

$conn = mysqli_connect($localhost, $username, $pass, $dbname);

if ($conn) {
    echo 'done';
} else {
    echo 'not done: ' . mysqli_connect_error();
}
?>
