<?php
//Start the session to see if the user is authenticated user.  
//Check if the user is authenticated first. Or else redirect to login page 
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  
}
else{
	header('location:login.html');
	exit();
}
?>
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
<link  rel='stylesheet' type='text/css'>
<link  rel='stylesheet' type='text/css'>
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
			
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<h1><a href="home.php"><span>G</span>ames <span>C</span>enter</a></h1>
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="home.php"  >Home</a></li>
						<li><a class="color2" href="games.php"  >Games</a></li>
						<li><a class="color6" href="contact1.html" >Contact</a></li>
					<li>
					<form style="margin-top:5px;" action="search.php" method="post">
						<input type="text" value="search games" name="game" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" name="search" value="Search" style="background:green;" >
					</form>
				</li>
						<li><a class="color3" href="logout.php"  >Log Out</a></li>
						
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

<!--content-->
	<div class="container">
			<div class="games">
				<h2>Some Popular Games</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="9.php" data-largesrc="images/thumbs/1.jpg" data-title="Call of Duty" data-description="As a first-person shooter, Call of Duty places the player in control of an infantry soldier who makes use of various authentic World War II firearms in combat.
                            The player can save and load at any time, rather than the checkpoint system utilized in later Call of Duty games. ">
							<img class="img-responsive" src="images/thumbs/1.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="10.php" data-largesrc="images/thumbs/2.jpg" data-title="Crack Down 3" data-description="Crackdown is a third-person shooter set in a sandbox environment, akin to Mercenaries: Playground of Destruction.
 While the player may face the Kingpin and his bodyguards at any time, 
 they can improve their chances of taking out the Kingpin by facing and defeating the various Generals 
 responsible for certain aspects of the Kingpin's offense and defense, removing them from play.">
							<img class="img-responsive" src="images/thumbs/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="11.php" data-largesrc="images/thumbs/3.jpg" data-title="Pokemon Go"  data-description="Travel between the real world and the virtual world of Pokémon with Pokémon GO for iPhone and Android devices. 
 When you first play Pokémon GO, you’ll get to customize the look of your Trainer,
 choosing apparel and accessories to give him or her a cool look.
 ">
							<img class="img-responsive" src="images/thumbs/3.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="12.php" data-largesrc="images/thumbs/4.jpg" data-title="Shadow of War"  data-description="Shadow of War is an action role-playing game set in an open world environment and played from a third-person perspective, following from its predecessor.  
  The player controls the game's protagonist Talion, who has several natural athletic and combat abilities as a ranger of Gondor,  
  but also has unique abilities provided by the spirit of the elf lord Celebrimbor, with whom he shares his body.">
							<img class="img-responsive" src="images/thumbs/4.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="13.php" data-largesrc="images/thumbs/5.jpg" data-title="Fight racing"  data-description="Vehicles can be customized by the player, both visually and performance-wise. In addition to adding body parts such as hood scoops and body kits,
 players can add multiple layers of decals to the vehicles.The game is backwards compatible, and can be played on the Xbox 360,
 though as it uses the original Xbox Live service there is no online play.
 ">
							<img class="img-responsive" src="images/thumbs/5.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="14.php" data-largesrc="images/thumbs/6.jpg" data-title="Froza 7"  data-description="Vehicles can be customized by the player, both visually and performance-wise. In addition to adding body parts such as hood scoops and body kits,
 players can add multiple layers of decals to the vehicles.The game is backwards compatible, and can be played on the Xbox 360,
 though as it uses the original Xbox Live service there is no online play.">
							<img class="img-responsive" src="images/thumbs/6.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="15.php" data-largesrc="images/thumbs/7.jpg" data-title="The Amazing Spider Man-2"  data-description="The Amazing Spider-Man has an open world/free-roaming concept in this version. The combat system is reminiscent of the Rocksteady Studios-developed Batman game series (Batman: Arkham Asylum and Batman: Arkham City) using a freeflow design and counterattacks.Players can collect full, vintage comic books, such as Amazing Fantasy #15, as they collect comic covers throughout the game.">
							<img class="img-responsive" src="images/thumbs/7.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="16.php" data-largesrc="images/thumbs/8.jpg" data-title="Grand Theft Auto" data-description=" Grand Theft Auto is made up of six levels split between the three main cities. In each level, the player's ultimate objective is to reach a target number of points,
                            which is typically achieved by performing tasks for the city's local crime syndicate.">
							<img class="img-responsive" src="images/thumbs/8.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="17.php" data-largesrc="images/thumbs/9.jpg" data-title="The Amazing Spider Man-3"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/9.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="18.php" data-largesrc="images/thumbs/10.jpg" data-title="Dota 2"  data-description="Dota 2 is a multiplayer online battle arena (MOBA) video game in which two teams of five players compete to collectively destroy a large structure defended by the
 opposing team known as the Ancient, whilst defending their own.">
							<img class="img-responsive" src="images/thumbs/10.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="19.php" data-largesrc="images/thumbs/11.jpg" data-title="Assain's Creed Origins"  data-description="   Assassin's Creed is an action-adventure game set in an open world environment and played from a third-person perspective in which the player primarily 
	assumes the role of Altaïr,as experienced by protagonist Desmond Miles.">
							<img class="img-responsive" src="images/thumbs/11.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="20.php" data-largesrc="images/thumbs/12.jpg" data-title="Titan fall 2" data-description="Titanfall is a shooter game played from a first-person perspective.
 Players fight as free-running foot soldier 'pilots' who can command agile, mech-style exoskeletons—'Titans'—to complete team-based objectives.">
							<img class="img-responsive" src="images/thumbs/12.jpg" alt="img01"/>
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
	<!---->
	<div class="footer">
	<div class="footer-middle">
			
		</div>
			</div>
			<p

</body>
</html>