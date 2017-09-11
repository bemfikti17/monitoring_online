<?php 
	define('_HOST','localhost');
	define('_USR','jende731_bemfikti');
	define('_PW','.{9U9]iW5DmM');
	define('_DB','jende731_monitoring_bemfikti');

	$conn = new mysqli(_HOST,_USR,_PW,_DB);

	if($conn->connect_errno){
		die("EROR : -> ".$conn->connect_error);
	}
?>