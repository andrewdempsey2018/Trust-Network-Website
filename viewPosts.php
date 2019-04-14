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

//echo $a[2];

?>

<script>
<?php
$php_array = array('abc','def','ghi');
$js_array = json_encode($a);
echo "var javascript_array = ". $js_array . ";\n";
?>

/*document.write("<br>" + javascript_array[3]);

<button id="1" onClick="reply_click(this.id)">B1</button>
<button id="2" onClick="reply_click(this.id)">B2</button>
<button id="3" onClick="reply_click(this.id)">B3</button>

function reply_click(clicked_id)
{
    //alert(clicked_id);
	if(clicked_id == 1)
	{
	    javascript_array[3] = "sdfsd";
		window.location.reload();
	}

	if(clicked_id == 2)
	{

	}
}*/
</script>

<table border="1">
<tr>
    <td id="r1"><script>document.write(javascript_array[0])</script></td>
    <td>___________</td>
	<td><button id="0" onClick="reply_click(this.id)">B0</button></td>
</tr>
<tr>
    <td><script>document.write(javascript_array[1])</script></td>
    <td>___________</td>
	<td><button id="1" onClick="reply_click(this.id)">B1</button></td>
</tr>
<tr>
    <td><script>document.write(javascript_array[2])</script></td>
    <td>___________</td>
	<td><button id="2" onClick="reply_click(this.id)">B2</button></td>
</tr>
</table>

<script type="text/javascript">
function reply_click(clicked_id)
{
    if(clicked_id == 0)
	{
	    document.getElementById("r1").innerHTML = "sss";
	}
}
</script>

</body>
</html>