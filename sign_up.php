<?php
if($_POST['Signup']=='Register')
{
 $Userid=$_POST['username'];
 $Password=$_POST['password'];
 $Name=$_POST['name'];
 $Email=$_POST['email'];
 $Mobile=$_POST['phone'];
 $Address=$_POST['address'];
 $link = mysql_connect('localhost', 'root', '',);

 if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 
$db = mysql_select_db("Gameshop"); 
if(!$db) { 
die("Unable to select database"); 
} 
$qry="Insert into Customers (Cust_id,Cust_name,Phone,Email,Address,Password) values('$Userid','$Name','$Mobile','$Email','$Address','$Password')";
$result=mysql_query(,$qry);
	
if($result == FALSE) 
echo mysql_error() . '<br>'; 
else 
{
	session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $Userid; 
header('location:home.php'); 
} 
}
?>