
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobistore</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My account</a></li>
					<li><a href="#"><span>Cart&nbsp;&nbsp;: </span></a><lable> &nbsp;Empty</lable></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="web/images/logo-2.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="store.html">Mobiles</a></li>
				<li><a href="access.html">Accessories</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	<div class="error-page">
		    		<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
 
     <h1>Member Area</h1>
     <pThanks for logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
	   <p> <a href="logout.php">Logout</a></p>
      
     <?php
}
else
{
     echo "<h1>Member Area</h1>";
     echo "<p>You are not logged in the system. Please click here to <a href=\"login.php\">Log In</a></p>";
 
}
?>

		    	</div>
		    	
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>The MobiStore is a vision to provide customers a one stop mobile solution shop that provides, multi brand handsets, accessories, connections etc all under one roof.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Hollywood , LA,California.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>NewsLetter</h3>
					<input type="text"><input type="submit" value="go" />
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Follow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="web/images/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="web/images/facebook.png" title="Facebook" />Facebook</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>Mobistore  &#169	 All Rights Reserved | Design By StormShadow</p>
		</div>
		</div>
		</div>
	</body>
</html>

