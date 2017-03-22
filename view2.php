<!DOCTYPE html>
<html>
<body>
<?php

include('config.php');

$mydb = mysql_select_db("contact",$link)
or die("Could not select anything");

//execute the SQL queries and returns records
$result = mysql_query("SELECT * FROM address");

echo "<table border='1'>
<tr>
<th>id</th>
<th>surname</th>
<th>firstname</th>
<th>middlename</th>
<th>phone</th>
<th>email</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

//fetch the data from the database
while ($row = mysql_fetch_array($result)) {
echo"<tr>";
echo "<td>" .$row{'id'}."</td>";
echo "<td>" .$row{'surname'}."</td>";  //display the results
echo "<td>" .$row{'firstname'}."</td>";
echo "<td>" .$row{'middlename'}."</td>";
echo "<td>" .$row{'phone'}."</td>";
echo "<td>" .$row{'email'}."</td>";


echo "<td><a href = 'edit.php?id="  .$link ['id']."'>Edit</a></td>";
echo "<td><a href = 'delete.php?id="  .$link ['id']."'>Delete</a></td></tr>";

echo "</tr>";
}
echo "</table>";

mysql_close ($link);
?>
</body>
</html>
