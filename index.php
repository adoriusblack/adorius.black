<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Begin Head -->
		<head>	
			<title>Your server name</title>
			<meta name="description" content="This is my server description.">
			<link rel="stylesheet" href="style.css" type="text/css" media="all" />
			<link rel="icon" href=".png">
		</head>
<!-- End of Head -->
		<body oncontextmenu="return false" onmousedown="return false">
<!--Begin Main -->
			<div id="main">
				<div class="logo" style="font-size: 3vw;">Your server name.</div>
				<div class="menuchanger"><a style="font-size: 3vw;" onclick="plusDivs(-1)">&#10095;</a></div>
				<div class="changemenu">
					<div id="menu">
						<button class="button"><a href="news.php">News</a></button>
						<button class="button"><a href="account.php">Account</a></button>
						<button class="button"><a href="highscore.php">Highscore</a></button>
						<button class="button"><a href="guilds.php">Guilds</a></button>
						<button class="button"><a href="download.php">Download</a></button>
						<button class="button"><a href="houses.php">Houses</a></button>
					</div>
				</div>
				<div class="changemenu">
					<div id="menu">
						<button class="button"><a href="news.php">Spells</a></button>
						<button class="button"><a href="account.php">Mounts</a></button>
						<button class="button"><a href="highscore.php">Items</a></button>
						<button class="button"><a href="guilds.php">Addons</a></button>
						<button class="button"><a href="download.php">Monsters</a></button>
						<button class="button"><a href="houses.php">NPC</a></button>
					</div>
				</div>
				<div id="content">
					<center>
						<h3 style="padding-top: 5%;">Welcome to the Adorius BlackFun Acc Maker/Wiki.</h3><br>
						<img style="width: 90%; height: auto; border-radius: 20px;"  src="adorius.black.png"><br>
						<p>1.) Adorius BlackFun Acc Maker/Wiki was born 24.5.2020.<br>
						2.) Idea of this project is create 100% working Acc Maker/Wiki and Dynamic layout based on pure CSS without images/icons inside.<br>
						3.) Project is open source for now.</br>
						4.) You can download source on <a style="color:red; text-shadow: 5px 5px 5px black;" href="#">Github</a>.</p>
					</center>
				</div>
				<div id="donation">
					<h2 style="padding-top: 10%;">Donation</h2>
					 <p style="display: inline-block";>I agree with the</p><a href="#popup" style="font-size: 1vw; color: red; text-shadow: 5px 5px 5px black;"> rules</a>.<br>
					 <input id="handle" type="checkbox">

					<div id="showSource" style="padding: 0px 0px 20px 0">
						<p>Ethereum</p><img style="width: 80%; height: auto;" src="wallets/ethereum-wallet.png">
						<p>Monero</p><img style="width: 80%; height: auto;" src="wallets/monero-wallet.png">
						<p>Bitcoin</p><img style="width: 80%; height: auto;" src="wallets/bitcoin-wallet.png">
					</div>
				</div>
				<div class="footer">® Adorius Black 2020</div>
				<div class="github"><a href="#">Github</a></div>

			</div>
<!-- End of Main -->
			<div class="slideleft"><a style="font-size: 2vw;" href="#">&#10094;</a></div>
			<div class="slideright"><a style="font-size: 2vw;" href="#">&#10095;</a></div>

			<div id="popup" class="overlay">
    			<div class="popup">
    				<h2>Donation Rules</h2><a class="close" href="#">&times;</a>
    				<div class="popupcontent">
    							1.) By donating you understand that a donation is a gift to support Adorius.Black.<br>
    							2.) You cannot expect anything back in return and you cannot take back donation which you have already sent.<br>
    							3.) You understand that here is not benefits from donating.<br>
    							4.) Adorius.Black can change "Donation rules" anytime he wants.<br>
    				</div>
    			</div>
   			 </div>
		</body>
<!-- Show Source -->
		<script>var slideSource = document.getElementById('showSource');
				document.getElementById('handle').onclick = function () {
  				slideSource.classList.toggle('show');}</script>
<!-- End of Show Source -->
<!-- Changemenu -->
  		<script>
  		var slideIndex = 1;
  		showDivs(slideIndex);
  		function plusDivs(n) {showDivs(slideIndex += n);}
  		function showDivs(n) {	var i;
    						  	var x = document.getElementsByClassName("changemenu");
    							if (n > x.length) {slideIndex = 1}
    							if (n < 1) {slideIndex = x.length}
    							for (i = 0; i < x.length; i++) {x[i].style.display = "none";}
    							x[slideIndex-1].style.display = "block";}
  		</script>
<!-- End of Changemenu-->
</html>
