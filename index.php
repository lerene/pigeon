<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
		<script type="text/javascript" src="jquery-3.3.1.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<title>HTML</title>
	</head>
	<body>
		<div class="page-wrapper">
		
		<!-- Headings -->
			<div class="main-content">

				<div class="inside-left">

					<div class="menu-item"><h3>Benefits of living in Arlington</h3></div>
					<div class="menu-item"><h3>Housing information</h3></div>
					<div class="menu-item"><h3>Transportation</h3></div>
					<div class="menu-item"><h3> <a href="reviews.php">Reviews</a></h3></div>
					<div class="menu-item"><h3>Couples' life</h3></div>
				</div>

				<div class="inside-right">

<!-- pseudo code -->

<!-- first, get time from server -->
<!-- then, isolate just the time (not date) -->
<?php 

	date_default_timezone_set('America/New_York');
	$time_e=date('H:i', $_SERVER['REQUEST_TIME']);
?>

<!-- if time > 8:15 pm then set variable class=right-top-pm -->
<!-- if < 8:15 pm then set variable class=right-top-am -->

<?php 

	
	if ($time_e>"21:39") {
		$rt_class="right-top-pm";
	} 
	else {
		$rt_class="abc";
		
	}
	?>

					<div class="<?php 

									// echo $rt_class;
						 			echo $rt_class="abc";
									$rt_class="ghi"; 
									echo ' # ' . $rt_class; 

								?>">
						<h1 id="top-heading">Life in Rosslyn, Arlington in 
				<?php 
					echo date(Y); 
				?>
					

				</h1>
					
					</div>

					<div class="right-bottom">
						<img src="rosslyn.jpg" class="city">

						<!-- Paragraph -->
						<p>
							Rosslyn is a heavily urbanized unincorporated area in Northern Virginia located in the northeastern corner of Arlington County, Virginia, north of Arlington National Cemetery and directly across the Potomac River from Georgetown and Foggy Bottom in Washington, D.C.

							Rosslyn encompasses the Arlington neighborhoods of North Rosslyn and Radnor/Ft. Myer Heights, and is located east of Courthouse, another urbanized Arlington neighborhood. Characterized as one of several "urban villages" by the County, the numerous skyscrapers in the dense business section of Rosslyn make its appearance in some ways more urban than nearby Washington. Rosslyn residents have an average household income of $105,000 and 81% are college graduates.

							Notable establishments in the neighborhood include ABC 7 (WJLA-TV) located in the Rosslyn Twin Towers, and Marriott International's longest operating hotel, the Key Bridge Marriott. Notable structures include the United States Marine Corps War Memorial, and the Netherlands Carillon and Freedom Park offer views of the Washington Monument and other Washington landmarks.

			
							LATEST LISTINGS
						</p>


					</div>


					

					
				</div>


				


			</div>

			<div class="footer">
				Manufactured in Arlington County, VA. Established 2018.
			</div>

		</div>

	</body>
</html>
