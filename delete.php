<?php
include('config.php');

$mydb = mysql_select_db("contact",$link)
or die("Could not select examples");

//execute the SQL queries and returns records
$result = mysql_query("SELECT * FROM address");
$query = 'DELETE FROM address
WHERE id=1';

echo "<table border='1'>
<tr>
<th>id</th>
<th>surname</th>
<th>firstname</th>
<th>middlename</th>
<th>phone</th>
<th>email</th>
</tr>";
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
echo"<tr>";
echo "<td>" .$row{'id'}."</td>";
echo "<td>" .$row{'surname'}."</td>"; //display the results
echo "<td>" .$row{'firstname'}."</td>";
echo "<td>" .$row{'middlename'}."</td>";
echo "<td>" .$row{'phone'}."</td>";
echo "<td>" .$row{'email'}."</td>";
echo "</tr>";
}
echo "</table>";
mysql_select_db('contact');
$retval = mysql_query( $query, $link );
if(! $retval )
{
die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($link);
?>



