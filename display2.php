<?php
$host = 'localhost';
$dbname = 'contact';
$dbuser = 'root';
$dbpassword = '';

// Create connection
$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$link) 
{
    die("Database Connection failed: " . mysqli_connect_error());
}


//Select Database to use
mysqli_select_db("contact",$link) or die ("Could not connect to database" . mysqli_conncect_error());

//$search = $_POST['name'];


//Retrieving data from table
$query = "select * FROM  address ";
$result = mysqli_query($query);

//Displaying data on the page
while($row = mysqli_fetch_arry($result))
{
echo $row ['surname'];
echo $row ['firstname'];
echo $row ['middlename'];
echo $row ['phone'];
echo $row ['email'];

//Close the connection
mysqli_close($link);
 ?>
