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
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														
														$('.info1').fadeIn();
														break;
												
										case '2':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info2').fadeIn();
														break;
										case '3':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info3').fadeIn();
														break;
												
										case '4':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info4').fadeIn();
														break;
										case '5':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info5').fadeIn();
														break;
												
										case '6':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info6').fadeIn();
														break;
										case '7':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info7').fadeIn();
														break;
										case '8':
														$('.info1').fadeOut();
														$('.info2').fadeOut();
														$('.info3').fadeOut();
														$('.info4').fadeOut();
														$('.info5').fadeOut();
														$('.info6').fadeOut();
														$('.info7').fadeOut();
														$('.info8').fadeOut();
														
														$('.info8').fadeIn();
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
			
				<img id="7" src="images/149361_232713183499731_2025146645_n.jpg"/>
				<img id="6" src="images/902055_137859749733747_1439481350_o.jpg"/>
				<img id="5" src="images/1234940_434934803293337_1214267398_n.jpg"/>
				<img id="4" src="images/Cinema-315x851.jpg"/>
				<img id="3" src="images/dscf1199.jpg"/>
				<img id="2" src="images/PVR-Cinema-Logo-1.jpg"/>
				<img id="1" src="images/pvr-oberoi-mall-2.jpg"/>
				<div class="box-txt" style="top:226px;width:100%;height:54px;display: block;background:black;position:absolute;opacity:0.8;">
					<p style="color:white; font-weight:bold;text-align:center;">CHILL OUT WITH YOUR BUDDIES</p>
					</div>
			</div>
			<div class="content">
			
				
			
				<div class="hangoutintro">
				
						
						<div class="foodmain" style=";width:100%;height:100%;">
						<form method="GET"action="">
							<p style="color:white;width:95%; margin:0px auto;font-family:Forte;border-radius:5px;font-size:22px;text-align:center;padding:8px;box-shadow:0px 0px 5px white;background:	#E600E6;">
							Cinema Centers &nbsp;&nbsp; &nbsp;
									
									
									<select name="searchfood" id="myselect" style="font-size:15px;font-weight:bold;width:250px;padding:4px;border-radius:10px;">
											  <option value="1">WAVE Cinemas</option>
											  <option value="2">Fun Cinemas</option>
											  <option value="3">M2K Cinemas</option>
											  <option value="4">PVR Cinemas</option>
											  <option value="5">G3S Cinemas</option>
											  <option value="6">DT Cinemas</option>
											  <option value="7">Big Cinemas</option>
											  <option value="8">Movie Times</option>
											  
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
								$result = mysqli_query($con,"SELECT * FROM theatrEs WHERE theater_names='WAVE Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='Fun Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='M2K Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='PVR Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='G3S Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='DT Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								
								<div class="info7" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='Big Cinemas'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
								  echo "</p>";
								  echo "<br/>";
								  echo "<hr/>";
								  echo "<br/>";
								  }
										
								

								

								mysqli_close($con);
								?>
														
								</div>
								
								<div class="info8" style="display:none;font-family:forte;font-size:20px;color:white;padding:55px;background:#191919;width:80%;box-shadow:0px 0px 30px white;border-radius:25px; margin:0px auto;">
								<?php
					
								$con=mysqli_connect("localhost","root","","yungistaan_database");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }
								$result = mysqli_query($con,"SELECT * FROM theatres WHERE theater_names='Movie Times'");

								
								

								while($row = mysqli_fetch_array($result))
								  {
								  echo "<p>";
								  echo "Cinema  : " . $row['theater_names'] . "</br>";
								  echo "Place  : " . $row['City'] . "</br>";
								  echo "Address  : " . $row['Address'] . "</br>";
								  echo "Phone  : " . $row['Phone'] . "</br>";
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
			
