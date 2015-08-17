<?php	
function get_search()
{
	$strSQL ='';
	if(isset($_POST['searchtext'])){
		$searchtext = $_POST['searchtext'];
		
		if((string)(int)$searchtext == $searchtext) {
			$price = intval($searchtext);
			$strSQL = "SELECT m.deviceid,m.model FROM mobiles m, features f
						WHERE f.price BETWEEN $price-50 AND $price+50 AND m.DeviceID = f.DeviceID;";
			
		}
		else
		{
			$strSQL = "SELECT m.deviceid,m.model FROM mobiles m WHERE m.manufacture = '".$searchtext."' OR m.model = '".$searchtext."';";
		}

		$con = mysqli_connect("127.0.0.1", "root", "", "mobistore") or die (mysql_error ());

		

		$rs = mysqli_query($con, $strSQL);
		$mobiles = array();
		
		while($object = mysqli_fetch_object($rs))
		{
			$mobiles[] = $object;
		}

		
		$display_str="<table><tr>  <th>Sl No. </th> <th> DEVICES </th> </tr> ";
		$i=0;
		foreach($mobiles as $mobile)
		{
			if(intval($mobile->deviceid) < 50)
				$display_str.=' '."<tr> <td> ".(++$i)."</td> <td> <a href=".$mobile->deviceid.".php>".$mobile->model."</a> </td> </tr>";
			else
				$display_str.=' '."<tr> <td> ".(++$i)."</td> <td> <a href=defaultdevice.php>".$mobile->model."</a> </td> </tr>";
		}
		$display_str.=' '."</table>";

		mysqli_close($con);
		return $display_str;
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobistore</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form method="post" action ="search.php">
					<input type="text" id="searchtext" name="searchtext">
					<input type="submit" value="Search" />
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
		    <div class="error-page">
			<h4> Search Results</h4><br><br>
		    	<?php echo get_search(); ?>
		    	<!----PASTE HERE---->
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

