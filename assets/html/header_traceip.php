<?php
require_once("./libs/htmldom/simple_html_dom.php");
$ip = $_SERVER['REMOTE_ADDR'];
$html = file_get_contents("http://www.ip-tracker.org/locator/ip-lookup.php?ip=$ip");
$DOM = new DOMDocument;
$DOM->loadHTML($html);
//get all td
$items = $DOM->getElementsByTagName('td');
$Hostname = $items->item(7)->nodeValue;
$IP_Blacklist_Check = $items->item(8)->nodeValue;
$Continent = $items->item(9)->nodeValue;
$Country = $items->item(10)->nodeValue;
$Capital = $items->item(11)->nodeValue;
$State = $items->item(12)->nodeValue;
$City = $items->item(13)->nodeValue;
$ISP = $items->item(14)->nodeValue;
$Organization = $items->item(15)->nodeValue;
$Time_zone = $items->item(16)->nodeValue;
$Continent_Lat_Lon = $items->item(17)->nodeValue;
$Country_Lat_Lon = $items->item(18)->nodeValue;
$City_Lat_Lon = $items->item(19)->nodeValue;
$IP_Language = $items->item(20)->nodeValue;
$IP_Currency = $items->item(22)->nodeValue;
$IDD_Code = $items->item(23)->nodeValue;
$sql = "
	INSERT INTO  `Mine_aboutme`.`Mine_aboutme_ver4_traceip` (
	`IPAddress`
	`Hostname` ,
	`IP_Blacklist_Check` ,
	`Continent` ,
	`Country` ,
	`Capital` ,
	`State` ,
	`City` ,
	`ISP` ,
	`Organization` ,
	`Time_zone` ,
	`Continent_Lat_Lon` ,
	`Country_Lat_Lon` ,
	`City_Lat_Lon` ,
	`IP_Language` ,
	`IP_Currency` ,
	`IDD_Code`
	)
	VALUES (
	'$ip' ,  '$Hostname',  '$IP_Blacklist_Check',  '$Continent',  '$Country',  '$Capital',  '$State',  '$City',  '$ISP',  '$Organization',  '$Time_zone',  '$Continent_Lat_Lon',  '$Country_Lat_Lon',  '$City_Lat_Lon',  '$IP_Language',  '$IP_Currency',  '$IDD_Code'
	);

";
?>