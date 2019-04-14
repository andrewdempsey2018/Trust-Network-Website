<html><head><title>View Posts</title></head>
<body>

<h1>View Posts</h1>

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

<?php

$a = array();

while ($row = mysqli_fetch_array($query))
{
    //$infoFromDB = $row['text'];
	array_push($a, $row['text']);
}

echo $a[2];

?>

<script>
<?php
$php_array = array('abc','def','ghi');
$js_array = json_encode($a);
echo "var javascript_array = ". $js_array . ";\n";
?>

document.write("<br>" + javascript_array[3]);
</script>

</body>
</html>