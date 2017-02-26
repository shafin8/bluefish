

<!DOCTYPE html>
<html>
<head>
<title>  egg stock show </title>
<link rel="icon" href = "../../img/fish.png" type="image/png">

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
  top: 5000px;
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
h1{
	text-align:center;
}
</style>
</head>

<body>

<header>

      <ull>
        <lii><a  href="../../../blue.php">Home</a></lii>
        <lii><a  href="../admin.php">Admin</a></lii>
        
        
      </ull>
      
</header>
<pre>  </pre><pre>  </pre>

<h1>Egg Stock </h1>
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM egg_stock"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Name</th>
      <th>Amount</th>
     
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['name'] . "</td>
  <td>" . $row['amount'] ."</td>
  
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>

<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Feed Consumption </h1>  
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM feed_consumption"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Feed Quantity</th>
      <th>Date of Consumption</th>
     
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['feed_quantity'] . "</td>
  <td>" . $row['date_of_consumption'] ."</td>
 
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>
<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Feed Stock </h1> 
 
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM feed_stock"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Category</th>
      <th>amount</th>
      <th>date</th>
     
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['category'] . "</td>
  <td>" . $row['amount'] ."</td>
  <td>" . $row['date'] . "</td>
  
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>
<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Location </h1> 
 
 
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM location"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Location Name</th>
      
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['name'] . "</td>
  
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>

<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Medicine Consumption </h1> 
 
 
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM medicine_consumption"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Date of Consumption</th>
      <th>Type</th>
      
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['date_of_consumption'] . "</td>
  <td>" . $row['type'] ."</td>
  
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>
<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Medicine Stock </h1> 
 
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM medicine_stock"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Purchase Date</th>
      <th>Medicine Type</th>
      <th>Quantity</th>
      <th>Feed Type</th>
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['purchase_date'] . "</td>
  <td>" . $row['medicine_type'] ."</td>
  <td>" . $row['quantity'] . "</td>
  <td>" . $row['feed_type'] . "</td>
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>

<pre>  </pre><pre>  </pre>
   
 <hr>  
   
 <h1>Orders </h1> 

 
<?php
      $connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
  @mysql_select_db('blue');

  $query = "SELECT * FROM orders"; //You don't need a ; like you do in SQL
  $result = @mysql_query($query);

  echo "<table>"; // start a table tag in the HTML
  ?>
  <tr>
      <th>Order Quantity</th>
      <th>Order Amount</th>
      <th>Price</th>
      <th>Status</th>
	  <th>date</th>
    </tr>
    <?php
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr>
  <td>" . $row['order_quantity'] . "</td>
  <td>" . $row['order_amount'] ."</td>
  <td>" . $row['price'] . "</td>
  <td>" . $row['status'] . "</td>
  <td>" . $row['date'] . "</td>
  </tr>";
  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

  @mysql_close(); //Make sure to close out the database connection
   ?>

 
 
 
 
  <footer>

          <h5>Blue Fish © 2016</h5>
          <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="../../img/facebook.png" border=0 height="50px"></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="../../img/twitter.png" border=0 height="50px"></a>

          <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="../../img/youtube.png" border=0 height="50px"></a>
  </footer>


</body>


</html>
