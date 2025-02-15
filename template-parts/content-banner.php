  <!-- BANNER SEC START -->
 
  <section class="banner">
        <div class="container">
            <div class="banner-outer">
                <div class="banner-heading">
                    <h1><?php echo the_field('ban_heading'); ?></h1>
                </div>
                <?php if( have_rows('banner_box_services') ): ?>
                    <ul class="banner-services">
                    <?php while( have_rows('banner_box_services') ): the_row();
                        ?>
                       <div class="service-box">
                        <div class="img">
                            <img src="<?php echo get_sub_field('service_box_image'); ?>" alt="" />
                        </div>
                        <div class="service-info">
                            <h5><?php echo get_sub_field('service_box_heading'); ?></h5>
                            <p>
                            <?php echo get_sub_field('service_box_info'); ?>
                            </p>
                            <div class="service-angle">
                                <a href="#"><?php echo get_sub_field('service_arrow'); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- BANNER SEC END -->