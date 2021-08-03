<?php
		
	$interface  = $_REQUEST['interface'];
	$fristVlan  = $_REQUEST['fristVlan'];
	$endVlan    = $_REQUEST['endVlan'];
	$acsConcen  = $_REQUEST['acsConcen'];
	$dynProfile = $_REQUEST['dynProfile'];

	while ($fristVlan <= $endVlan) {

		echo "set interface $interface unit $fristVlan vlan-id $fristVlan <br>";
		echo "set interface $interface unit $fristVlan family pppoe access-concentrator $acsConcen <br>";
		echo "set interface $interface unit $fristVlan family pppoe dynamic-profile $dynProfile <br><br>";

		$fristVlan ++;

	}

	echo json_encode("teste");

?>