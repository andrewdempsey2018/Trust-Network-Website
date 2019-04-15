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
    <td id="row0" width="20%"><script>document.write(javascript_array[0])</script></td>
    <td>___________</td>
	<td><button id="0" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row1" width="20%"><script>document.write(javascript_array[1])</script></td>
    <td>___________</td>
	<td><button id="1" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row2" width="20%"><script>document.write(javascript_array[2])</script></td>
    <td>___________</td>
	<td><button id="2" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row3" width="20%"><script>document.write(javascript_array[3])</script></td>
    <td>___________</td>
	<td><button id="3" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row4" width="20%"><script>document.write(javascript_array[4])</script></td>
    <td>___________</td>
	<td><button id="4" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row5" width="20%"><script>document.write(javascript_array[5])</script></td>
    <td>___________</td>
	<td><button id="5" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row6" width="20%"><script>document.write(javascript_array[6])</script></td>
    <td>___________</td>
	<td><button id="6" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row7" width="20%"><script>document.write(javascript_array[7])</script></td>
    <td>___________</td>
	<td><button id="7" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row8" width="20%"><script>document.write(javascript_array[8])</script></td>
    <td>___________</td>
	<td><button id="8" onClick="reply_click(this.id)">Unlock</button></td>
</tr>
<tr>
    <td id="row9" width="20%"><script>document.write(javascript_array[9])</script></td>
    <td>___________</td>
	<td><button id="9" onClick="reply_click(this.id)">Unlock</button></td>
</tr>


<script>
function reply_click(clicked_id)
{
    document.getElementById("row" + clicked_id).textContent = decode(javascript_array[clicked_id]);
}

function decode(arg1)
{
    var text = arg1;
    var shift = 1;
    var newString = "";

    for(i = 0; i < text.length; i++)
    {
       newString += String.fromCharCode(text.charCodeAt(i) - shift);
    }

	return newString;
}
</script>

</body>
</html>