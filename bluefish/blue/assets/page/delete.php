<?php

// connect to the database
// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'blue';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM price WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: priceShow.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: priceShow.php");
}

?>