<?php
$con = mysqli_connect("localhost","smpc8631_admin","smpn4juwana","smpc8631_smp4");

if(mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL : ".mysqli_connect_error();
	}
	else{
		echo "";
	}
?>