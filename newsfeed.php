<html><head><title>The Trust Network</title></head>
<body>

<h1>Welcome Mark</h1>

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

$name = array();
$text = array();
$image = array();

while ($row = mysqli_fetch_array($query))
{
    array_push($name, $row['name']);
    array_push($text, $row['text']);
    array_push($image, $row['image']);
}
echo $name[0];

?>

<script>
//function loadImage()
//{
	var canvas = document.createElement('canvas');
	canvas.width = 320;
    canvas.height = 240;
	var canvasContext = canvas.getContext("2d");
	var imageValues = '<?php echo $image[0] ?>';

    document.body.appendChild(canvas);

	imageValues = imageValues.split(',');

	for(var i = 0; i < imageValues.length; i++)
	{
		imageValues[i] = parseInt(imageValues[i]);
	}

	var imageData = new ImageData(320, 240);

	imageData.data.set(imageValues);

	canvasContext.putImageData(imageData, 0, 0);

	//alert(imageValues.length);
//}
</script>

</body>
</html>