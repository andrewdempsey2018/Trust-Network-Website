<html>
<head>
<title>The Trust Network</title>

	<!-- Comment -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Comment -->
	<link rel="stylesheet" type="text/css" href="resources/styles.css">
</head>
<body>

<!-- temporary link to make post page -->
<a href="makepost.html">Make a post</a>

<!-- Comment -->
<h1 id="welcomeText"></h1>

<!-- Comment -->
<div class="container">
    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas0" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<p id="headingArea0"></p>
			<p id="textArea0"></p>
			<input type="text" name="key0">
			<button onclick="unlock(0)">Trust!</button> 
        </div>
    </div>

    <div class="row bg-color-orange-light">
		<div class="col-sm">
			<p id="headingArea1"></p>
			<p id="textArea1"></p>
        </div>
        <div class="col-sm">
            <canvas id="canvas1" width="320" height="240"></canvas>
        </div>
    </div>

    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas2" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<p id="headingArea2"></p>
			<p id="textArea2"></p>
        </div>
    </div>

    <div class="row bg-color-orange-light">
		<div class="col-sm">
			<p id="headingArea3"></p>
			<p id="textArea3"></p>
        </div>
        <div class="col-sm">
            <canvas id="canvas3" width="320" height="240"></canvas>
        </div>
    </div>

    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas4" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<p id="headingArea4"></p>
			<p id="textArea4"></p>
        </div>
    </div>

    <div class="row bg-color-orange-light">
		<div class="col-sm">
			<p id="headingArea5"></p>
			<p id="textArea5"></p>
        </div>
        <div class="col-sm">
            <canvas id="canvas5" width="320" height="240"></canvas>
        </div>
    </div>

    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas6" width="320" height="240"></canvas>
		</div>
        <div class="col-sm">
			<p id="headingArea6"></p>
			<p id="textArea6"></p>
        </div>
    </div>

    <div class="row bg-color-orange-light">
        <div class="col-sm">
			<p id="headingArea7"></p>
			<p id="textArea7"></p>
        </div>
        <div class="col-sm">
            <canvas id="canvas7" width="320" height="240"></canvas>
        </div>
    </div>

    <div class="row bg-color-orange-dark">
        <div class="col-sm">
            <canvas id="canvas8" width="320" height="240"></canvas>
        </div>
        <div class="col-sm">
			<p id="headingArea8"></p>
			<p id="textArea8"></p>
        </div>
    </div>

    <div class="row bg-color-orange-light">
		<div class="col-sm">
			<p id="headingArea9"></p>
		    <p id="textArea9"></p>
        </div>
        <div class="col-sm">
            <canvas id="canvas9" width="320" height="240"></canvas>
        </div>
    </div>
</div>

<?php

/* Connect to the database that contains all of the posts and images
that users of the website have uploaded */
$hostname = "localhost";
$username = "root";
$password = "";
$db = "postsdb";

/* Connect to MariaDB and produce and error if the connection fails */
$dbconnect=mysqli_connect($hostname, $username, $password, $db) or die("Problem connecting to database");

if($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}

/* populate the $query varable with the complete text of all of the posts
in the data base. This variable will then be processd later to extract
its contents in a more manageable way */
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

	/* These variables will be used several times in the
	for loop. They are responsible for storing image information */
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

		
		var nameArray = <?php echo json_encode($name); ?>;
		document.getElementById("headingArea" + i).textContent = nameArray[i] + " said...";

		/* Whilst iterating over the images, assign the relevent text message to
		the corresponding container */
		var textArray = <?php echo json_encode($text); ?>;
		document.getElementById("textArea" + i).textContent = textArray[i];
	}

	/* These two lines take the username from the cookie that
	was generated by the login screen and perform some operations
	on the string to remove some unwated text. By default, the cookie
	will return a  name/value pair and in this case it will return
	"user=<username>" It is important that we remove the "user="
	section of the string */
	var username = document.cookie;
	username = username.replace("user=", "");

	/* The welcome text at the top of the news feed is assigned
	a class called welcomeText. This class is accessed and its
	textContent attribute is modified to reflect the username of
	the user who has logged in */
	document.getElementById("welcomeText").textContent = "We5lcome " + username;

	/* */
	function unlock(variable)
	{
		textArray[variable] = "decoded message";
		document.getElementById("textArea" + variable).textContent = textArray[variable];
	}

</script>

</body>
</html>