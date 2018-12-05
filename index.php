<?php 

	$ws = "http://consulta-vertex.apps.openshift-master.innovacioneveris.tech/clientes";//getenv('WEBSV');
	//echo "HOLA ".$ws;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $ws);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$res = curl_exec($ch);
	curl_close($ch);
	echo $res;
?>
