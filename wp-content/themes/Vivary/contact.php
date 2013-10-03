
<!doctype html>
<!--[if IE 9]>
<html class="ie9">
<![endif]-->
<!--[if lt IE 9]>
<html class="ie">
<![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Vivary Golf Course, a beautifully maintained 18 hole parkland golf course ideally situated within a short 5 minute walk of the town centre.">
	<title>Vivary Park Golf Club</title>
  <link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/global.css">
	<!--[if lte IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39399152-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="page-wrap">
	<header class="site-header">
		<a href="/"><img src="images/main-site-logo.png" alt="Vivary Park Logo" class="main-branding-logo"></a>
		<nav class="site-navigation">
			<a href="/">home</a>
			<a href="member.html">membership</a>
			<a href="contact.php">contact</a>
			<a href="about.html">about</a>
		</nav>
	</header>
	<div class="main-content group">
		<section class="module contact">
			<h2>Send us an Email</h2>

			<?php if(isset($_COOKIE["CONTACT"])) : ?>

				<?php if($_COOKIE["CONTACT"] == 'SENT') : ?>
					<p>Thank you for contacting us</p>
				<?php elseif ($_COOKIE["CONTACT"] == 'ERROR') : ?>
					<p>An error has occurred, please try again later</p>
				<?php endif; ?>

			<?php else : ?>
				<form action="contactform.php" method="POST" class="contact">
					<label for="name">Your Name: </label>
					<input type="text" required name="name">
					<label for="email">Your Email Address: </label>
					<input type="email" required name="email">
					<label for="message">What would you like to tell us?</label>
					<textarea name="message"></textarea>
					<input type="submit" value="Send">
				</form>
			<?php endif; ?>

			<p class="more-info">For booking enquiries call us on:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>01823 333875</span><br>
			Or for membership enquiries call us on: <span>01823 289274</span></p>
		</section>
	</div>
	<footer class="site-footer">
		<section class="affiliate">
			<h4>Our Partners:</h4>
			<ul>
				<li>
					<a href="http://www.toneleisure.co.uk" target="_blank">Tone Leisure</a></li>
				<li>
					<a href="http://www.somerset.ac.uk" target="_blank">Somerset College</a></li>
			</ul>
		</section>
		<section class="module contact-info">
			<h4>Opening Hours &amp; Contact Info</h4>
			<div class="address-and-contact">
				Vivary Golf Club
				Fons George Rd<br>
				Taunton
				Somerset<br>
				TA1 3JT<br><br>
				Tel:<br>
				01823 333875<br><br>
				Open Mon - Sun
				07:30 - Dusk
			</div>
			<a href="http://maps.google.com/maps?q=Vivary+Park+Golf+Course,+Taunton,+United+Kingdom&amp;hl=en&amp;sll=37.0625,-95.677068&amp;sspn=34.671324,79.013672&amp;oq=vivary+golf+c&amp;hq=Vivary+Park+Golf+Course,+Taunton,+United+Kingdom&amp;t=m&amp;z=14" title="Find Us On Google Maps" target="_blank">
        <img src="images/map.jpg" alt="Find Us On Google Maps!">
      </a>
		</section>
		<section class="legal-links">
			<div class="legal-navigation">
				<a href="/">home</a>
				<a href="member.html">membership</a>
				<a href="contact.php">contact</a>
				<a href="about.html">about</a>
			</div>
			<div class="copyright">
				&copy; Vivary Golf 2013<p>Website Designed and Developed by Foundation Degree Students at <a href="http://www.somerset.ac.uk" target="_blank">Somerset College of Arts &amp; Technology</a></p>
			</div>
		</section>
	</footer>
</div>
</body>
</html>