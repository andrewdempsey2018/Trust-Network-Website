<html><head><title>View Posts</title></head>
<body>

<h1>View Posts</h1>

<canvas id="imageCanvas" width="640" height="480"></canvas> 

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "postsdb";

#connect to MySQL
$dbconnect=mysqli_connect($hostname, $username, $password, $db) or die("Problem connecting to database");

if($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}

#select the specified database
$query = mysqli_query($dbconnect, "SELECT * FROM poststable") or die (mysqli_error($dbconnect));

$messages = array();

while ($row = mysqli_fetch_array($query))
{
    array_push($messages, $row['text'], $row['image']);
}
echo $messages[2];

?>

<script>
//function loadImage()
//{
	var canvas = document.getElementById("imageCanvas");
	var canvasContext = canvas.getContext("2d");
	var imageValues = '<?php echo $messages[3] ?>';

	imageValues = imageValues.split(',');

	for(var i = 0; i < imageValues.length; i++)
	{
		imageValues[i] = parseInt(imageValues[i]);
	}

	var imageData = new ImageData(640, 480);

	imageData.data.set(imageValues);

	canvasContext.putImageData(imageData, 0, 0);

	alert(imageValues.length);
//}
</script>

<button onclick="loadImage()">Click me</button> 
</body>
</html>