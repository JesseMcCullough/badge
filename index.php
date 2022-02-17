<?php

session_start();

$configString = file_get_contents("config.json");
$config = json_decode($configString, true);
$mail = $config["mail"];

$hasShow = $config["hasShow"];

function getMailHeaders() {
	global $mail;

	$headers = "From: \"" . $mail["name"] . "\" <" . $mail["address"] . ">\r\n"
			. "Reply-To: \"" . $mail["name"] . "\" <" . $mail["address"] . ">\r\n";

	$mailToArray = $mail["to"];
	$mailToArrayCount = count($mailToArray);

	$mailToOthers = "";
	for ($x = 0; $x < $mailToArrayCount; $x++) {
		$mailToOthers .= "\"" . $mail["to"][$x]["name"] . "\" <" . $mail["to"][$x]["address"] . ">";
		if ($x != $mailToArrayCount - 1) { // not last 
			$mailToOthers .= ",";
		}
	}
	$headers .= "Bcc: " . $mailToOthers;

	return $headers;
}

$events = [];
function addEventToDataLayer($event) {
    global $events;
    $events[] = $event;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<meta name="description" content="THE KINKS - BADFINGER - CCR - ELO - THE ROLLING STONES - THE BEATLES - PAUL REVERE AND THE RAIDERS - PAUL MCCARTNEY - TOM PETTY - THE GUESS WHO - THE WHO - THE CARS - THE GRASS ROOTS - THE BYRDS - STEELY DAN - THE MOODY BLUES - BAD COMPANY - EAGLES - CHICAGO - ELTON JOHN - TOMMY JAMES" />
	<meta charset="UTF-8" />
	<meta property="og:title" content="Badge | The Ultimate 60s and 70s Rock Tribute Band" />
	<meta property="og:description" content="THE KINKS - BADFINGER - CCR - ELO - THE ROLLING STONES - THE BEATLES - PAUL REVERE AND THE RAIDERS - PAUL MCCARTNEY - TOM PETTY - THE GUESS WHO - THE WHO - THE CARS - THE GRASS ROOTS - THE BYRDS - STEELY DAN - THE MOODY BLUES - BAD COMPANY - EAGLES - CHICAGO - ELTON JOHN - TOMMY JAMES" />
	<meta property="og:image" content="https://www.badge.group/images/badge-logo.jpg" />

	<script src="https://www.youtube.com/iframe_api"></script>

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M6LMTKC');</script>

	<link href="images/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="styles/style.css" type="text/css" rel="stylesheet" />
	<title>Badge | The Ultimate 60s and 70s Rock Tribute Band</title>
</head>
<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6LMTKC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<div class="nav">
		<a href="index.php" class="logo"><img src="images/logo-transparent.png" /></a>
		<div class="mobile-menu-icon">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
		<ul>
			<li><a href="#music">Music</a></li>
			<li><a href="#videos">Videos</a></li>
			<li><a href="#photos">Photos</a></li>
			<?php if ($hasShow) : ?>
				<li><a href="#shows">Shows</a></li>
			<?php endif; ?>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a href="#contact" class="button">Book Badge</a>
	</div>
	<main>
		<!-- Introduction / Music -->
		<section class="intro">
			<div class="overlay"></div>
			<h1>The Ultimate 60s and 70s Rock Tribute Band</h1>
			<span class="artists">The Kinks - Badfinger - CCR - ELO - The Rolling Stones - The Beatles - Paul Revere and the Raiders - Paul McCartney - Tom Petty - The Guess Who - The Who - The Cars - The Grass Roots - The Byrds - Steely Dan - The Moody Blues - Bad Company - Eagles - Chicago - Elton John - Tommy James</span>
			<a href="#contact" class="button">Book Badge</a>
		</section>
		<!-- Description -->
		<section class="description">
			<p>Badge provides superior live entertainment for your class reunion party tributing oldies music from that golden age of rock and roll that started classic rock. If you need to book a band that performs a rock tribute to the 60s, or a class reunion party band that plays hit songs from the 70s, the ultimate rock tribute to the 60s and 70s is Atlanta's own, Badge. Their entertaining show is a tribute to the 70s and 60s. Hiring Badge to perform for your next class reunion party, 55 plus community event, or private function assures a fun trip back in time, a retro walk through the era of music where analog was king! Badge is the perfect choice that takes you back in time to relive all those great rock hits from the years you grew up in! Their rock and roll show is perfect for municipal outdoor events. This is one show band that is quite unique! Not your average cover band. This band takes on big songs that you won't hear other cover bands play. Songs by The Beatles, Stones, ELO, Moody Blues, Grass Roots, and so much more! Badge is the Ultimate 60s & 70s Rock Tribute!</p>
		</section>
		<!-- Video -->
		<section class="video" id="videos">
			<div class="container">
				<iframe id="video-iframe" width="853" height="480" src="https://www.youtube.com/embed/R9pvelP6k0U?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<span class="video-control" id="videoBackward">&lt;</span>
        		<span class="video-control" id="videoForward">&gt;</span>
			</div>
		</section>
		<!-- Photos -->
		<section class="photos" id="photos">
			<h2>Photos</h2>
			<div class="container">
				<div class="img"><img src="images/badge-18.jpg" /></div>
				<div class="img"><img src="images/badge-17.jpg" /></div>
				<div class="img"><img src="images/badge-20.jpg" /></div>
				<div class="img"><img src="images/badge-16.jpg" /></div>
				<div class="img"><img src="images/badge-15.jpg" /></div>
			</div>
			<button type="button" class="button">See More Photos</a>
		</section>
		<!-- CTA Banner -->
		<section class="cta-banner">
			<div class="container">
				<h2>Ready to Book Badge?</h2>
			</div>
			<div class="container">
				<a href="#contact" class="button">Book Now</a>
			</div>
		</section>
		<?php if ($hasShow) : ?>
			<section class="shows" id="shows">
				<div class="overlay"></div>
				<h2>Rock with Badge at the Next Show</h2>
				<div class="container">
					<div class="show show-1">
						<span class="date">Nov 20</span>
						<span class="time">1:00 PM</span>
						<span class="location">Greenwood Farms</span>
						<span class="access">Public</span>
						<span class="button show-1">See details</span>
						<div class="details">
							<div class="overlay"></div>
							<span class="date">Nov 20</span>
							<span class="time">1:00-5:00 PM</span>
							<span class="location">Greenwood Farms</span>
							<span class="access">Public</span>
							<span class="description">4550 Lawrenceville Rd, Loganville, GA 30052</span>
							<span class="close show-1 button">Close</span>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<!-- About -->
		<section class="about" id="about">
			<h2>About Badge</h2>
			<div class="about-member">
				<h3>Larry Harrison - Guitarist / Vocalist<img src="images/larry-harrison.png" /></h3>
				<p>40+ years performing in various bands over the years. To name a few, Lucky Larry, The Kids, Blu Maxx, country band Reckless, Teachers Pet, the Reply, and now Badge. From 2010 to present Harrison is “George Harrison” in the Beatles Tribute Band “The Buggs”, inactive as of late due to member moving out of state. Harrison has a solo album out on the market “Larry Harrison (Think Say & Do) found at all electronic music stores and sources, containing 20 Original Harrison Power Pop tunes.</p>
			</div>
			<div class="about-member">
				<h3>Ken McCullough - Bassist / Vocalist<img src="images/ken-mccullough.png" /></h3>
				<p>Started out in the mid 70's singing and playing in a top 40 band (Signal) from Atlanta, performing mostly at high school dances, college parties, and clubs. Towards the late 70's, Ken toured the Southeast with 4 Star Productions, East Coast Entertainment, and Rising Star Productions. Continuing in the 80's, he did studio work and played weddings, corporate parties, and clubs with a popular party band (Culprit) in the Atlanta area. In the 90's, played with the classic rock band Major Woodrow, featuring former Lynyrd Skynyrd drummer, Bob Burns. Throughout his career, Ken has played in a variety of bands alongside musicians who played shows with The Allman Brothers, The Who, The Night Shadows, Bob Seger, Delbert McClinton, Herbie Hancock, 3 Dog Night, Leon Russell, Edgar Winter, Jim Croce, Manfred Mann, Chicago, B.B. King, Mylon LeFevre, Joe English, & Menudo.</p>
			</div>
			<div class="about-member">
				<h3>Greg Scohier - Keyboardist / Vocalist<img src="images/greg-schoier.png" /></h3>
				<p>Greg is the ivory tickler, who with his musical expertise, helps keep the band on track with the arrangements and some fine intricate vocal harmonies. He's been an imported Atlantan for at least 25 years or so and has performed many a gig with loads of fellow Georgian musicians. Born into a long line of family musicians his passion for music is readily apparent!</p>
			</div>
			<div class="about-member">
				<h3>Johnny Pike - Drummer / Vocalist<img src="images/johnny-pike.png" /></h3>
				<p>A veteran of the Atlanta music scene since the late 80’s, playing in a variety of bands covering a wide range of genres, including classic and hard rock, dance, pop, country, R&B, Americana and everything in between. These bands include Perfect Stranger, Scrub the Pup, Liberty Jones, The Mustangs, Foxes and Fossils, and the latest fun project, specializing in late 60’s, early 70’s rock/pop, Badge! These projects have included opening slots for Little River band, Marshall Tucker band, Webb Wilder, Pat Travers, Creedence Clearwater Revisited and many others. In addition to these live projects, Johnny has also been involved in studio work in Atlanta resulting in original based projects with Liberty Jones, as well as YouTube releases with the Foxes and Fossils resulting at present, over 37 million views, 80,000 subscribers and a worldwide following and fan base!</p>
			</div>
		</section>
		<!-- Contact -->
		<section class="contact" id="contact">
			<h2>Contact Badge</h2>
			<p>Contact us for more information on booking Badge for your next event.</p>
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>#contact" method="POST">
                <?php

				if (isset($_SESSION["submittedContactForm"])) {
					echo '<p class="success">You\'re all set! We\'ll be in touch within 24 hours.</p>';
				} else if (isset($_POST["submit"])) {
					$missingFields = [];

					if (empty(trim($_POST["name"]))) {
						$missingFields[] = "name";
					}

					if (empty(trim($_POST["date"]))) {
						$missingFields[] = "event date";
					}

					if (empty(trim($_POST["phone"]))) {
						$missingFields[] = "phone";
					}

					if (empty($_POST["email"])) {
						$missingFields[] = "email";
					}

					if (!empty($missingFields)) {
						$fields = "";
						$missingFieldsCount = count($missingFields);
						$requiresCommaSeparation = $missingFieldsCount >= 3;
				
						if ($missingFieldsCount == 1) {
							$fields = $missingFields[0];
						} else {
							for ($x = 0; $x < $missingFieldsCount; $x++) {
								if ($requiresCommaSeparation) {
									if ($x < $missingFieldsCount - 1) { // Any element that's not the last element.
										$fields .= $missingFields[$x] . ", ";
									} else if ($x == $missingFieldsCount - 1) { // The element is the element.
										$fields .= "and " . $missingFields[$x];
									}
								} else { // Only two missing fields.
									if ($x == 0) {
										$fields .= $missingFields[$x] . " and ";
									} else {
										$fields .= $missingFields[$x];
									}
								}
							}
						}
					
						echo '<p class="error">Please enter your ' . $fields . '.</p>';
						include_once("includes/contact-form-inputs.php");
					} else {
						$subject = "New Lead";
						$headers = getMailHeaders();
       					$dateFormatted = date_format(date_create($_POST["date"]), "F j, Y");
                        $message = "Name: " . $_POST["name"] . "\n"
                                . "Event Date: " . $dateFormatted . "\n"
                                . "Phone: " . $_POST["phone"] . "\n"
                                . "Email: " . $_POST["email"] . "\n"
                                . "Comments: " . $_POST["comments"];
						
                        if (mail($mail["address"], $subject, $message, $headers)) {
							$_SESSION["submittedContactForm"] = true;
							addEventToDataLayer("submit_contact_form");
							echo '<p class="success">You\'re all set! We\'ll be in touch within 24 hours.</p>';
						} else {
							echo '<p>Something went wrong. Please try again.</p>';
							include_once("includes/contact-form-inputs.php");
						}
					}
				} else {
					include_once("includes/contact-form-inputs.php");
				}

				?>
			</form>
		</section>
		<footer id="footer">
			<div class="container links">
				<div class="img">
					<a href="index.php"><img src="images/logo-white.png" class="logo"/></a>
					<a href="https://www.facebook.com/badgepage" target="_blank"><img src="images/facebook.png" /></a>
				</div>
				<ul>
					<li>Navigation</li>
					<li><a href="#music">Music</a></li>
					<li><a href="#videos">Videos</a></li>
					<li><a href="#photos">Photos</a></li>
					<?php if ($hasShow) : ?>
						<li><a href="#shows">Shows</a></li>
					<?php endif; ?>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<div class="container cta">
				<form action="<?php $_SERVER["PHP_SELF"]; ?>#footer" method="POST">
					<label for="email">Get notified of Badge's shows</label>
					<?php

					if (isset($_SESSION["submittedNotifyForm"])) {
						echo '<p class="success">You\'re all set! We\'ll notify you of Badge\'s shows.</p>';
					} else if (isset($_POST["submit-footer"])) {
						$missingFields = null;

						if (empty($_POST["name-footer"])) {
							$missingFields = "name";
							if (empty($_POST["email-footer"])) {
								$missingFields .= " and email";
							}
						} else if (empty($_POST["email-footer"])) {
							$missingFields = "email";
						}

						if ($missingFields) {
							echo '<p class="error">Please enter your ' . $missingFields . '.</p>';
							include_once("includes/notify-shows-form-inputs.php");
						} else {
							$subject = "New Email Subscriber";
							$headers = getMailHeaders();
							$message = "Name: " . $_POST["name-footer"] . "\n"
									. "Email: " . $_POST["email-footer"];

							if (mail($mail["address"], $subject, $message, $headers)) {
								$_SESSION["submittedNotifyForm"] = true;
								addEventToDataLayer("submit_notify_form");
								echo '<p class="success">You\'re all set! We\'ll notify you of Badge\'s shows.</p>';
							} else {
								echo '<p>Something went wrong. Please try again.</p>';
								include_once("includes/notify-shows-form-inputs.php");
							}
						}
					} else {
						include_once("includes/notify-shows-form-inputs.php");
					}
					
					?>
				</form>
			</div>
			<p class="copyright">Copyright &copy; 2022 Jesse McCullough. All Rights Reserved.</p>
		</footer>
	</main>
	<?php

	if (!empty($events)) {
		echo "<script>";
		echo "window.dataLayer = window.dataLayer || [];";
		
		foreach ($events as $event) {
			echo "window.dataLayer.push({'event': '" . $event . "'});";
		}

		echo "</script>";
	}

	?>
	<script src="scripts/script.js"></script>
</body>
</html>
