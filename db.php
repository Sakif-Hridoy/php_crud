<?php

	//Connect and Provide Database Credentials//

$db = mysqli_connect("localhost","root","","ssb280");

if ($db){
	echo "Database Connected Successfully.";
}

else {
	die("MySQLi Connection Failed." . mysqli_error($db));
}
?>