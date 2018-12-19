<?php
session_start();
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
  
}
else{
   header('location:index.php');
   exit();
 }
 ?>
<html>
<head>
<title>Games Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>

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
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >	
			
				
			
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="home.php"><span> G</span>ames <span>C</span>enter</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="home.php"  >Home</a></li>
						<li><a class="color2" href="games.php"  >Games</a></li>
						<li><a class="color3" href="Custdetails.php"  >Account</a></li>
						<li><a class="color5" href="logout.php"  >Log Out</a></li>
						<li><a class="color6" href="contact1.php" >Contact</a></li>
						<li>
					<form style="margin-top:5px;" action="search.php" method="post">
						<input type="text" value="search games" name="game" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" name="search" value="Search" style="background:green;" >
					</form>
				</li>
						
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->

	<div class="banner">
<div class="container">	
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<div class="banner-top">
							<img src="images/12.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/11.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
				   
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
							<img src="images/14.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/13.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
							<div class="banner-top">
							<img src="images/16.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/15.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	</div>
<!--content-->
<div class="content">
	<div class="container">
			<div class="content-top">
				<h2 class="new">NEW GAMES</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="1.php" data-largesrc="images/1.jpg" data-title="Subway Surfers" data-description="Subway Surfers is an endless runner mobile game co-developed by Kiloo and SYBO Games, private companies based in Denmark. It is available on Android, iOS, Kindle, and Windows Phone platforms. Players of the game take the role of teenage hooligans who, upon being caught in the act of applying graffiti to (tagging) a metro railway site, run down the tracks to escape the Inspector and his dog. As the hooligans run, they grab gold coins out of the air while simultaneously dodging collisions with railway cars and other objects, and can also jump on top of the trains to evade capture. Special events, such as the Weekly Hunt, can result in in-game rewards.">
							<img class="img-responsive" src="images/1.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="2.php" data-largesrc="images/2.jpg" data-title="Angry Birds" data-description="Angry Birds is a video game franchise created by Finnish company Rovio Entertainment. The series focuses on multi-colored birds who try to save their eggs from green-colored pigs, their enemies. Inspired by Crush the Castle, the game has been praised for its successful combination of fun gameplay, comical style, and low price. Its popularity led to many spin-offs, versions of Angry Birds being created for PCs and gaming consoles, a market for merchandise featuring its characters, a televised cartoon series, and a feature film. In January 2014 there had been over two billion downloads across all platforms, including both regular and special editions as of July 2015, the series’ games have been downloaded more than three billion times collectively,making it the most downloaded freemium game series of all time.">
							<img class="img-responsive" src="images/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="3.php" data-largesrc="images/3.jpg" data-title="Moto Racer"  data-description="Moto Racer features a total of eight tracks, four of which are unlockable. A multiplayer option is also available, allowing two players to compete over a LAN; Split Screen on the PlayStation version. The single player modes include "Time Attack" and "Championship.". The most laps a player can do is up to eight on the Practice Race. In era of microsoft windows 98 moto racer game was hugly played in computers in subcontinent.">
							<img class="img-responsive" src="images/3.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="4.php" data-largesrc="images/4.jpg" data-title="Temple Run"  data-description="Temple Run is a  endless running video game developed and published by Imangi Studios.It is produced, designed and programmed by husband-and-wife team Keith Shepherd and Natalia Luckyanova,and with art by Kiril Tchangov.The game was initially released for iOS devices, and later ported to Android systems and Windows Phone.">
							<img class="img-responsive" src="images/4.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="5.php" data-largesrc="images/5.jpg" data-title="Need For Speed Most Wanted"  data-description="Need for Speed: Most Wanted is set in an open world environment. The game takes on the gameplay style of the first Most Wanted title in the Need for Speed franchise. Most Wanted allows players to select one car and compete against other racers in three types of events: Sprint races, which involves traveling from one point of the city to another, Circuit races, each having two or three laps total and Speed runs, which involve traversing through a course in the highest average speed possible.">
							<img class="img-responsive" src="images/5.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="6.php" data-largesrc="images/6.jpg" data-title="Street Fighter"  data-description="Street Fighter X Tekken is a crossover fighting game developed by Capcom and released in March 2012 for the PlayStation 3 and Xbox 360, in May for the PC and in October for the PlayStation Vita. The game features characters from both the Street Fighter franchise and Namco's Tekken series. In the game, players select two characters and face other duos in tag team fighting matches, in which the objective is to knock out one of the members from the opposing team. In addition to the game's multiplayer modes, the game also features a single-player Story mode with a plot revolving around a mysterious object called the "Pandora".">
							<img class="img-responsive" src="images/6.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="7.php" data-largesrc="images/7.jpg" data-title="Prince Of Persia"  data-description="Prince of Persia is a video game franchise created by Jordan Mechner, originally developed and published by Brøderbund, then The Learning Company, and currently Ubisoft. The franchise is built around a series of action-adventure games focused on various incarnations of the eponymous prince. The first game in the series was designed by Mechner after the success of his previous game with Brøderbund, Karateka. The title was successful enough to spawn two sequels: the series has been rebooted twice since its acquisition by Ubisoft, and has been successful enough to warrant a film adaptation, penned in part by Mechner and released by Walt Disney Pictures in 2010.">
							<img class="img-responsive" src="images/7.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="8.php" data-largesrc="images/8.jpg" data-title="Panda in the desert" data-description="Two cute chinese panda go across the desert to Egypt. The pandas will overcome all kinds of hardships and dangers themselves, use the wonderful organ to reach transfer door . Eventually beat the evil mummy in Pyramid.">
							<img class="img-responsive" src="images/8.jpg" alt="img01"/>
						</a>
					</li>
					 <div class="clearfix"> </div>
					</ul>
				</div>
			</div>
		</div>
<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
		<!----->
		<div class="col-mn">
			<div class="container">
					<div class="col-mn2">
						<h3>The Best Features Games</h3>
						<p>Online game culture sometimes faces criticisms for an environment that might promote cyberbullying, violence, and xenophobia. Some gamers are also concerned about gaming addiction or social stigma.Online games have attracted players from a variety of ages, nationalities, and occupations.Online game content can also be studied in scientific field, especially gamers' interactions within virtual societies in relation to the behavior and social phenomena of everyday life.</p>
						
				</div>
			</div>
		</div>
		<!---->
		
					

</body>
</html>