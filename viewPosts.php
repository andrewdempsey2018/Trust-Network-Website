<html><head><title>Get data</title></head>
<body>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "posts";

#connect to MySQL
$dbconnect=mysqli_connect($hostname, $username, $password, $db) or die("Problem connecting to database");

if($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}


#select the specified database
$query = mysqli_query($dbconnect, "SELECT * FROM user_posts") or die (mysqli_error($dbconnect));

?>

<table border="1" align="center">
<tr>
  <td>Message</td>
</tr>

<?php

while ($row = mysqli_fetch_array($query))
{
    $infoFromDB = $row['text'];
	echo
	"<tr><td>{$row['text']}</td></tr>";
}

?>

</table>

<script>


</script>

</body>
</html>