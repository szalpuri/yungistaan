<!Doctype html>
<html>
	<head>
	<script src="jquery.min.js"/>
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
	<script type="text/javascript">
	
	$(function() {
			$("#tfq2b").click(function() {
				if ($("#tfq2b").val() == "Search Google"){
					$("#tfq2b").val(""); 
				}
			});
		});
	</script>
	<script>
		$(document).ready(function(){
		
		
		$('.click1').click(function(){
								$a=$("#myselect" ).val();
								switch($a){
				
										case '1':
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														
														$('.info1').fadeIn();
														break;
												
										case '2':
														$('.info1').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info2').fadeIn();
														break;
										case '3':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info3').fadeIn();
														break;
												
										case '4':
														$('.info1').fadeOut();
														$('.info3').fadeOut();
														$('.info2').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info4').fadeIn();
														break;
										case '5':
														$('.info1').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info2').fadeOut();
														$('.info6').fadeOut();
														$('.info5').fadeIn();
														break;
												
										case '6':
														$('.info1').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info2').fadeOut();
														$('.info6').fadeIn();
														break;


										}
				
				});
		

			function loop(){
		  $('#1').fadeOut(3000, function(){
			$('#2').fadeOut(3000, function(){
				$('#3').fadeOut(3000, function(){
					$('#4').fadeOut(3000, function(){
						$('#5').fadeOut(3000, function(){
							$('#6').fadeOut(3000, function(){
								
									$('#1').fadeIn().css({"z-index":"0"});
									$('#7').fadeOut(2000, function(){
											$('#2').fadeIn();
											$('#3').fadeIn();
											$('#4').fadeIn();
											$('#5').fadeIn();
											$('#6').fadeIn();
											$('#7').fadeIn();
										loop();
									});
								
							});
						});	
					});
				});
			});
		  });
		}
		loop();
		
		
		//next and back code
		
		/*$('.click1').click(function(){
					$('.wall1').fadeOut();
					$('.wall2').fadeIn();
		
				
				});
				$('.click2').click(function(){
					$('.wall2').fadeOut();
					$('.wall3').fadeIn();
		
				
				});
				$('.click3').click(function(){
					$('.wall3').fadeOut();
					$('.wall4').fadeIn();
		
				
				});
				$('.click4').click(function(){
					$('.wall4').fadeOut();
					$('.wall5').fadeIn();
		
				
				});
				$('.click5').click(function(){
					$('.wall5').fadeOut();
					$('.wall1').fadeIn();
		
				
				});
				/*$('.click6').click(function(){
					$('.wall6').fadeOut();
					$('.wall7').fadeIn();
		
				
				});
				$('.click7').click(function(){
					$('.wall7').fadeOut();
					$('.wall8').fadeIn();
		
				
				});
				$('.click8').click(function(){
					$('.wall8').fadeOut();
					$('.wall9').fadeIn();
		
				
				});
				
				$('.click9').click(function(){
					$('.wall9').fadeOut();
					$('.wall10').fadeIn();
		
				
				});
				$('.click10').click(function(){
					$('.wall10').fadeOut();
					$('.wall1').fadeIn();
		
				
				});
					$('.click12').click(function(){
					$('.wall2').fadeOut();
					$('.wall1').fadeIn();
		
				
				});
				$('.click13').click(function(){
					$('.wall3').fadeOut();
					$('.wall2').fadeIn();
		
				
				});
			
				$('.click14').click(function(){
					$('.wall4').fadeOut();
					$('.wall3').fadeIn();
		
				
				});
				$('.click15').click(function(){
					$('.wall5').fadeOut();
					$('.wall4').fadeIn();
		
				
				});
				('.click16').click(function(){
					$('.wall6').fadeOut();
					$('.wall5').fadeIn();
		
				
				});
				$('.click17').click(function(){
					$('.wall7').fadeOut();
					$('.wall6').fadeIn();
		
				
				});
				$('.click18').click(function(){
					$('.wall8').fadeOut();
					$('.wall7').fadeIn();
		
				
				});
				
				$('.click19').click(function(){
					$('.wall9').fadeOut();
					$('.wall8').fadeIn();
		
				
				});
				$('.click110').click(function(){
					$('.wall10').fadeOut();
					$('.wall9').fadeIn();
		
				
				});*/
				
				
				
			var monthNames = [ "January", "February", "March", "April", "May", "June",
			"July", "August", "September", "October", "November", "December" ];
			var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

			var newDate = new Date();
				newDate.getDate();    
			$('#Date').html("Date"+ " " + ":" + " " +dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
		});
	</script>
	<link rel="stylesheet" type="text/css" href="style/mystyle.css"></link>
	<link rel="stylesheet" type="text/css" href="style/hangouts.css"></link>
	</head>
	<body>
	
	<div class="wrapper">
		<header>
		<div class="bar">
			<img class="logo" src="images/logo.jpg" style="width:160px; height:110px;margin-left:10px;"/>
			<div class="sitename">
		
			All in one Entertainment Stop!<br/>
			Music! Masti! Love & Dosti!
			
			</div>
			<div id="tfheader">
				<form id="tfnewsearch" method="get" action="http://www.google.com">
						<input type="text" id="tfq2b" class="tftextinput2" name="q" size="21" maxlength="120" placeholder="Search Google"><input type="submit" value=">" class="tfbutton2">
				</form>
				<div class="tfclear"></div>
			</div>
			<div id="Date" style="color:white;font-weight:bold;font-size:20px;font-style:italic;float:right; margin-top:-100px;width:260px;height:20px;"></div>
			
		</div>

		<div class="nav" >
		 <ul class="menu">
			<li><a href="home.html">Home</a>
				
			<li>
			<li><a href="music.html">Music</a>
				<ul>
					<li><a href="english.html">English</a></li>
					<li><a href="bollywood.html">Bollywood</a></li>
					<li><a href="punjabi.html">Punjabi</a></li>
				</ul>
			</li>
			<li><a href="gallery.html">Gallery</a>
				<ul>
					<li><a href="videos.html">Videos</a></li>
					<li><a href="wallpapers.html">Wallpapers</a></li>
				</ul>
			
			</li>
			<li><a href="books.html">Books</a>
				<ul>
					<li><a href="hp.html">HarryPotter</a></li>
					<li><a href="twilight.html">Twilight</a></li>
					<li><a href="tvd.html">TVD</a> </li>
					<li><a href="hungergames.html">HungerGames</a></li>
					
					
				</ul>
			</li>
			<li><a href="quotes.html">Quotes</a>
				<ul>
					<li><a href="frnshpq.html">Frienship</a></li>
					<li><a href="loveq.html">Love</a></li>
					<li><a href="brkupq.html">Breakup</a></li>
					<li><a href="funnyq.html">Humour</a></li>
				</ul>
			</li>
			<li><a href="hangouts.html">Hangouts</a>
				<ul>
					<li><a href="food.php">Food</a></li>
					<li><a href="theatre.php">Theaters</a></li>
					<li><a href="malls.php">Malls</a></li>
					<li><a href="adventure.php">FunSpots</a></li>
				</ul>
			<li><a href="feedback.php">Feedback</a>
				
			</li>
		</ul>
		</div>
		</header>
		<div class="body">
			<div class="slideshow">
			
				<img id="7" src="images/482322_555890131097842_630184747_n.jpg"/>
				<img id="6" src="images/556369_357069397669333_1109529630_n.jpg"/>
				<img id="5" src="images/1526109_10151777616561486_1663016410_n.png"/>
				<img id="4" src="images/coffee-facebook-cover.jpg"/>
				<img id="3" src="images/dominos-pizza-657x245.jpg"/>
				<img id="2" src="images/Mcdonald’s-Restaurants-Ottawa-315x851.jpg"/>
				<img id="1" src="images/o-DE-CAFE-BARISTAS-facebook.jpg"/>
				<div class="box-txt" style="top:226px;width:100%;height:54px;display: block;background:black;position:absolute;opacity:0.8;">
					<p style="color:white; font-weight:bold;text-align:center;">CHILL OUT WITH YOUR BUDDIES</p>
					</div>
			</div>
			<div class="content">
			
				
			
				<div class="hangoutintro">
				
						
						<div class="foodmain" style=";width:100%;height:100%;">
						<form method="GET"action="">
							<p style="color:white;width:95%; margin:0px auto;font-family:Forte;border-radius:5px;font-size:22px;text-align:center;padding:8px;box-shadow:0px 0px 5px white;background:	#E600E6;">
							Food Centers &nbsp;&nbsp; &nbsp;
									
									<select name="searchfood" id="myselect" style="font-size:15px;font-weight:bold;width:250px;padding:4px;border-radius:10px;">
											  <option value="1">KFC Centers</option>
											  <option value="2">McDonalds Centers</option>
											  <option value="3">Pizza Hut</option>
											  <option value="4">Domino's Pizza</option>
											  <option value="5">Haldiram's</option>
											  <option value="6">Cafe Coffee Day</option>
									</select> &nbsp; &nbsp;
									<a  href="#"class="click1"style="text-decoration:none; color:black;"> Go
									<img  style="margin-bottom:-5px;width:30px; height:30px; "src="images/008004-glossy-black-icon-arrows-arrowhead-solid-right.png"/></a>
									</form>
									
							
							</p><br/>
							
								
								<div class="info1" style="font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='KFC'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								<div class="info2" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='McDonalds'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								<div class="info3" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='Pizza Hut'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								<div class="info4" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='Dominos Pizza'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								 
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								<div class="info5" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='Haldirams'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								<div class="info6" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM food_centers WHERE name='Cafe Coffee Day'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Center  :" . $row['Name'] . "</br>";
								  echo "Place  :" . $row['City'] . "</br>";
								  echo "Address  :" . $row['Address'] . "</br>";
								  echo "Phone  :" . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								
						</div>
						
				
				
				</div><br/><br/>
				<div class="box1">
					<a href="food.php" style="color:white; text-decoration:none;font-family:Forte;font-size:20px;text-align:center;">
					Food Places
					</a>
				</div>
				<div class="box2">
				<a href="theatre.php" style="color:white; text-decoration:none;font-family:Forte;font-size:20px;text-align:center;">
					Movie Cinemas
					</a>
				
				</div>
				<div class="box3">
				<a href="malls.php" style="color:white; text-decoration:none;font-family:Forte;font-size:20px;text-align:center;">
					Shopping Malls
					</a>
				
				</div>
				<div class="box4">
				<a href="adventure.php" style="color:white; text-decoration:none;font-family:Forte;font-size:20px;">
					Adventure Spots
					</a>
				
				</div>
				
			
			</div>
		
		</div>
		<footer style="margin-top:10%">
				<hr/>
				<b style="color:white">YUNGISTAAN  copyright &copy; Surbhi Zalpuri 2014</b>

		</footer>
	</div>
</body>
</html>
			
