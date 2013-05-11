<?php
	$c = $_GET["cid"];
	if($c==""){
		$c="index";
	}
	include("./views/html/{$c}.php");
?>