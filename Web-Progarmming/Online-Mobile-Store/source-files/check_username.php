<?php include "base.php"; ?>
<?php


//check we have username post var
if(isset($_POST["username"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
#	$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
	//trim and lowercase username
	$username =  strtolower(trim($_POST["username"])); 
	
	//sanitize username
	$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	 $checkuser = "SELECT Username FROM users WHERE Username='$username'";
	 $results = $conn->query($checkuser);
	
	//return total count
	//$username_exist = mysqli_num_rows($results); //total records
	
	//if value is more than 0, username is not available
	if($results -> num_rows > 0) {
		die('<img src="web/images/not-available.png" />');
	}else{
		die('<img src="web/images/available.png" />');
	}
	
	
	//close db connection
	//mysqli_close($connecDB);
}
?>

