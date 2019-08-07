<html>
<head>
<title>The Trust Network</title>

	<!-- Comment -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Font Awsome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(0)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(0)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(1)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(1)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(2)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(2)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(3)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(3)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(4)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(4)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(5)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(5)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(6)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(6)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(7)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(7)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(8)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(8)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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
			<div class="row offset-7 cellButtons">
				<i class="fas fa-exclamation-circle" title="Report this post" onclick="report(9)"></i>
				<i class="fas fa-unlock" title="Enter a key for this user" onclick="enterKey(9)"></i>
				<i class="fas fa-comment-dots" title="Make a post" onclick="window.location.href = 'makePost.html';"></i>
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

	//var cellLocked = [true, true, true, true, true, true, true, true, true, true];

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
			
		var shift = parseInt(getCookie(nameArray[variable] + "_key"));

		for(var i = 0; i < textArray[first + variable].length; i++)
		{
			//the if else statements here are required to eliminate symbols from
			//being processed, these were causing html to render the pages improperly
			if(textArray[first + variable].charAt(i) == " ")
			{
				newString += String.fromCharCode(textArray[first + variable].charCodeAt(i));
			}
			else
			{
				newString += String.fromCharCode(textArray[first + variable].charCodeAt(i) - shift);
			}
		}


		document.getElementById("textArea" + variable).textContent = newString;

        /* Unlock the images */

		var red = [29,143,229,252,124,204,197,206,71,36,166,50,105,165,13,117,232,83,84,80,28,240,249,177,27,22,88,7,156,21,75,115,202,244,175,119,251,168,8,181,201,66,9,3,191,145,125,157,44,23,192,135,172,216,173,72,235,139,227,159,176,102,33,212,109,214,99,211,224,129,110,189,70,187,149,79,31,238,30,128,20,82,91,203,61,6,155,46,207,108,127,56,241,111,60,215,164,18,77,42,246,133,162,112,138,142,247,89,16,134,78,169,54,97,183,185,188,96,126,52,186,64,81,2,170,98,40,210,51,47,73,148,154,45,190,121,218,10,106,116,150,243,146,255,101,85,253,195,34,213,19,140,92,219,163,37,131,250,151,231,113,182,223,158,178,225,43,239,167,200,234,100,230,57,12,226,11,233,208,93,248,53,55,237,14,141,104,160,58,153,179,180,32,95,171,1,49,114,136,193,59,152,94,209,132,130,63,90,199,161,87,245,147,196,198,35,228,103,4,74,86,24,123,220,122,48,39,107,174,205,184,65,26,25,5,118,236,242,69,68,17,62,217,222,221,137,15,76,41,38,67,254,194,144,120];

		var green = [32,118,197,240,66,204,251,239,165,177,163,58,148,232,221,205,203,4,189,117,173,55,170,135,216,96,150,131,185,16,195,46,164,49,236,166,116,8,91,104,56,139,35,13,196,130,193,28,201,244,129,122,223,101,149,235,174,191,121,106,250,23,29,9,37,3,147,103,128,209,179,225,230,198,111,85,214,86,92,81,154,219,226,124,228,90,248,125,6,229,186,222,97,160,119,143,252,5,100,65,27,105,82,233,243,120,227,202,126,142,48,107,99,36,64,31,93,137,38,109,62,19,190,51,168,68,215,178,255,67,98,242,80,78,210,169,59,47,7,153,113,213,73,69,20,180,45,237,14,76,141,40,145,200,241,26,71,175,41,234,184,151,182,2,44,156,176,194,140,158,87,188,112,53,24,162,110,115,33,63,134,61,11,84,108,254,0,102,77,75,161,70,74,89,25,155,247,34,127,146,133,187,144,95,159,245,231,157,253,54,52,211,42,132,60,88,218,12,39,72,10,15,217,192,172,17,123,207,183,114,79,94,199,181,238,220,167,249,212,50,43,22,30,136,18,1,206,138,152,208,21,224,57,171,246,83];

		var blue = [141,181,60,37,23,73,94,191,56,180,103,211,43,104,234,192,36,18,253,146,83,249,176,125,177,165,214,77,199,187,53,75,200,159,150,132,6,2,117,164,68,123,239,38,82,114,167,154,230,59,136,9,61,251,31,224,244,102,208,48,235,70,171,137,182,194,207,175,227,147,139,126,226,3,231,254,42,245,215,15,156,144,14,225,88,155,204,99,86,87,11,185,124,178,91,173,98,28,17,218,201,84,172,5,210,143,85,69,1,122,248,67,41,35,142,198,170,133,63,213,97,163,152,140,26,107,55,8,223,151,121,221,129,250,51,188,46,89,80,32,52,58,209,71,233,90,10,30,237,4,145,96,106,255,50,92,76,190,169,65,100,160,113,120,219,22,229,195,196,74,13,206,174,39,33,212,34,197,184,246,193,247,149,12,7,20,205,110,130,228,161,54,93,203,57,16,138,66,135,134,27,95,19,44,243,108,40,166,111,220,64,236,105,119,157,242,79,24,118,0,25,168,179,128,47,216,109,112,78,238,62,183,222,131,72,29,158,202,21,49,116,153,240,81,217,186,189,148,252,241,115,101,45,127,232,162];

		var canvas = document.getElementById("canvas" + variable);
        var canvasContext = canvas.getContext("2d");
		var imageData = canvasContext.getImageData(0, 0, 320, 240);

		for(var i = 0; i < imageData.data.length; i += 4)
		{
			imageData.data[i] = red.indexOf(imageData.data[i]);
			imageData.data[i + 1] = green.indexOf(imageData.data[i + 1]);
			imageData.data[i + 2] = blue.indexOf(imageData.data[i + 2]);
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

	function enterKey(argument)
	{
		var keyEntered = prompt("Please Enter the key for user " + nameArray[argument], "");
        window.alert("User " + nameArray[argument] + " trusts you!");

		document.cookie = nameArray[argument] + "_key=" + keyEntered;

		unlock(argument);
	}

	function report(postToReport)
	{
		window.confirm("Report this post?");
	}

</script>

</body>
</html>