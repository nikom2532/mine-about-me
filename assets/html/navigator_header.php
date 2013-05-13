<div class="container">
	<div class="row-fluid">
		<div class="span4" id="menu">
			<div id="menu-navbar-open" class="row-fluid">
				<a href="#" id="navbar">
					<div class="span12 box1 no-left"></div>
				</a>
			</div>
			<div id="menu-navbar-close" class="row-fluid">
				<a href="#" id="navbar">
					<div class="span12 box1 no-left"></div>
				</a>
			</div>
			<div id="lists">
		  		<div class="row-fluid" >
		  			<a href="#" id="home">
						<div class="span5 box1 no-left">
							<div>Home</div>
						</div>
					</a>
					<a href="#" id="educations">
						<div class="span7 box1 no-left">
							Educations
						</div>
					</a>
				</div>
		  		<div class="row-fluid" >
		  			<a href="#" id="experiences">
						<div class="span7 box1 no-left">
							Experiences
						</div>
					</a>
					<a href="#" id="projects">
						<div class="span5 box1 no-left">
							Projects
						</div>
					</a>
				</div>
		  		<div class="row-fluid" >
		  			<a href="#" id="awards">
						<div class="span5 box1 no-left">
							Awards
						</div>
					</a>
					<a href="#" id="sn">
						<div class="span7 box1 no-left">
							My Channels' Networking
						</div>
					</a>
				</div>
				<?php /* ?>
			  		<div class="row-fluid" >
						<a href="#" id="contact">
							<div class="span7 box1 no-left">
								Contact
							</div>
						</a>
			  			<?php // <a href="#" id=""> ?>
							<div class="span5 box2 no-left">
								
							</div>
						<?php // </a> ?>
					</div>
				<?php */ ?>
			</div>
			<div class="row-fluid hit-counter" >
				<br/>
				Page Viewed : 
				<?php
				include("./libs/Counter/index.php"); 
				?> 
				<br /><br />
				Copyright <font size="4">&#169;</font> since <br />October 17th, 2011 &#64; 10:17 AM (GMT)
				<Br>
				by Arm&#237;ng H&#250;ang (Nikom Suwankamol). <br />Alright reserved <font size="4">&#174;</font>
				<br />
<?php
					    if (getenv('HTTP_X_FORWARDED_FOR')) {
					        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
					        $ipaddress = getenv('REMOTE_ADDR');
					// echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
					    } else {
					        $ipaddress = getenv('REMOTE_ADDR');
					        // echo "Your IP address is : $ipaddress";
					    }
						   $country = getenv('GEOIP_COUNTRY_NAME');
  					 // echo "<br />Your country : $country";
					 
					 // $sql = "
						// INSERT INTO  `Mine_aboutme` (
						// `ipaddress` ,
						// `country`
						// )
						// VALUES (
						 // '".$ipaddress."',  '".$country."'
					  // ";
					 // $db->query($sql);		
					 			 
					// $tm=time();
					// $ref=@$HTTP_REFERER;
					// $agent=@$HTTP_USER_AGENT;
					// $ip=@$_SERVER['REMOTE_ADDR'];
					// $sql = "INSERT INTO `Mine_aboutme_ver4_traceip` (tm, ref, agent, ip, tracking_page_name) VALUES ('$tm','$ref','$agent','$ip','$tracking_page_name')";
					// $db->query($sql);
					
					// $ip=$_SERVER['REMOTE_ADDR'];
					// $url=file_get_contents("http://www.ip-tracker.org/locator/ip-lookup.php?ip={$ip}");
					// echo ($url=="");
					// echo $url;
					
					// preg_match_all('/<th>(.*?)<\/th><td>(.*?)<\/td>/s',$url,$output,PREG_SET_ORDER);
					// $isp=$output[1][2];
					// $city=$output[9][2];
					// $state=$output[8][2];
					// $zipcode=$output[12][2];
					// $country=$output[7][2];
					// echo $isp;
					
					
?>

			</div>
		</div>
		<div class="span8" id="content">
			<div class="row-fluid" >
				<div class="span12 main-content">