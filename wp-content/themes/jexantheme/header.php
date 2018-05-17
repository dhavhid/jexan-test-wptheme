<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo get_bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.min.css" />
    </head>
    <body>
        <section>
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-5">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-top-menu' ) ); ?>
                        </div>
                        <div class="col-sm-4">
                            <!--<input type="button" class="btn btn-red" value="DONATE">
                            <input type="button" class="btn btn-sky-blue" value="MAIN SITE">-->
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <section>
            <div class="banner">
                <div>
                    <?php jexan_create_responsive_image('top_header_banner'); ?>

                    <div class="boxtitle">
                        <div class="thetitle"><?php the_field('top_header_title'); ?></div>
                        <div class="theheadline"><?php the_field('top_header_headline'); ?></div>
                    </div>
                </div>    
            </div>
        </section>
