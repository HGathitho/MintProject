<?php 
	
include('config.php');  

if(isset($_POST['submit'])){ 
	  if(isset($_GET['search'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
// Create connection
$link = mysql_connect($host, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$link) {
    die("Connection failed: " . mysql_connect_error());
} 
//-select  the database to use 
$mydb=mysql_select_db("contact"); 
if(!$mydb){
die("could not locate database: " . mysql_connect_error());}

//-query  the database table 
$query="SELECT  id, surname, firstname, middlename FROM address WHERE surname LIKE '%" . $name .  "%' OR firstname LIKE '%" . $name ."%' OR middlename LIKE '%" . $name .  "%'";
 
//-run  the query against the mysql query function 
$result=mysql_query($query); 

//-create  while loop and loop through result set 
while($row=mysql_fetch_array($result)){ 
                  $surname  =$row['surname']; 
	          $firstname=$row['firstname'];
                  $middlename=$row['middlename'];
                  $id=$row['id'];
 
//-display the result of the array 

echo "<ul>\n"; 
echo "<li>" . "<a  href=\"search.php?id=$id\">"$surname. " " . $fisrtname . " " . $middlename .  "</a></li>\n"; 
echo "</ul>"; 
} 
} 
else{ 
echo  "<p>Please enter a search query</p>"; 
} 
} 
} 
?>
