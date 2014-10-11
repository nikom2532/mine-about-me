<?php
	$menu = "home";
	include_once("assets/html/header.php");
?>
<div id="home">
	<?php include_once("./views/html/home.php"); ?>
</div>
<div id="educations">
	<?php include_once("./views/html/educations.php"); ?>
</div>
<div id="experiences">
	<?php include_once("./views/html/experiences.php"); ?>
</div>
<div id="projects">
	<?php include_once("./views/html/projects.php"); ?>
</div>
<div id="awards">
	<?php include_once("./views/html/awards.php"); ?>
</div>
<div id="sn">
	<?php include_once("./views/html/socialnetwork.php"); ?>
</div>
<div id="certifications">
	<?php include_once("./views/html/Certifications.php"); ?>
</div>

<?php
	include_once("assets/html/footer.php");
?>