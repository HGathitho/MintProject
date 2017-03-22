<?php
$host = 'localhost';
$dbname = 'contact';
$dbuser = 'root';
$dbpassword = '';

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$phone = $_POST['phone'];
$email = $_POST['email'];


// Create connection
$link = mysql_connect($host, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$link) {
    die("Connection failed: " . mysql_connect_error());
}
?>
