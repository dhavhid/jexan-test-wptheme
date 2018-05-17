
<?php

get_header();
?>
        <section style="background-color: <?php the_field('about_background_color');?>; color: <?php the_field('about_font_color'); ?>;">
            <div class="container">
                <div class="about">
                    <div class="row">
                        <div class="offset-1 col-10">
                            <?php the_field('about_content'); ?>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
<?php
get_footer();
?>