<?php
/*
Allows the user to both create new records and edit existing records
*/

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

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm( $Species = '', $Rate ='', $Size = '', $Production_Session = '', $error = '', $id = '')
{ ?>
<!DOCTYPE html>
<html>
<head>
<title>
<?php if ($id != '') { echo "Edit Price"; } else { echo "New Record"; } ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1><?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>

<form action="" method="post">
<div>
<?php if ($id != '') { ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>

<strong>Species:</strong> <input type="text" name="Species"
value="<?php echo $Species ; ?>"/><br/>
<strong>Rate: </strong> <input type="text" name="Rate"
value="<?php echo $Rate ; ?>"/><br/>
<strong>Size:</strong> <input type="text" name="Size"
value="<?php ?>"/><br/>
<strong>Production_Session: </strong> <input type="text" name="Production_Session"
value="<?php  ?>"/><br/>

<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>

<?php }



/*

EDIT RECORD

*/
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id']))
{
// get variables from the URL/form
$id = $_POST['id'];
$Species = htmlentities($_POST['Species'], ENT_QUOTES);
$Rate = htmlentities($_POST['Rate'], ENT_QUOTES);
$Size = htmlentities($_POST['Size'], ENT_QUOTES);
$Production_Session = htmlentities($_POST['Production_Session'], ENT_QUOTES);
// check that  and are both not empty
if ($Species == '' || $Rate == '' || $Size == '' || $Production_Session == '' )
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($Species, $Rate, $Size, $Production_Session, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE price SET Species = ?, Rate = ? ,Size = ?, Production_Session =?
WHERE id=?"))
{
$stmt->bind_param("ssi", $Species, $Rate, $Size, $Production_Session, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: priceshowE.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];

// get the recod from the database
if($stmt = $mysqli->prepare("SELECT * FROM price WHERE id=?"))
{
$stmt->bind_param("i", $id );
$stmt->execute();

$stmt->bind_result($id, $Species, $Rate, $Size, $Production_Session);
$stmt->fetch();

// show the form
renderForm( $Species, $Rate, $Size, $Production_Session, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the priceshow.php page
else
{
header("Location: priceshowE.php");
}
}
}



/*

NEW RECORD

*/
// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$Species = htmlentities($_POST['Species'], ENT_QUOTES);
$Rate = htmlentities($_POST['Rate'], ENT_QUOTES);
$Size = htmlentities($_POST['Size'], ENT_QUOTES);
$Production_Session = htmlentities($_POST['Production_Session'], ENT_QUOTES);

// check that  are both not empty
if ($Species == '' || $Rate == '' || $Size == '' || $Production_Session == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($Species, $Rate, $Size, $Production_Session, $error);
}
else
{
// insert the new record into the database
if ($stmt = $mysqli->prepare("INSERT price (Species, Rate, Size, Production_Session ) VALUES (?, ?, ?, ?)"))
{
$stmt->bind_param("ss", $Species, $Rate, $Size , $Production_Session );
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user
header("Location: priceshowE.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}

// close the mysqli connection
$mysqli->close();
?>