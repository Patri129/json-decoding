<?php
/*
* In dit script worden errors in de vorm van JSON bijgehouden.
*
*/
//-- Errors worden getoond -- 
ini_set('display_errors', 1);
//Errors bij startup worden getoond
ini_set('display_startup_errors', 1);
//Soort error, alle errors worden getoond
error_reporting(E_ALL);

//errors in een json file schrijven
$json = fopen("stof.json","r");
$string = fread($json,filesize("stof.json"));
//de shit in een array zetten
$stof = array();

//convert json stream to an array
$stof = json_decode($string,true);

//var_dump(json_decode($string));

//print json data array
var_dump($stof);

?>
