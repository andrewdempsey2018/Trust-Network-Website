<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "postsdb";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) 
{
    $postText=$_POST['postText'];
	$imagedata=$_POST['imagedata'];

    $query = "INSERT INTO poststable (text, image) VALUES ('$postText', '$imagedata')";

    if(!mysqli_query($dbconnect, $query))
	{
        die('*** ERROR ***. Your post was not uploaded.');
    }
	else
	{
        echo "Your post to the Trust Social Network has been made";
    }

}

?>