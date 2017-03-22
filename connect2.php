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
$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "insert into address (surname,firstname,middlename,phone,email) values ('$surname', '$firstname', '$middlename', '$phone', '$email')";


if (mysqli_query($link, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> 
