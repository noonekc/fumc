<!DOCTYPE html>
<html <?php language_attributes();?>>

    <head>

        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="<?php the_title();?>" />
        <meta property="og:site_name" content="<?php bloginfo('name')?>">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato|Nunito+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/cle6jcf.css">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/flickity.min.css">
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script>
        <script type="text/javascript"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/flickity.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.js">
        </script>


        <?php
/* Theme color for browsers that support it
<meta name="theme-color" content="#000">
 */
?>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
        <?php endif;?>

        <?php if (is_search()) {?>
        <meta name="robots" content="noindex, nofollow" />
        <?php }?>

        <?php if (is_singular() && comments_open()) {
    wp_enqueue_script('comment-reply');
}
?>

        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>
        <?php // Header ?>
        <?php
$cover_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
?>
        <header class="header" style="background-image: url('<?php echo $cover_image_url[0] ?>')">
            <div class="eyebrow">
                <div class="container">
                    <a href="/fumc/im-new-here" class="button button--outline">I'm New Here</a>
                </div>
            </div>
            <div class="main">
                <div class="container">
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo1.png"
                                alt="First Methodist Church" /></a>
                    </div>
                    <div class="nav--toggle">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>

                    <nav class="primary">
                        <?php wp_nav_menu(array('theme_location' => 'primary'));?>

                        <!-- <ul class="
                            primary-nav">
                        <li class="primary-nav__item has-children">
                            <a href="#">About</a>
                            <ul class="child-nav">
                                <li class="primary-nav__item--child-item">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="primary-nav__item--child-item">
                                    <a href="#">About Us</a>
                                </li>
                                <li class="primary-nav__item--child-item">
                                    <a href="#">Leadership</a>
                                </li>
                            </ul>
                        </li>
                        <li class="primary-nav__item has-children">
                            <a href="#">Connect</a>
                            <ul class="child-nav">
                                <li class="primary-nav__item--child-item">
                                    <a href="#">Ministries</a>
                                </li>
                                <li class="primary-nav__item--child-item">
                                    <a href="#">Events</a>
                                </li>
                            </ul>
                        </li>
                        <li class="primary-nav__item"><a href="#">Resource</a></li>
                        <li class="primary-nav__item"><a href="#">Give</a></li>
                        </ul> -->
                    </nav>
                </div>
            </div>
            <div class="hero">
                <div class="hero--text">
                    <h1 class="headline"><?php the_post_thumbnail_caption()?></h1>
                    <div class="subhead"><?php echo get_post(get_post_thumbnail_id())->post_content ?></div>
                </div>
            </div>
        </header>

        <?php // Main Content ?>
        <main>