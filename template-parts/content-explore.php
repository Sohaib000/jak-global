    <!-- EXPLORE SEC START -->
    <section class="explore">
        <div class="explore-outer">
            <div class="explore-img">
                <img src="<?php echo the_field('explore_image'); ?>" alt="">
            </div>
            <div class="explore-data">
                <h3><?php echo the_field('explore_heading'); ?></h3>
                <p><?php echo the_field('explore_info'); ?></p>

                <?php if( have_rows('explore_button_repeater') ): ?>
                    <ul class="explore-btn">
                    <?php while ( have_rows('explore_button_repeater') ):the_row(); 
                        ?>

                    <a href="<?php echo get_sub_field('explore_button_link'); ?>"><?php echo get_sub_field('explore_button_text'); ?></a>
                   
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
     </section>
    <!-- EXPLORE SEC END -->