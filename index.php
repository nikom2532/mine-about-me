<?php
	$c = $_GET["c"];
	if($c==""){
		$c="index";
	}
	elseif($c=="sn"){
		$c="socialnetwork";
	}
	include("./views/html/{$c}.php");
?>