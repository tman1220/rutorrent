<?php

require_once( 'util.php' );

$s = @file_get_contents(getSettingsPath()."/uisettings.json");
if($s==false)
	$s = '{}';
header("Content-Length: ".strlen($s));
header("Content-Type: application/json; charset=UTF-8");
echo $s;
?>
