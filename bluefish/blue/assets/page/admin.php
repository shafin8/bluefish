<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<title>  Admin </title>
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
    background-color: #AF0303;
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
  background-color:#9D0101;
  color:#fff;
}
ull {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #BA0202;
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
  
 position: absolute;


  background-size:cover;

}

h1 {
    text-shadow: 3px 2px black;
	font-size: 40px;
}
</style>
</head>

<body background="../img/gray.jpg">

<header>

      <ull>
        <lii><a  href="../../blue.php">Home</a></lii>
        <lii><a  href="priceshowE.php">Price</a></lii>
		<lii><a  href="business/alltables.php">All Data</a></lii>
        <lii><a  href="workerSignUp.php">workerSignUp</a></lii>
       
	   <lii ><a href="#"> <?php echo $_SESSION["fname"] ; echo $_SESSION["lname"] ; ?></a></lii>
       
	   <lii><a  href="logout.php">Logout</a></lii>
      </ull>
</header>
<pre>  </pre> <pre>  </pre>

<h1 style="color:white; " align="center" >

<?php
if(isset($_SESSION['fname'])) {
  echo '<a >Welcome admin '. $_SESSION["fname"] . '  '. $_SESSION["lname"] . '</a>';
   
} else {
//put login form or include here.
}
?>

</h1>




<?php

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

   
  <pre>  </pre> <pre>  </pre> 
   <hr>
<h2  " align="center" > All users Information</h2>

<?php

      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM login ";
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
