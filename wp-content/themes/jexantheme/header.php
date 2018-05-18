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
        <header>
            <div>
                <div class="container-fluid">
                    <div class="header">
                        <div class="row">
                            <div class="col-3 col-md-2 text-right">
                                <a href="/" title="The J">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="The J">
                                </a>    
                            </div>
                            <div class="col-6 col-md-6 text-left">                                
                                <?php jexan_wp_nav_desktop_menu(); ?>
                            </div>
                            <div class="col-3 col-md-4">
                                <div class="d-block d-md-none">
                                    <div id="menuToggle">
                                        <input type="checkbox" />
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <?php jexan_wp_nav_desktop_menu(); ?>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <a href="<?php the_field('header_donate_link'); ?>" target="_blank" title="Donate" class="btn btn-red shadow-rb" style="margin-right:10px;">Donate</a>
                                    <a href="<?php the_field('header_fullsite_link'); ?>" target="_blank" title="Main Site" class="btn btn-blue shadow-rb">Main Site</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>    
        </header>
        <section>
            <div class="banner">
                <?php jexan_create_responsive_image('top_header_banner'); ?>    
            </div>
            <div class="boxcontainer">
                <div>
                    <div class="boxtitle">
                        <div class="thetitle"><?php the_field('top_header_title'); ?></div>
                        <div class="theheadline"><?php the_field('top_header_headline'); ?></div>
                    </div>   
                </div>
            </div>
        </section>
