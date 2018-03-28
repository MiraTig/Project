<?php
//Initialize the session
session_start ();

//UNSET ALL OF YHE SESSION VARIABLES
$_SESSION=array ();

//Dectroy the session
session_destroy ();

//Redivect to login page
header ("location:indexx.php");
exit;
?>