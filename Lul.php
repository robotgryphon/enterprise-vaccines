<?php
    require_once("DescriptionLoader.php");
	require_once("Vaccine.php");
	
	// Locale not yet supported
	$descriptions = new DescriptionLoader("en-US");

	$vacina1 = new Vaccine();
	$vacina1->code = 1;
	$vacina1->description = "Tetravalent";
	$vacina1->valid = "06/11/2020";

    $vacina1->prepare();
?>