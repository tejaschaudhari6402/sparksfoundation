<?php

	$conn = mysqli_connect('localhost','root','','Banksystem');

	if(!$conn){
		die("COULD NOT CONNECT THE DATABASE!!!! ".mysqli_connect_error());
	}

?>
