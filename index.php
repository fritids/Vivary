<?php
/*
Template Name: Front Page
*/
?>
<!doctype html>
<!--[if IE 9]>
<html class="ie9">
<![endif]-->
<!--[if lt IE 9]>
<html class="ie">
<![endif]-->
<html <?php language_attributes(); ?>>
<head>

    <!-- Meta Tags & Browser Stuff -->
    <meta name="description" content="<?php bloginfo("description"); ?>" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Make the HTML5 elements work in IE. -->
    <!--[if IE]>
        <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The mountain of stuff WP puts in -->
    <?php wp_head(); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" />

    <?php $ga_tracking_code = get_option('ga_tracking_code'); if ($ga_tracking_code) : ?>
    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo $ga_tracking_code; ?>']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <?php endif; ?>

    <?php
        if (is_singular() && get_option('thread_comments')) :
            wp_enqueue_script('comment-reply');
        endif;
    ?>

</head>
<body <?php body_class(); ?>>
<div class="page-wrap index">
	<header class="site-header">
		<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/main-site-logo.png" alt="Vivary Park Logo" class="main-branding-logo"></a>
		<nav class="site-navigation">
			<a href="/">home</a>
			<a href="/member">membership</a>
			<a href="/contact">contact</a>
			<a href="/about">about</a>
		</nav>
	</header>
	<div class="slider">
		<div class="slider-content" id="slider-content">
			<img src="<?php bloginfo('template_url'); ?>/images/slider/slide1.jpg" alt="Vivary Photography Slide One">	
			<img src="<?php bloginfo('template_url'); ?>/images/slider/slide2.jpg" alt="Vivary Photography Slide Two">	
			<img src="<?php bloginfo('template_url'); ?>/images/slider/slide3.jpg" alt="Vivary Photography Slide Three">	
			<img src="<?php bloginfo('template_url'); ?>/images/slider/slide4.jpg" alt="Vivary Photography Slide Four">	
		</div>
		<div class="slider-controls" id="controls">
			
		</div>
	</div>
	<div class="main-content group">
		<section class="module intro-text">
			<p><span>Vivary Golf</span>
				a beautifully maintained 18 hole parkland golf course ideally situated within a short 5 minute walk of the town centre. A 'Hidden Gem' within Vivary Park, suitable for all ages from beginner to experienced golfer. Designed by W H Fowler in 1928 a flat easy-to-walk course with a perfect blend of ponds, streams, bunkers and well established trees. You will not be disappointed.
				</p>
		</section>
		<!--<section class="module featured-news">
			<h2>Featured News</h2>
			<p>
			</p>
		</section>-->
    <section class="twitter module">
			<h2>Recent Updates</h2>
			<a class="twitter-timeline" href="https://twitter.com/VivaryGolfClub" data-widget-id="346996915877060608" width="520px" height="300px" data-chrome="">Tweets by @VivaryGolfClub</a>
    </section>
		<section class="action-links">
			<a href="/member" class="module">
				<span data-icon="&#xe000;"></span>
				<h3>Make a Booking</h3>
				<p>Please call the club on<br>01823 333875</p>
			</a>
			<a href="/gallery" class="module">
				<span data-icon="&#xe003;"></span>
				<h3>Our Gallery</h3>
				<p>Check out the course gallery to see what we have to offer</p>
			</a>
			<a href="/member" class="module">
				<span data-icon="&#xe008;"></span>
				<h3>Membership Options</h3>
				<p>Don't miss out on these great deals, everyone is welcome</p>
			</a>
		</section>
		<section class="module user-testimonials">
			<h3>This is what people are saying about Vivary Golf Club:</h3>
			<ul>
				<li data-icon="&#xe001;">
					<p>Visited family in Taunton and strolled up to Vivary for a look see. I booked in and played the following day, hired clubs, trolley and off I went. Absolutely brilliant, everybody so friendly, the course challenging but not intimidating and a lot of fun. Wish I lived closer and look forward to my next visit.</p>
					<span>- Peter Arnold (Leicester) June 2012.</span>
				</li>
				<li data-icon="&#xe001;">
					<p>On the way to Cornwall with my husband called in to play at Vivary. So amazed at the fantastic condition of this municipal course. Friendly atmosphere in the clubhouse, the food excellent and very reasonably priced. Definitely worth a return visit.</p>
					<span>- Hilary and David Bessinger (Bridgend) September 2012</span>
				</li>
				<li data-icon="&#xe001;">
					<p>Wanted somewhere where I could take my 11 year old son for a game and was recommended to try Vivary Park. An absolute delight and we both thoroughly enjoyed the round. So much so that we have both joined the club and taking lessons from Richard the club professional.</p>
					<span>- Wayne Thomas (North Petherton) January 2013</span>
				</li>
			</ul>
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
				<p>
					Vivary Golf Club
					Fons George Rd<br>
					Taunton
					Somerset<br>
					TA1 3JT<br><br>
					Tel:<br>
					01823 333875<br><br>
					Open Mon - Sun
					07:30 - Dusk
				</p>
			</div>
			<a href="http://maps.google.com/maps?q=Vivary+Park+Golf+Course,+Taunton,+United+Kingdom&amp;hl=en&amp;sll=37.0625,-95.677068&amp;sspn=34.671324,79.013672&amp;oq=vivary+golf+c&amp;hq=Vivary+Park+Golf+Course,+Taunton,+United+Kingdom&amp;t=m&amp;z=14" title="Find Us On Google Maps" target="_blank">
        <img src="<?php bloginfo('template_url'); ?>/images/map.jpg" alt="Find Us On Google Maps!">
      </a>
		</section>
		<section class="legal-links">
			<div class="legal-navigation">
				<a href="/">home</a>
				<a href="/member">membership</a>
				<a href="/contact">contact</a>
				<a href="/about">about</a>
			</div>
			<div class="copyright">
				&copy; Vivary Golf <?php echo date('Y'); ?><p>Website Designed and Developed by Foundation Degree Students at <a href="http://www.somerset.ac.uk" target="_blank">Somerset College of Arts &amp; Technology</a></p>
			</div>
		</section>
	</footer>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.plugin.min.js"></script>
<script type="text/javascript">
	
	(function(){
 
	  $(window).on('scroll', function () {
	    var yPos = $(window).scrollTop();
	    if(yPos < 400) {
	      $(".site-header").removeClass("fixed-site-header");
	      $(".slider img").css({"top" : yPos / 1.5 + "px"});
	    } else {
	      $(".site-header").addClass("fixed-site-header");
	    }
	  });
 
	  $("#slider-content").slider({
      "cycleTime": 8000,
      "fadeSpeed": 1000,
      "buildControls": true
    });
 
	  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
 
	})();
 
</script>
</body>
</html>