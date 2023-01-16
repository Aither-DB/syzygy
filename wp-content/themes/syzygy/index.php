<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head >

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Syzygy | B2B web development</title> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

</head>

<body>

    <nav class="navbar navbar-default gradient-bg main-custom-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'menu_class'        => 'primary-menu',
                            'container'         => false,
                            'items_wrap'        =>'%3$s'
                        ));
                    ?>
                </ul>
            </div>
        </div> <!-- container-->
    </nav>

    <div class="jumbotron gradient-bg margin-neg-20">
        <div class="container" text-align="center">
            <h1> Welcome to Syzygy! </h1>
        </div>
    </div>

    <div class="container">
        <button type="button" class="btn btn-success">Success</button>
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <h2>A single blog post.</h2>
                <?php the_title(); ?>
                <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>


<?php wp_footer(); ?>

</body>
</html>