<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//Include confic file
require_once'conf.php';

//Define variables and initialize with empty value
$id=$password="";
$id_error=$passwird_err="";

//Processing form data when is submitted
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $id = trim($_POST["id"]);
   $password = trim($_POST["password"]);
   
//VALIDATE CREDENTIALS
if (empty($id_err)&&empty($password_err)){
session_start();
$sql = "SELECT * FROM user WHERE id=$id";
$result = $link->query($sql);

if($result->num_rows>0){

   $row=$result->fetch_assoc();
   if($row ['pwd']!= $password)
   {
    $password_err='The password you entered was not valid';
	$_SESSION['password_err']=$password_err;
	$_SESSION['id_err']=' ';
	header ("location: indexx.php"); 
	exit;
   }
   
   $_SESSION['username']=$row['name'];
   $_SESSION['id']=$row['id'];
   $_SESSION['role']=$row['role'];
   $_SESSION['password_err']=' ';
   $_SESSION['id_err']=' ';
   header("location:indexx.php");
   }
   else 
   {
   $_SESSION['password_err']=' ';
   $id_err='No account found with that id';
   $_SESSION['id_err']=$id_err;
   header("location:login.php");
   }
   }
   //close connection
   mysql_close ($link);
   }
   ?>
   
   
   
   
   
   













