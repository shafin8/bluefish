
<?php
include_once "connection.php";
$sql="INSERT INTO price (Species,Rate,Size,Production_Session);

VALUES('".$_POST['Species']."',' ".$_POST['Rate']."',' ".$_POST['Size']."',' ".$_POST['Production_Session']."<br>";
if (mysqli_query($con, $sql)){
?>
<div style="width:70%; margin:0 auto;">
<h1>Successfully added</h1>
</div>
<?php}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con); 
?>