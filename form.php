<?php 
	
	$name = $_POST['name'];
	$ws = "http://10.239.104.89:9999/customer/".$name;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $ws);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$res = curl_exec($ch);
	curl_close($ch);
	echo $res;
?>