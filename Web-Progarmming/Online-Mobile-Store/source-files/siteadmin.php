<?php include "base.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | 404 :: W3layouts</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
	  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
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
		    	<div class="siteadmin">
				   <h4>Welcome Admin</h4>
				   <div id="main"> 
		    		 <h5> Current Store stock :</h5>
					<BR>
		    		<?php
					   $sql = "SELECT * FROM mobiles";
                       $result = $conn->query($sql);

                       if ($result->num_rows > 0) {
                            echo "<table class=\"pure-table pure-table-bordered\"><tr><th>DeviceID</th><th>Model</th><th>Manufacture</th><th>no_of_items</th></tr>";
                            
                            while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["DeviceID"]."</td><td>".$row["Model"]." </td><td>".$row["Manufacture"]."</td><td>".$row["no_of_items"]."</td></tr>";
                        }
                           echo "</table>";
                            } else {
                            echo "0 results";
                             }
                           
                  
				  
				  ?> 
						
						<BR>
						<BR>
									
							<h5>Update Database</h5>
                  <BR>
	                <form method="post" action="update.php" name="loginform" id="loginform">
							<fieldset>
								<label for="ID">DeviceID:</label><input type="text" name="deviceid" id="deviceid" required/><br />
								<label for="Model">Model:</label><input type="text" name="model" id="model" /><br />
							  <label for="Man">Manufacture:</label><input type="text" name="manu" id="manu" /><br />
							  <label for="noI">No. of Items:</label><input type="text" name="noI" id="noI" /><br />
							  
							  <input type="submit" name="action" class="login" value="Add" />
							  <input type="submit" name="action" class="login" value="Update" />
							  <input type="submit" name="action" class="login" value="Delete" />
							</fieldset>
							</form>
					   </div>
				</div>
		    	
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
			<div class="clear"> </div>
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

