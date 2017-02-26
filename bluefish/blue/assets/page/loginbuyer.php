<!DOCTYPE html>
<html>
<head>
<title>  Sign Up </title>
<link rel="icon" href = "../img/fish.png" type="image/png">

<style >
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

<div class="registration-form">
			<h2>Create new Employee account</h2>

			<form method="post" action="">
				<label>First Name</label>
				<input type="text" placeholder="Enter First Name" name="fname">

				<label>Last Name</label>
				<input type="text" placeholder="Enter Last Name" name="lname">

				<label>Email</label>
				<input type="text" placeholder="Enter Email" name="email">

				<label>NID Number</label>
				<input type="text" placeholder="Enter National ID Number" name="nid">

				<label>Password</label>
				<input type="password" placeholder="Enter Password" name="password">

				<label>Re-Password</label>
				<input type="password" placeholder="Enter password again" name="repassword">

				<label>Gender</label>
				<select id="gender" name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>

				<label>Date of Birth</label>
				<input type="date" id="date-of-birth" name="dob">
				<input type="submit" value=" Submit " name="submit"/><br />
			</form>
		</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (fname, lname, email, nid, password, repassword, gender, dob)
VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["nid"]."','".$_POST["password"]."','".$_POST["repassword"]."','".$_POST["gender"]."','".$_POST["dob"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>



  <footer>

          <h5>Blue Fish © 2016</h5>
          <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="../img/facebook.png" border=0 height="50px"></a>

        <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="../img/twitter.png" border=0 height="50px"></a>

          <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="../img/youtube.png" border=0 height="50px"></a>
  </footer>


</body>


</html>
