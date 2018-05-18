        <footer style="background-color: <?php the_field('footer_background_color');?>; color: <?php the_field('footer_font_color'); ?>;">
            <div class="container">
                <div class="footer">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="The J" align="left">
                            <p><?php the_field('footer_address'); ?></p>
                            <br />
                            <a href="<?php the_field('header_fullsite_link'); ?>" title="Visit full site">VISIT FULL SITE</a>
                        </div>
                        <div class="col-6 social">
                            <a href="<?php the_field('footer_facebook_link'); ?>" title="Facebook The J">
                                <img src="<?php the_field('footer_facebook_icon'); ?>" alt="Facebook The J">
                            </a>
                            <a href="<?php the_field('footer_twitter_link'); ?>" title="Twitter The J">
                                <img src="<?php the_field('footer_twitter_icon'); ?>" alt="Twitter The J">
                            </a>
                            <a href="<?php the_field('footer_instagram_link'); ?>" title="Instagram The J">
                                <img src="<?php the_field('footer_instagram_icon'); ?>" alt="Instagram The J">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>