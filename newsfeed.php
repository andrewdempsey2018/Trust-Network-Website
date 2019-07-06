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

<!-- Comment -->
<div class="container">
    <div class="row">
		<div class="col-sm">
			<h1 id="welcomeText" class="welcomText"></h1>
		</div>
		<div class="col-sm">
			<!-- temporary link to make post page -->
			<button type="button" href="makepost.html" class="btn btn-outline-warning btn-lg btn-block">Post</button>
		</div>
	</div>
</div>

<!-- Comment -->
<div class="container">

    <div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas0" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea0">
			</div>
			<div class="row textArea" id="textArea0">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key0">
				<button class="btn btn-info" onclick="unlock(0)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas1" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea1">
			</div>
			<div class="row textArea" id="textArea1">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key1">
				<button class="btn btn-info" onclick="unlock(1)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-light postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas2" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea2">
			</div>
			<div class="row textArea" id="textArea2">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key2">
				<button class="btn btn-info" onclick="unlock(2)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas3" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea3">
			</div>
			<div class="row textArea" id="textArea3">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key3">
				<button class="btn btn-info" onclick="unlock(3)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-light postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas4" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea4">
			</div>
			<div class="row textArea" id="textArea4">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key4">
				<button class="btn btn-info" onclick="unlock(4)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas5" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea5">
			</div>
			<div class="row textArea" id="textArea5">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key5">
				<button class="btn btn-info" onclick="unlock(5)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-light postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas6" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea6">
			</div>
			<div class="row textArea" id="textArea6">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key6">
				<button class="btn btn-info" onclick="unlock(6)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas7" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea7">
			</div>
			<div class="row textArea" id="textArea7">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key7">
				<button class="btn btn-info" onclick="unlock(7)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-light postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas8" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea8">
			</div>
			<div class="row textArea" id="textArea8">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key8">
				<button class="btn btn-info" onclick="unlock(8)">Trust!</button>
			</div>
        </div>
    </div>

	<div class="row bg-color-orange-dark postCell">
        <div class="col-sm">
            <canvas class="cellImage" id="canvas9" width="320" height="240"></canvas>
        </div>
		<div class="col-sm">
			<div class="row headingArea" id="headingArea9">
			</div>
			<div class="row textArea" id="textArea9">
			</div>
			<div class="row">
				<input type="text" class="keyText" name="key9">
				<button class="btn btn-info" onclick="unlock(9)">Trust!</button>
			</div>
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
	document.getElementById("welcomeText").textContent = "Welcome " + username;

	/* */
	function unlock(variable)
	{
		var newString = "";
			
		var shift = 5;
				
		for(var i = 0; i < textArray[variable].length; i++)
		{
			newString += String.fromCharCode(textArray[variable].charCodeAt(i) - shift);
		}


		document.getElementById("textArea" + variable).textContent = newString;
	}

</script>

</body>
</html>