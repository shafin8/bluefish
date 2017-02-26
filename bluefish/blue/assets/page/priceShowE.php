<!DOCTYPE html>
<html>
<head>
<title>  price list </title>
<link rel="icon" href = "../img/fish.png" type="image/png">

<style >
table {
	margin-top:100px;
    margin-left:20%;
	border-collapse: collapse;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 800px;
	
	
}
th {
    background-color: #4CAF50;
    color: white;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
footer{
  position: absolute;
  top: 1000px;
  width: 100%;
  margin: 0;
  padding:20px;
  right: 0px;
  margin-right: 0;
  text-align:center;
  background-color:#003447;
  color:#fff;
}
ull {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #003447;
    position: fixed;
    top: 0;
    width: 100%;
}

lii {
    float: right;
}

lii a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

lii a:hover:not(.active) {
    background-color: #335166;
}

.active {
    background-color: #335166;

}

header{
  top: 50px;
  margin: 0px;
  left: 0px;
  margin-left: 0px;
  margin-top: 30px;
  right: 0px;
  margin-right: 0px;
  padding: 0px;
  position: absolute;


  background-size:cover;

}

input[type=text], input[type=password], input[type=date], select {
    padding: 12px 20px;
    margin: 8px 0;
	  width: 100%;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}





.registration-form {
	margin: 55px 0px;
	background-color: #f2f2f2;
	padding: 20px;
}

</style>
</head>

<body>

<header>

      <ull>

        <lii><a  href="about.php">About</a></lii>
        <lii><a  href="contacts.php">Contact</a></lii>
        <lii><a  href="faq.php">FAQ</a></lii>
        <lii><a  href="../../blue.php">Home</a></lii>
      </ull>
      
</header>

<?php
     

  echo "<table>"; // start a table tag in the HTML
  ?>
  
    <?php
// connect to the database
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'blue';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM price ORDER BY id"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<tr><th>Species</th><th>Rate</th><th>Size</th><th>Production_Session</th><th>Edit</th><th>Delete</th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";

echo "<td>" . $row->Species . "</td>";
echo "<td>" . $row->Rate . "</td>";
echo "<td>" . $row->Size . "</td>";
echo "<td>" . $row->Production_Session . "</td>";
echo "<td><a href='records.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>




  <footer>

          <h5>Blue Fish © 2016</h5>
          <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="../img/facebook.png" border=0 height="50px"></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="../img/twitter.png" border=0 height="50px"></a>

          <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="../img/youtube.png" border=0 height="50px"></a>
  </footer>


</body>


</html>
