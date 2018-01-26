<!DOCTYPE  html>
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
	<link rel="stylesheet" type="text/css" href="style/feedback.css"></link>
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
					<div class="image">
			
						<img id="7" src="images/feedbackhjkhklhlkl.jpg"/>
						
						<div class="box-txt" style="top:226px;width:100%;height:54px;display: block;background:black;position:absolute;opacity:0.8;">
							<p style="color:white; font-weight:bold;text-align:center;">PLEASE SUGGEST IMPROVEMENTS</p>
						</div>
					</div>
					<p style="position:absolute;color:white;left:21.7%; top:36%;text-align:center;font-family:Forte;width:55%;padding:8px;border-radius:5px;border-color:#0D0DCF;font-size:23px;text-align:center;box-shadow:0px 0px 5px white;background:	#0D0DCF;">
							PLEASE GIVE YOUR FEEDBACK </p>
					<form class="fbform" action="insert.php" method="post" style="border-radius:10px;text-shadow:0px 0px 10px white;box-shadow:0px 0px 20px white;padding:20px;font-size:25px;font-family:Forte;color:white;width:50%;margin:15%  auto  0px auto">
					<br/>Firstname: <input class="input" placeholder="Enter Your First Name"type="text" name="firstname" required="required" pattern="[a-z]*"/><br/><br/>
					Lastname: <input class="input"type="text" placeholder="Enter Your Last Name"name="lastname"/><br/><br/>
					
					Email: <input class="input"type="email"placeholder="Enter Your Email Id" name="email"required="required" /><br/><br/>
					Feedback: <input required="required"  placeholder="Enter Your Feedback"style="margin-right:20px;float:right;border-radius:15px;padding:15px;width:250px; type="text" name="feedback"/><br/><br/>
					<input class="input1"type="submit" value="SUBMIT"/>
					</form>
					
					
					
					
		</div>
		<footer style="margin-top:7%;">
				<hr/>
				<b style="color:white">YUNGISTAAN  copyright &copy; Surbhi Zalpuri 2014</b>

		</footer>
					<div style="background:white;">
					</div>
	</div>
</body>
</html>
                    
					
					
					
