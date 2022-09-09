<?php
	//call header
	include ('searchm.php');
	include ('header.php');

	//restriction display for page not found
	echo '
		<div class="body-main">
			<div class="wrap">
				<h1 class="content-title">404 - Page Not Found</h1>
				<hr>
				<br><br>
				<div class="single-content contact-us">
					<h3 style="text-align:center;width:100%;">Sorry, we couldn&apos;t find the page you&apos;re looking for.</h3>
				</div>
				<br>
			</div>
		</div>
	';
 require_once 'footer.php'; 
?>