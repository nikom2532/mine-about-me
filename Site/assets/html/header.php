<?php
session_start();
require_once("./libs/func_date.php");
require_once("./libs/DB.php");
require_once("./configs/conn.inc.php");
if (!$db->open()){
	die($db->error());
}
mysql_query("SET NAMES 'utf8'");
require_once("./assets/html/header_traceip.php");
?>
<?php // <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
	<TITLE> About us </TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
	<META NAME="Generator" CONTENT="Editor">
	<META NAME="Author" CONTENT="">
	<META NAME="Keywords" CONTENT="">
	<META NAME="Description" CONTENT="">
<!-- 	<link type="text/css" rel="stylesheet" href="./assets/css/main.css" /> -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./assets/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link type="text/css" rel="stylesheet" href="./assets/css/style.css" />
</HEAD>
<body>
	<div id="body_page">
		<?php include("./assets/html/navigator_header.php"); ?>