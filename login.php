<?php

/* these variables will be used to
connect to the database containing
user credentials */
$hostname = "localhost";
$username = "root";
$password = "";
$db = "users";

/* connect to MariaDB */
$dbconnect = mysqli_connect($hostname, $username, $password, $db) or die("Problem connecting to database");

/* action to take in case the database is not found */
if($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}

/* select the specified database and find , userlist table,
extract the contents of tat table into a variable & 
handle error in case table is not found */
$query = mysqli_query($dbconnect, "SELECT * FROM userlist") or die (mysqli_error($dbconnect));

/* these three arrays will be used
to seperate the individual columns that
were extracted from the table */
$email = array();
$password = array();
$username = array();

/* thr array_push method assigns a value to an array
in this case, the value being assigned is the column
of information denoted by the 'row' argument */
while ($row = mysqli_fetch_array($query))
{
    array_push($email, $row['email']);
    array_push($password, $row['password']);
    array_push($username, $row['username']);
}

/*get the input that was entered into the "user name" field
and assign it to a variable */
$emailFromLogin=$_POST['email'];

/*get the input that was entered into the "password" field
and assign it to a variable */
$passwordFromLogin=$_POST['password'];

/* find the index of the email address entered
this index can then be used to search the email array
and the username array in order to asertain the 
corresponding values */
$indexOfUser = array_search($emailFromLogin, $email);

//
if($passwordFromLogin == $password[$indexOfUser])
{
	//on successful login, rediredt user to main newsfeed
	echo "Sucsess";
	header("Location: newsfeed.php");
}
else
{
	//failing login, inform the user
	echo "Username or password entered incorrectly";
}

?>