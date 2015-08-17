<?php include "base.php"; ?>
<?php
if ($_POST['action'] == 'Update') {
    $devid = $_POST['deviceid'];
	$noI = $_POST['noI'];
	$upd = "UPDATE  mobiles SET no_of_items = $noI where DeviceID =  '".$devid."'";
   $result = $conn->query($upd);
   if(!mysqli_error($conn))
                                            {
                                               echo "<h1>Success</h1>";
                                               echo "<p>Record updated</p>";
											   echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";
                                            }
                                        else
                                            {
                                               echo "<h1>Error</h1>";
                                               echo "<p>Sorry, SQL Error</p>";
                                                echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";											   
                                            } 
} else if ($_POST['action'] == 'Delete') {
     $devid = $_POST['deviceid'];
	 $del = "DELETE from mobiles where DeviceID = '".$devid."'";
   $result = $conn->query($del);
   if(!mysqli_error($conn))
                                            {
                                               echo "<h1>Success</h1>";
                                               echo "<p>Record Deleted</p>";
											   echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";
                                            }
                                        else
                                            {
                                               echo "<h1>Error</h1>";
                                               echo "<p>Sorry, SQL Error</p>";
                                                echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";											   
                                            }
} else {
    $devid = $_POST['deviceid'];
	$model = $_POST['model'];
	$man = $_POST['manu'];
	$noI = $_POST['noI'];
	$add = "INSERT INTO mobiles (DeviceID, Model, Manufacture,no_of_items) VALUES('".$devid."', '".$model."', '".$man."','".$noI."')";
   $result = $conn->query($add);
   if(!mysqli_error($conn))
                                            {
                                               echo "<h1>Success</h1>";
                                               echo "<p>Record added</p>";
											   echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";
                                            }
                                        else
                                            {
                                               echo "<h1>Error</h1>";
                                               echo "<p>Sorry, SQL Error</p>";
                                                echo "<p><meta http-equiv='refresh' content='2;siteadmin.php' /></p>";											   
                                            } 
}
?>