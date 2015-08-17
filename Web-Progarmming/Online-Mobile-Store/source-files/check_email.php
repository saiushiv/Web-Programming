<?php include "base.php"; ?>
<?php


//check we have username post var
if(isset($_POST["email"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
#	$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
	//trim and lowercase email
	$email = strtolower(trim($_POST["email"])); 
	//sanitize username
	$email = filter_var($email, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check email in db
	 $checkemail = "SELECT Email FROM users WHERE Email='$email'";
	 $results2 = $conn->query($checkemail);
	
	//return total count
	//$username_exist = mysqli_num_rows($results); //total records
	
	//if value is more than 0, username is not available
	if($results2 -> num_rows > 0) {
		die('<img src="web/images/not-available.png" />');
	}else{
		die('<img src="web/images/available.png" />');
	}
	
	
	//close db connection
	//mysqli_close($connecDB);
}
?>

