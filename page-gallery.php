<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

<p>blahtest</p>

<?php the_content(); ?>

    <div class="large-gallery-image">
      <a class="close-button close-feature">&times;</a>
      <img src="<?php bloginfo('template_url'); ?>/images/gallery/1.jpg" alt="">
    </div>
    <div class="overlay close-feature">
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
        <img src="<?php bloginfo('template_url'); ?>/images/map.jpg" alt="Find Us On Google Maps!">
      </a>
		</section>
		<section class="legal-links">
			<div class="legal-navigation">
				<a href="/">home</a>
				<a href="member.php">membership</a>
				<a href="contact.php">contact</a>
				<a href="about.php">about</a>
			</div>
			<div class="copyright">
				&copy; Vivary Golf 2013<p>Website Designed and Developed by Foundation Degree Students at <a href="http://www.somerset.ac.uk" target="_blank">Somerset College of Arts &amp; Technology</a></p>
			</div>
		</section>
	</footer>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
  (function () {

    var $window = $(window),
    $overlay = $('.overlay'),
    $popup = $('.large-gallery-image'),
    $thumbs = $('.attachment-thumbnail'),
    $closeBtn = $('.close-feature');

    function sizes() {
      var windowWidth = $window.outerWidth(),
      windowHeight = $window.outerHeight(),
      w = (windowWidth < 900 && windowWidth > 400) ? windowWidth : 900,
      h = (windowHeight < 650 && windowHeight > 200) ? windowHeight : 650;

      return {
        popWidth: w,
        popHeight: h,
        popMarginLeft: -(w/2),
        popMarginTop: -(h/2)
      }
    }

    $thumbs.on('click', function (e) {
		e.preventDefault();
      $overlay.fadeIn();

      var popupSizes = sizes();

      $popup.animate({
        height: popupSizes.popHeight,
        width: popupSizes.popWidth,
        marginLeft: popupSizes.popMarginLeft,
        marginTop: popupSizes.popMarginTop
      }, { queue: false })
        .fadeIn()
        .children('img')
        .attr('src', $(this).attr('src').replace('-280x250',''));

    });

    $closeBtn.on('click', function () {
      $overlay.fadeOut();

      $popup.animate({
        height: 0,
        width: 0,
        marginLeft: 0,
        marginTop : 0
      }, {queue: false })
          .fadeOut();
    });

  })();
</script>
</body>
</html>