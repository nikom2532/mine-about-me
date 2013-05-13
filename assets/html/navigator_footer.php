					<div class="row-fluid hit-counter" >
						<br/><hr />
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
							echo "Your Proxy IP address is : " . $pipaddress . "(via $ipaddress)";
						} else {
							$ipaddress = getenv('REMOTE_ADDR');
							echo "Your IP address is : $ipaddress";
						}
						$country = getenv('GEOIP_COUNTRY_NAME');
						echo "Your country : $country";

// $sql = "
// INSERT INTO  `Mine_aboutme` (
// `ipaddress` ,
// `country`
// )
// VALUES (
// '".$ipaddress."',  '".$country."'
// ";
// $db->query($sql);
// if(!$result)die(mysql_error());
?>
						<p><br /></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>