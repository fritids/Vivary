<?php get_header(); ?>

    <div class="main-content / category">

        <div class="module">

            <h1>Match and Competition Results</h1>

            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2>Results for <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </article>
            <?php endwhile; ?>

        </div>

    </div>

<?php get_footer(); ?>