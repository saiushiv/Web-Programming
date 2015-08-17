<?php include "base.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
	  <script type="text/javascript" src="web/js/validsc.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	  <script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="web/images/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
			
	});

$("#email").keyup(function (e) {
	
		//removes spaces from email
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var email = $(this).val();
		if(email < 4){$("#user-result2").html('');return;}
		
		if(email.length >= 13){
			$("#user-result2").html('<img src="web/images/ajax-loader.gif" />');
			$.post('check_email.php', {'email':email}, function(data) {
			  $("#user-result2").html(data);
			});
		}
			
	});	
	
	// To Live check the password
 
  $('input[type=password]').keyup(function() {
    
	var pswd = $(this).val();

	if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
     } else {
    $('#length').removeClass('invalid').addClass('valid');
     }
	 //validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
	 
}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();

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
			<BR>
			<BR>
			<BR>
		    	<div id="main">
		    		<?php
                           if(!empty($_POST['username']) && !empty($_POST['password']))
                             {
                                 $username = mysql_real_escape_string($_POST['username']);
                                 $password = md5(mysql_real_escape_string($_POST['password']));
                                 $email = mysql_real_escape_string($_POST['email']);
                                 $address = mysql_real_escape_string($_POST['address']);
								 $fname = mysql_real_escape_string($_POST['fname']);
                                 $lname  = mysql_real_escape_string($_POST['lname']);
								 
                                 $checkusername = "SELECT * FROM users WHERE Username = '".$username."'";
								 $result1 = $conn->query($checkusername);
      
                                 if($result1-> num_rows >0)
                                    {
                                         echo "<h1>Error</h1>";
                                         echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
                                    }
                               else
                                   {
                                         $registerquery = "INSERT INTO users (Username, Password, Email,Address,Fname,Lname) VALUES('".$username."', '".$password."', '".$email."','".$address."','".$fname."','".$lname."')";
										 $result2 = $conn->query($registerquery);
                                         if(!mysqli_error($conn))
                                            {
                                               echo "<h1>Success</h1>";
                                               echo "<p>Your account was successfully created. Please <a href=\"login.php\">click here to login</a>.</p>";
                                            }
                                        else
                                            {
                                               echo "<h1>Error</h1>";
                                               echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
                                            }       
                                    }
                            }
              else
                 {
                     ?>
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
    <div id="pswd_info">
             <h4>Password must meet the following requirements:</h4>
             <ul>
               <li id="letter" class="invalid">At least <strong>one letter</strong></li>
               <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
               <li id="number" class="invalid">At least <strong>one number</strong></li>
               <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
            </ul>
      </div> 
    <form method="post" onsubmit="return validateForm(this);" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><span id="user-result" style="display:inline"></span><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><span id="user-result2" style="display:inline"></span><br />
        <label for="Address">Address:</label><input type="text" name="address" id="addr" /><br />  
		  <label for="Fname">First Name:</label><input type="text" name="fname" id="fname" /><br />
		  <label for="Lname">Last Name:</label><input type="text" name="lname" id="lname" /><br />
		<input type="submit" name="register" class="login" value="Register" />
    </fieldset>
    </form>
     
    <?php
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

