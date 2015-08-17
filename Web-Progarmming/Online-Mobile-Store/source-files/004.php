<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobistore</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
		<script src="web/js/jquery-1.3.2.min.js" type="text/javascript"></script>
		<script src="web/js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="web/css/jqzoom.css" type="text/css">
		<script type="text/javascript">
			$(function() {
				$(".jqzoom").jqzoom();
			});
		</script>
		<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
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
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My account</a></li>
					
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
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="web/images/arrow.png" alt=""></li>
		    				<li><a href="#">Product</a><img src="web/images/arrow.png" alt=""></li>
		    				<li><a href="#">Product-Details</a><img src="web/images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="detalis-image">
		    		<div id="content"> <a href="web/images/m2.jpg" class="jqzoom" style="" title="IPhone"> <img src="web/images/m2.jpg"  title="IPhone" style="border: 1px solid #e5e5e5;"> </a>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		<div class="details-categories">
		    			<ul>
		    				<li><h3>Category:</h3></li>
		    				<li class="active1"><a href="#"><span>Nokia Mobiles</span></a></li>
		    				<li><a href="#">HTC Mobiles</a></li>
		    				<li><a href="#">Iphone Mobiles</a></li>
		    				<li><a href="#">Zen Mobiles</a></li>
		    			</ul>
		    		</div><br />
		    		<div class="brand-value">
		    			<h3>Product-Complete Deatils With Value</h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>$350</span></li>
			    				<li><h5>$15</h5></li>
			    				<br />
			    				<li><p>Not rated</p></li>
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
			    			<a href="#">Instock</a>
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history">
		    			<h3>Description :</h3>
		    			<p>Let's go back and start at the beginning. Every year, a new iPhone is raising the bar for the industry. Usually, it's half a point up - a full point on special occasions. The iPhone 4 was such a special occasion. The iPhone 4S is the half-point type. There probably is nothing special about it. At least, not on the outside.
No, we didn't mean that. The iPhone 4S is still one of the best looking smartphones we've seen. There's just nothing new on the outside to suggest the amount of work done on the innards. And the iOS 5 is only half of the story.</p>
		    			<a href="#">Addcart</a>
		    		</div>
		    		<div class="share">
		    			<ul>
		    				<li> <a href="#"><img src="web/images/facebook.png" title="facebook" /> FaceBook</a></li>
		    				<li> <a href="#"><img src="web/images/twitter.png" title="Twiiter" />Twiiter</a></li>
		    				
		    			</ul>
		    		</div>
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    	<div class="menu_container">
						<p class="menu_head">Tech Spec<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						<p class="menu_head">About Product<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>Lorem Ipsum is simply dummy text !!!!</p>
							</div>
					</div>
			</div>
			
		    	</div>
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
							<li><a href="#">Accord Mobiles</a></li>
							<li><a href="#">Ace Mobile</a></li>
							<li><a href="#">Acer Mobile</a></li>
							<li><a href="#">Airfone</a></li>
							<li><a href="#">Apple</a></li>
							<li><a href="#">Blackberry</a></li>
							<li><a href="#">Byond Tech</a></li>
							<li><a href="#">Celkon Mobiles</a></li>
							<li><a href="#">Dell Mobile Phones </a></li>
							<li><a href="#">Fly Mobile</a></li>
							<li><a href="#">Fujezone Mobiles </a></li>
							<li><a href="#">HTC</a></li>
							<li><a href="#">LG Mobiles</a></li>
							<li><a href="#">Longtel Mobile</a></li>
							<li><a href="#">Maxx</a></li>
							<li><a href="#">Micromax Mobiles </a></li>
							<li><a href="#">Samsung Mobiles</a></li>
							<li><a href="#">Sony Ericsson Mobiles</a></li>
							<li><a href="#">Wynncom Mobiles</a></li>
						</ul>
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

