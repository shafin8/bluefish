<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<title>  worker </title>
<link rel="icon" href = "../img/fish.png" type="image/png">

<style media="screen">

table {
	margin-top:100px;
    margin-left:20%;
	border-collapse: collapse;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 800px;
	
	
}
th {
    background-color: #02195D;
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
  background-color:black;
  color:#fff;
}
ull {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    position: fixed;
    top: 0;
    width: 100%;
}

lii {
    float: left;
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
  right: 0px;
  margin-right: 0px;
  padding: 0px;
  
position:absolute;

  background-size:cover;

}


</style>
</head>

<body>

<header>

      <ull>
        <lii><a  href="../../blue.php">Home</a></lii>
        <lii><a  href="priceReg.php">Price</a></lii>
        <lii><a  href="business/egg_stock.php">Egg Stock</a></lii>
        <lii><a  href="business/feed_consumption.php">Feed consumption</a></lii>
		 <lii><a  href="business/feed_stock.php">Feed Stock</a></lii>
        <lii><a  href="business/location.php">Location</a></lii>
		 <lii><a  href="business/medicine_consumption.php">Medicine Consumption</a></lii>
        <lii><a  href="business/medicine_stock.php">Medicine Stock</a></lii>
		 <lii><a  href="business/orders.php">Orders</a></lii>
		 <lii><a  href="business/opening.php">Opening Closing</a></lii>
        
         <lii><a  href="logout.php">Logout</a></lii>
      </ull>
</header>

<pre>  </pre> <pre>  </pre>

<h1 style="color:black; " align="center" >

<?php
if(isset($_SESSION['fname'])) {
  echo '<a >Welcome worker '. $_SESSION["fname"] . '  '. $_SESSION["lname"] . '</a>';
   
} else {
//put login form or include here.
}
?>

</h1>


<?php
$fname=
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM login where fname = '$_SESSION[fname]'";
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>First Name</th>
      <th>Last Name</th>
	  <th>Email</th>
      <th>Nid</th>
	  <th>Gender</th>
	  <th>Date of Birth</th>
      <th>User</th>
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['fname'] . "</td>
  <td>" . $row['lname'] ."</td>
  <td>" . $row['email'] . "</td>
  <td>" . $row['nid'] . "</td>
  <td>" . $row['gender'] . "</td>
  <td>" . $row['dob'] . "</td>
  <td>" . $row['user'] . "</td>
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>



  <footer>

          <h5>Blue Fish © 2016</h5>
          <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="../img/facebook.png" border=0 height="50px"></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="../img/twitter.png" border=0 height="50px"></a>

          <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="../img/youtube.png" border=0 height="50px"></a>
  </footer>


</body>


</html>
