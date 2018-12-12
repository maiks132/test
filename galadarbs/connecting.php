<!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form class="row" method="post">

        <p>

            <label for="username">User Name:</label>

            <input type="text" name="username" id="username">

        </p>

        <p>

            <label for="email">Email:</label>

            <input type="text" name="email" id="email">

        </p>

        <p>

            <label for="password">Password:</label>

            <input type="text" name="password" id="password">

        </p>

        <input type="submit" value="Submit">
<?php

error_reporting(-1);
ini_set('display_errors', 'On');


		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db = "majaslapa";
		$link = mysqli_connect($servername, $username, $password, $db);
		
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $username = mysqli_real_escape_string($link, $_REQUEST['username']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$password = mysqli_real_escape_string($link, $_REQUEST['password']);


// attempt insert query execution

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if(mysqli_query($link, $sql)){

       $last_id = mysqli_insert_id($link);

    // echo "Records inserted successfully. Last inserted ID is: " . $last_id;

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// close connection

 mysqli_close($link);

?>
    </form>

    </body>

    </html>

