
<?php
/**
 * The Front Page Template
 */
get_header();
?>
        <section style="background-color: <?php the_field('about_background_color');?>; color: <?php the_field('about_font_color'); ?>;">
            <div class="container-fluid">
                <div class="about">
                    <div class="row">
                        <div class="offset-1 col-10"><?php the_field('about_content'); ?></div>
                    </div>
                </div>
            </div>
            <div class="video-container">
                <?php jexan_create_responsive_image('about_video_image'); ?>
                <div class="video-player" onclick="window.open('<?php the_field('youtube_video_url');?>');">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/play-icon.png" alt="Play">
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="accomplishments">
                    <div class="row">
                        <div class="offset-1 col-10"><?php the_field('accomplishments_content'); ?></div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-color: <?php the_field('campaign_background_color');?>; color: <?php the_field('campaign_font_color'); ?>;">
            <div class="container">
                <div class="campaign">
                    <div class="row">
                        <div class="offset-1 col-10"><?php the_field('campaign_content'); ?></div>
                    </div>
                </div>
            </div>
        </section> 
<?php
get_footer();
?>