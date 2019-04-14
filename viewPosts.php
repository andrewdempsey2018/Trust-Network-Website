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

var button = document.createElement("button");
button.style.width = '64px';
button.style.height = '32px';
document.body.appendChild(button);

button.onClick = function() {document.write("XXX")};

function hi()
{
	document.write("XXX");
}
</script>

<button id="1" onClick="reply_click(this.id)">B1</button>
<button id="2" onClick="reply_click(this.id)">B2</button>
<button id="3" onClick="reply_click(this.id)">B3</button>

<script type="text/javascript">
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
}
</script>

</body>
</html>