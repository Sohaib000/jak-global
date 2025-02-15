    <!-- OFFER SEC START -->
    <section class="offer">
    <?php if(have_rows('offer_repeater') ):?>
        <div class="offer-outerwrap">
            <?php while(have_rows('offer_repeater') ):the_row()?>
                <div class="offer-box">
                    <h2><?php echo get_sub_field('offer_number'); ?></h2>
                    <h3><?php echo get_sub_field('offer_title'); ?></h3>
                    <p><?php echo get_sub_field('offer_info'); ?></p>
                    <div class="offer-btn">
                        <a href="<?php echo get_sub_field('offer_button_link'); ?>"><?php echo get_sub_field('offer_button_text'); ?></a>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    <?php endif;?>
     </section>
    <!-- OFFER SEC END -->