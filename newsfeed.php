<html>
<head>
<title>The Trust Network</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="resources/styles.css">
</head>
<body>

<h1>Welcome Mark</h1>

<div class="container">
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas0" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<p id="textArea1"></p>
        </div>
    </div>
    <div class="row bg-color-orange-light">
        <div class="col-sm">
            <canvas id="canvas1" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas2" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-light">
        <div class="col-sm">
            <canvas id="canvas3" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas4" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-light">
        <div class="col-sm">
            <canvas id="canvas5" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas6" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-light">
        <div class="col-sm">
            <canvas id="canvas7" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas8" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
    <div class="row bg-color-orange-light">
        <div class="col-sm">
            <canvas id="canvas9" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
        </div>
    </div>
</div>

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

?>

<script>

	var canvas = null;
	var canvasNumber = null;
	var canvasContext = null;
	var imageValues = null;
	var imageData = new ImageData(320, 240);

	//take the images from the php code and feed them into a javascript array
	//for easy iteration over each image
	var imageArray = <?php echo json_encode($image); ?>;

	for(var i = 0; i < 10; i++)
	{
		imageValues = imageArray[i];

		imageValues = imageValues.split(',');

		for(var j = 0; j < imageValues.length; j++)
		{
			imageValues[j] = parseInt(imageValues[j]);
		}

		imageData.data.set(imageValues);

		canvas = document.getElementById("canvas" + i);
		canvasContext = canvas.getContext("2d");
		canvasContext.putImageData(imageData, 0, 0);
		
	}

	document.getElementById("textArea1").textContent = "sdfsdsdfsdf";
</script>

</body>
</html>