<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

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
				<form action="<?php bloginfo('template_url'); ?>contactform.php" method="POST" class="contact">
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

	<?php get_footer(); ?>