<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Meta Tags & Browser Stuff -->
    
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
    <div class="page-wrap">
        <header class="site-header">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/main-site-logo.png" alt="Vivary Park Logo" class="main-branding-logo"></a>
            <nav class="site-navigation">
                <a href="/">home</a>
                <a href="/member/">membership</a>
                <a href="/contact/">contact</a>
                <a href="/about/">about</a>
            </nav>
        </header>
