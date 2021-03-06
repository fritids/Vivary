<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

    <div class="main-content / page-loop">

        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('module') ?> id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>

    </div>

<?php get_footer(); ?>