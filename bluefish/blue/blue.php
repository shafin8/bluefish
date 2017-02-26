<!DOCTYPE html>
<html>



  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page </title>
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="icon" href = "assets/img/fish.png" type="image/png">

  </head>


 <body>

   <header>
     <nav>
      <ul>

        
        <li><a href="assets/page/news.php">News</a></li>
		<li><a href="assets/page/features.php">Features</a></li>
        <li><a href="assets/page/product.php">Products</a></li>
        
		
        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>

      </ul>






      <div id="id01" class="modal">
<div id="Sign-In"> 
        <form class="modal-content animate" method="POST" action="">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="assets/img/login.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <input id="button" type="submit" name="submit" value="Log-In" class="s" >
			
			
            <input type="checkbox" checked="checked"> Remember me
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			 <button type="button"  class="cancelbtn"><a href="assets/page/loginbuyer.php" style="text-decoration:none">Sign Up</a></button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
		</div>
		<?php 
 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'blue');
 define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . @mysql_error()); 
$db=@mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . @mysql_error()); 
/* $ID = $_POST['email']; 
$Password = $_POST['password']; */

 function SignIn() { 
session_start(); 
//starting the session for user profile page 
if(!empty($_POST['email']))
 //checking the 'user' name which is from Sign-In.html, is it empty or have some text
 { $query = @mysql_query("SELECT * FROM login where email = '$_POST[email]' AND password = '$_POST[password]' ") or die(@mysql_error()); 

 $row = @mysql_fetch_array($query) or die(@mysql_error()); 
if(!empty($row['email']) AND !empty($row['password'])) { 
$_SESSION['email'] = $row['password'] ;
 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
 

 
 if($row['user'] == "admin"){
	 $_SESSION["fname"] = $row['fname'];
	 $_SESSION["lname"] = $row['lname'];
	 
 header("Location: assets/page/admin.php"); }

else if($row['user'] == "worker"){
	 $_SESSION["fname"] = $row['fname'];
	 $_SESSION["lname"] = $row['lname'];
 header("Location: assets/page/worker.php"); } 
else  {
	 $_SESSION["fname"] = $row['fname'];
	 $_SESSION["lname"] = $row['lname'];
header("Location: assets/page/buyer.php"); }


}

else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";

 } } } 
if(isset($_POST['submit'])) { 
SignIn();
 } ?>
      </div>

      <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>








    </nav>


   <header>



<logo>
  <img src="assets/img/fish.png" alt="logo" style="width:80px;height:80px;" >
 <h1>BlueFish</h1> </logo>

  <p class="hh" style="font-size:100px "  >WELCOME</p>
  <p class="hh" style="font-size:80px"  >Blue Fish Hatchery</p>

  <ull>

    <lii><a  href="assets/page/about.php">About</a></lii>
    <lii><a  href="assets/page/contacts.php">Contact</a></lii>
    <lii><a  href="assets/page/faq.php">FAQ</a></lii>
    <lii><a class="active" href="blue.php">Home</a></lii>
  </ull>

 </header>

 <overview style="max-width: 600px">
 
   <h1 style="color: #4CAF50">Blue Fish Hatchery.</h1>
   <hr>
   <h3>
     The Blue Fish Hatchery was established in 1928 as a satellite rearing station and converted to the state's main salmon hatchery in 1972. This facility raises coho and Chinook salmon and is the main egg take station for coho salmon in the Upper Great Lakes. In 2003, the facility went through a major renovation project that included replacement of the entire outside raceway complex, installation of a new effluent treatment system, and water flow monitoring systems installation. The interpretative facilities provide information on the importance of medium sized rivers to the Great Lakes, the salmon story, how watersheds work and how a hatchery operates.
</h3>
<h3>
 Come face to face with the Region's trout, explore karst terrain, and see our exhilarating exhibit hall! Much more awaits the entire family in a fun and engaging educational journey at Blue Fish Hatchery! Visitors are welcome to tour the hatchery, Visitor/Environmental Education Center, and to fish in the creek! Hatchery grounds are open 365 days a year while the Visitor/Environmental Education Center remains open 364 days annually .FREE visitation! Make plans today to get connected with nature at Blue Fish Hatchery.

   </h3>
   
 </overview>



        <div id="container">
          <div  style="max-width:580px">
<img class="mySlides" src="assets/img/fish/1.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/2.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/3.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/4.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/5.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/6.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/7.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/8.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/9.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/10.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/11.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/12.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/13.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/14.jpg" style="width:100%">
<img class="mySlides" src="assets/img/fish/15.jpg" style="width:100%">
</div>
         </div>

         <script>
         var myIndex = 0;
         carousel();

         function carousel() {
             var i;
             var x = document.getElementsByClassName("mySlides");
             for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
             }
             myIndex++;
             if (myIndex > x.length) {myIndex = 1}
             x[myIndex-1].style.display = "block";
             setTimeout(carousel, 2000); // Change image every 2 seconds
         }
         </script>
		 
 <columnn>
 
 <p class="hh" style="font-size:40px "  >Thoughts of our customers....</p>
 <p class="hhh" style="font-size:30px "  >Blue Fish Hatchery is awesome,</p>
  <p class="hhh" style="font-size:30px "  >I am very happy ,keep it up. </p>
  <p class="hhhh" style="font-size:20px "  >" ***** "</p>
 </columnn>
<column>
  <a target="_blank" title="Jiban Khan" href="assets/page/director1.php"><img alt="follow me on facebook" src="assets/img/av4.png" border=0 height="200px" hspace="50" vspace="40" ></a>

  <a target="_blank" title="Shafin Haq" href="assets/page/director2.php"><img alt="follow me on twitter" src="assets/img/av2.png" border=0 height="200px"  hspace="50" vspace="40"></a>

    <a target="_blank" title="sadman Hasan" href="assets/page/ceo.php"><img alt="follow me on twitter" src="assets/img/av3.png" border=0 height="200px"  hspace="50" vspace="40"></a>

  <a target="_blank" title="Wordh Hasan" href="assets/page/md.php"><img alt="follow me on twitter" src="assets/img/av1.png" border=0 height="200px" hspace="50"  vspace="40"></a>

</column>






   <footer>

           <h5>Blue Fish © 2016</h5>
           <a target="_blank" title="find us on Facebook" href="http://www.facebook.com"><img alt="follow me on facebook" src="assets/img/facebook.png" border=0 height="50px"></a>

         <a target="_blank" title="follow me on twitter" href="http://www.twitter.com"><img alt="follow me on twitter" src="assets/img/twitter.png" border=0 height="50px"></a>

           <a target="_blank" title="follow me on twitter" href="http://www.youtube.com"><img alt="follow me on twitter" src="assets/img/youtube.png" border=0 height="50px"></a>

   </footer>
 </body>

   </html>
