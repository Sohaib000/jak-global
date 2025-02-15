    <!-- SLIDER SEC START -->
    <section class="jak-slides">

    <?php if( have_rows('jak_company_slider_') ): ?>
        <ul class="jak-slider">
        <?php while( have_rows('jak_company_slider_') ): the_row(); ?>
            <div>
                <div class="jak-inner">
                    <img src="<?php echo get_sub_field('jak_slider_images');?>" alt="">
                </div>
            </div>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>


     </section>
    <!-- SLIDER SEC END -->