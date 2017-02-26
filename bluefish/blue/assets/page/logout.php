<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../../blue.php"); // Redirecting To Home Page
}
?>