<?php
	$menu = "home";
	include("assets/html/header.php");
?>
<div id="home">
	Hi, My name is 
	<div class="myname">Nikom Suwankamol (Arming Huang)</div>
	We are Web Application, and Mobile Development
</div>
<div id="educations">
	<?php include("./views/html/educations.php"); ?>
</div>
<div id="experiences">
	<?php include("./views/html/experiences.php"); ?>
</div>
<div id="projects">
	<?php include("./views/html/projects.php"); ?>
</div>
<div id="awards">
	<?php include("./views/html/awards.php"); ?>
</div>
<div id="sn">
	<?php include("./views/html/socialnetwork.php"); ?>
</div>

<?php
	include("assets/html/footer.php");
?>