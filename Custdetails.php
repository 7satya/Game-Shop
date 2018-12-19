 
<html>
<head>
<title>Games Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body> 
<!--header-->	
<div class="header" >
		
		</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="index.html"><span> G</span>ames <span>C</span>enter</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="home.php"  >Home</a></li>
						<li><a class="color2" href="games.php"  >Games</a></li>
						<li><a class="color3" href="history.php"  >History</a></li>
						<li><a class="color6" href="contact1.php" >Contact</a></li>
					<li>
					<form style="margin-top:5px;" action="search.php" method="post">
						<input type="text" value="search games" name="game" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" name="search" value="Search" style="background:green;" >
					</form>
				</li>
						<li><a class="color3" href="logout.php"  >Log Out</a></li>
				
					</ul>
                </div>
				</div>
				</div>
				</div>
</body>
</html>
 <?php  
 session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
 
//Connect to mysql server 
$link = mysql_connect('localhost','root','');
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('Gameshop');
if(!$db){ 
die("Unable to select database"); 
} 
//Prepare query 
$Customer_id =$_SESSION['USER_ID'];
//Pass =$_POST['Password'];
$query="SELECT Cust_id,Cust_name,Phone,Email,Address FROM Customers WHERE Cust_id ='$Customer_id'";
//Execute query 
$result = mysql_query($query);
echo "<center><h1>Customer details</h1>";
echo "<table border='1' cellpadding = '10'> 
<tr><th>Customer Id</th> 
<th>Customer Name</th> 
<th>Phone Number</th>
<th>Email Id</th>
<th>Address</th> 
</tr>";   

while($row = mysql_fetch_array($result)) 
 
{ 
echo "<tr><td>" . $row['Cust_id'] . "</td> 
<td>" . $row['Cust_name']."</td> 
<td>" . $row['Phone'] . "</td> 
<td>" . $row['Email'] . "</td> 
<td>" . $row['Address'] . "</td> 
</tr>"; 
echo "<br/>"; 
} 
echo "</table></center>";
}

else 
{ 
include("login.html"); 
echo "<center>Enter the customer name</ center>"; 
} 

?>
