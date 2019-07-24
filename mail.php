</!DOCTYPE html>
<html lang="en-US">
<link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>www.ianlositano.com</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav class="navtop">
			<section class="col-lg-6 col-md-6 col-sm-6 col-mo-12">
				<section class="maintitle">www.IANLOSITANO.com</section>
				<section class="num">
					<img class="icon" alt="Globe Telecom" src="images/phone.png">
					<a href="tel:+639175507379">
					<span>+63 917 550 7379</span>
					</a>
					<img class="icon" alt="Smart Communications, Inc." src="images/phone.png">
					<a href="tel:+639189579347">
					<span>+63 918 957 9347</span>
				</a>
				</section>
			</section>
			<section class="col-lg-6 col-md-6 col-sm-6 col-mo-12">
				<section class="logo-handler">
					<a href="https://www.facebook.com/iancmlositano" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/Facebook.png"></a>
					<a href="https://www.instagram.com/yahnieboy/" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/Instagram.png"></a>
					<a href="https://www.youtube.com/channel/UCDNaI1sZgpqOsAH50nV-uUA" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/YouTube.png"></a>
					<a href="https://twitter.com/iancmlositano" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/Twitter.png"></a>
					<a href="https://www.linkedin.com/in/iancarlomlositano/" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/LinkedIn.png"></a>
					<a href="https://orcid.org/0000-0002-0940-0989" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/ORCID.png"></a>
					<a href="https://scholar.google.com.ph/citations?user=1vKy51gAAAAJ&hl=en" target='_blank'><img class="logo" alt="Ian Carlo M. Lositaño" src="images/Google_Scholar.png"></a>
				</section>				
			</section>
			<div class="col-lg-12 col-md-12 col-sm-12 col-mo-12">
				<br>
				<span>
					<a class="button" href="index.html"><img class="icon" alt="Home" src="images/home.png"> HOME</a>
				</span>
				<span>
					<a class="button" href="articles.html"><img class="icon" alt="Home" src="images/articles.png"> ARTICLES</a>
				</span>
				<span>
					<a class="button" href="links.html"><img class="icon" alt="Home" src="images/links.png"> LINKS</a>
				</span>
				<span>
					<a class="button" href="contact.html"><img class="icon" alt="Home" src="images/contact.png"> CONTACT</a>
				</span>
				<span>
					<a class="button" href="about.html"><img class="icon" alt="Home" src="images/about.png"> ABOUT</a>
				</span>				
			</div>
		</nav>
	</header>
<div class="contact">
	<?php $name = $_POST['name'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "icmlositano@yahoo.com";
	$subject = "Contact Form";
	$mailheader = "From: $email $web \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You! Your message was delivered.";
	?>
</div>

<div class="navbot">
	<p>2018-2019 &#169; Ian Carlo M. Losita&ntilde;o</p>
</div>
<script src="js/script.js"></script>
</body>
</html>