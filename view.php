<html>
<body>
<?php
$host = 'localhost';
$dbname = 'contact';
$dbuser = 'root';
$dbpassword = '';

$conn = mysql_connect($host, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$selected = mysql_select_db("contact",$conn)
or die("Could not select anything");





$link = mysql_query("select id,surname,firstname,middlename,phone,email FROM address");
echo "<table><tr>
<td>surname</td>
<td>firstname</td> 
<td>middlename</td>
<td>phone</td>
<td>email</td>
</tr>";
while($link= mysql_fetch_array($link))
{
echo "<tr><td>" .$link['surname']."</td>";
echo "<td>" .$link['firstname']."</td>";
echo "<td>" .$link['middlename']."</td>";
echo "<td>" .$link['phone']."</td>";
echo "<td>" .$link['email']."</td>";
echo "<td><a href = 'edit.php?id="  .$link ['id']."'>Edit</a></td>";
echo "<td><a href = 'delete.php?id="  .$link ['id']."'>Delete</a></td></tr>";
}
</table>


</body>
</html>
