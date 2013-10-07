<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); $i = 0; ?>

<?php $thumbnails = get_field('gallery_items'); ?>

<?php var_dump($thumbnails['3']); ?>

<?php if(get_field('gallery_thumbnails')) : ?>

	<div class="gallery-grid">

		<?php while(has_sub_field('gallery_thumbnails')) : ?>

				<img src="<?php the_sub_field('gallery_thumbnail') ?>" class="gallery-item" data-index="<?php echo $i ?>" alt="" />

			<?php $i++ ?>

		<? endwhile; ?>

	</div>

<? else : ?>

		<div class="gallery-grid">
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/1.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/2.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/3.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/4.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/5.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/6.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/7.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/8.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/9.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/10.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/11.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/12.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/13.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/14.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/15.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/16.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/17.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/18.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/19.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/20.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/21.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/22.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/23.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/24.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/25.JPG" class="gallery-item" alt="" />
			<img src="<?php bloginfo('template_url'); ?>/images/gallery/thumbnails/27.JPG" class="gallery-item" alt="" />
    </div>

<? endif; ?>

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

  	var arrayFromPHP = <?php echo json_encode($thumbnails); ?>;

    var $window = $(window),
    $overlay = $('.overlay'),
    $popup = $('.large-gallery-image'),
    $thumbs = $('.gallery-item'),
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

    $thumbs.on('click', function () {
      $overlay.fadeIn();

      var popupSizes = sizes();
      var itemPos = $(this).attr('data-index');
      var itemIndex = arrayFromPHP[itemPos];

      alert(arrayFromPHP);

      $popup.animate({
        height: popupSizes.popHeight,
        width: popupSizes.popWidth,
        marginLeft: popupSizes.popMarginLeft,
        marginTop: popupSizes.popMarginTop
      }, { queue: false })
        .fadeIn()
        .children('img')
        .attr('src', $(this).attr('src').replace('',''));

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