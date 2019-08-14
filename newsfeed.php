<html>
<head>
<title>The Trust Network Newsfeed</title>

	<!-- Bootstrap includes -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Font Awsome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- Comment -->
	<link rel="stylesheet" type="text/css" href="resources/styles.css">

	<!-- util.js contains functions that are used on multiple pages of the site -->
	<script type="text/javascript" src="resources/util.js"></script> 

</head>
<body>

<!-- Bootsrap Navbar code -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<i class="fas fa-lock navbarIcon"></i>
  <a class="navbar-brand" href="newsfeed.php">The Trust Network</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="newsfeed.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="settings.html">Settings</a>
	  <a class="nav-item nav-link" href="makePost.html">Post</a>
      <a class="nav-item nav-link" href="login.html">Logout</a>
    </div>
  </div>
  <div id="welcomeText" class="welcomText"></div>
</nav>
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
				<!-- buttons are reactive -->
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
			
		var posterKey = parseInt(getCookie(nameArray[variable] + "_key"));

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
				newString += String.fromCharCode(textArray[first + variable].charCodeAt(i) - posterKey);
			}
		}


		document.getElementById("textArea" + variable).textContent = newString;

        /* Unlock the images */

		var canvas = document.getElementById("canvas" + variable);
        var canvasContext = canvas.getContext("2d");
		var imageData = canvasContext.getImageData(0, 0, 320, 240);

		var encodeArray = [];
			
        var random = new RNG(posterKey);

        var nextRandomNumber = 0;

        while(encodeArray.length < 256)
        {
            nextRandomNumber = random.nextRange(0, 256);

            if(encodeArray.indexOf(nextRandomNumber) == -1)
            {
                encodeArray.push(nextRandomNumber);
            }
        }


		for(var i = 0; i < imageData.data.length; i++)
        {
            imageData.data[i] = encodeArray[imageData.data[i]];
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