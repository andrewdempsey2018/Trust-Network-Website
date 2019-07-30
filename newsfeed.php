<html>
<head>
<title>The Trust Network</title>

	<!-- Comment -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Comment -->
	<link rel="stylesheet" type="text/css" href="resources/styles.css">

	<!-- util.js contains functions that are used on multiple pages of the site -->
	<script type="text/javascript" src="resources/util.js"></script>

</head>
<body>

<!-- Comment -->
<div class="container">
    <div class="row">
		<div class="col-sm-12 col-lg-3 justify-content-center">
			<h1 id="welcomeText" class="welcomText"></h1>
		</div>
		
		<div class="col-sm-12 col-lg-3 justify-content-center">
			<!-- temporary link to make post page -->
			<a href="#" class="btn btn-primary btn-sm">Logout</a>
		</div>

		<div class="col-sm-12 col-lg-3 justify-content-center">
			<!-- temporary link to make post page -->
			<a href="settings.html" class="btn btn-primary btn-sm">Settings</a>
		</div>

		<div class="col-sm-12 col-lg-3 justify-content-center">
			<!-- temporary link to make post page -->
			<a href="makePost.html" class="btn btn-warning btn-block">Post</a>
		</div>
	</div>
</div>

<!-- Comment -->
<div class="container">

    <div class="row bg-color-orange-light postCell">
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas0" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas1" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas2" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas3" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas4" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas5" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas6" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas7" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas8" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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
        <div class="col-sm-12 col-lg-6">
            <canvas class="cellImage" id="canvas9" width="320" height="240"></canvas>
        </div>
		<div class="col-sm-12 col-lg-6">
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

	<!-- yet to implement next/previous page buttons -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6 justify-content-center">
				<button type="button" onclick="previousPage()" class="btn btn-primary btn-lg btn-block"><< Previous Page</button>
			</div>
			<div class="col-sm-12 col-lg-6 justify-content-center">
				<button type="button" onclick="nextPage()" class="btn btn-primary btn-lg btn-block">Next Page >></button>
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
$db = "trustnetworkdb";

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

	//take the images from the php code and feed them into a javascript array
	//for easy iteration over each image
	var imageArray = <?php echo json_encode($image); ?>;

	var nameArray = <?php echo json_encode($name); ?>;

	var textArray = <?php echo json_encode($text); ?>;

	var first = 0;
	var last = 10;

	const NUMBER_OF_CELLS = 10;

	populateCells(first, last);

	/* These two lines take the username from the cookie that
	was generated by the login screen and perform some operations
	on the string to remove some unwated text. By default, the cookie
	will return a  name/value pair and in this case it will return
	"user=<username>" It is important that we remove the "user="
	section of the string */

	var username = getCookie("user");
	//username = username.replace("user=", "");

	/* The welcome text at the top of the news feed is assigned
	a class called welcomeText. This class is accessed and its
	textContent attribute is modified to reflect the username of
	the user who has logged in */
	document.getElementById("welcomeText").textContent = "Welcome " + username;

	window.alert(getCookie("key"));

	function populateCells(firstPost, lastPost)
	{
		var cellNumber = 0;
		/* populate post cells */
		for(var i = firstPost; i < lastPost; i++)
		{
			canvas = document.getElementById("canvas" + cellNumber);
			canvasContext = canvas.getContext("2d");
			canvasContext.putImageData(getViewableImage(i), 0, 0);

			document.getElementById("headingArea" + cellNumber).textContent = nameArray[i] + " said...";

			/* Whilst iterating over the images, assign the relevent text message to
			the corresponding container */
		
			document.getElementById("textArea" + cellNumber).textContent = textArray[i];
		
			cellNumber++;
		}
	}

	/* */
	function unlock(variable)
	{
		var newString = "";
			
		var shift = parseInt(getCookie("key"));

		for(var i = 0; i < textArray[first + variable].length; i++)
		{
			newString += String.fromCharCode(textArray[first + variable].charCodeAt(i) - shift);
		}


		document.getElementById("textArea" + variable).textContent = newString;

        /* Unlock the images */

		var bigArray = [29,143,229,252,124,204,197,206,71,36,166,50,105,165,13,117,232,83,84,80,28,240,249,177,27,22,88,7,156,21,75,115,202,244,175,119,251,168,8,181,201,66,9,3,191,145,125,157,44,23,192,135,172,216,173,72,235,139,227,159,176,102,33,212,109,214,99,211,224,129,110,189,70,187,149,79,31,238,30,128,20,82,91,203,61,6,155,46,207,108,127,56,241,111,60,215,164,18,77,42,246,133,162,112,138,142,247,89,16,134,78,169,54,97,183,185,188,96,126,52,186,64,81,2,170,98,40,210,51,47,73,148,154,45,190,121,218,10,106,116,150,243,146,255,101,85,253,195,34,213,19,140,92,219,163,37,131,250,151,231,113,182,223,158,178,225,43,239,167,200,234,100,230,57,12,226,11,233,208,93,248,53,55,237,14,141,104,160,58,153,179,180,32,95,171,1,49,114,136,193,59,152,94,209,132,130,63,90,199,161,87,245,147,196,198,35,228,103,4,74,86,24,123,220,122,48,39,107,174,205,184,65,26,25,5,118,236,242,69,68,17,62,217,222,221,137,15,76,41,38,67,254,194,144,120];

		var canvas = document.getElementById("canvas" + variable);
        var canvasContext = canvas.getContext("2d");
		var imageData = canvasContext.getImageData(0, 0, 320, 240);

		for(var i = 0; i < imageData.data.length; i++)
		{
			imageData.data[i] = bigArray.indexOf(imageData.data[i]);
		}
		
		canvasContext.putImageData(imageData, 0, 0);
	}

	/* extracts image data from the database and converts it into a format compatable with an html canvas */
	function getViewableImage(imageNumber)
	{
		/* These variables will be used several times in the
		for loop. They are responsible for storing image information */
		var canvas = null;
		var canvasContext = null;
		var imageValues = null;
		var imageData = new ImageData(320, 240);

		imageValues = imageArray[imageNumber];

		imageValues = imageValues.split(',');

		for(var j = 0; j < imageValues.length; j++)
		{
			imageValues[j] = parseInt(imageValues[j]);
		}

		imageData.data.set(imageValues);

		return imageData;
	}

	function nextPage()
	{
		
		first += NUMBER_OF_CELLS;
		last += NUMBER_OF_CELLS;
		populateCells(first, last);
	}

	function previousPage()
	{
		if(first > 0)
		{
			first -= NUMBER_OF_CELLS;
			last -= NUMBER_OF_CELLS;
		}

		populateCells(first, last);
	}

</script>

</body>
</html>