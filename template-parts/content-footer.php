    <!-- FOOTER SEC START -->
    <footer>
        <div class="footer-wrap">
            <div class="footer-block">
                <div class="footer-logo">
                    <img src="<?php echo the_field('footer_logo_img', 'option'); ?>" alt="footer-logo">
                    <p><?php echo the_field('footer_tag_line', 'option'); ?></p>
                </div>
                <div class="footer-comp">
                    <h4><?php echo the_field('footer_company_title', 'option'); ?></h4>

                    <?php if(have_rows('footer_company_repeater', 'option')):?>
                    <ul>
                        <?php while(have_rows('footer_company_repeater', 'option') ):the_row();
                        ?>
                        <li><a href="<?php echo get_sub_field('company_menu_link', 'option'); ?>"><?php echo get_sub_field('company_menu_text', 'option'); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>


                <div class="footer-comp">
                    <h4><?php echo the_field('footer_resources_title', 'option');?></h4>

                    <?php if (have_rows('footer_resources_repeater', 'option')): ?>
                    <ul>
                        <?php while(have_rows('footer_resources_repeater', 'option') ):the_row(); 
                        ?>
                        <li><a href="<?php echo get_sub_field('resources_menu_link', 'option'); ?>"><?php echo get_sub_field('resources_menu_text', 'option'); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                </div>

       
                
                <div class="footer-comp">
                    <h4><?php echo the_field('footer_news_title', 'option');?></h4>
                    <div class="footer-info">
                        <div class="footer-email">
                            <i class="fa-regular fa-envelope"></i><input type="email" name="email" id="" placeholder="Enter your email address">
                        </div>
                        <div class="footer-btn">
                            <a href="<?php echo the_field('footer_subscribe_btn_link', 'option'); ?>"><?php echo the_field('footer_subscribe_btn_text', 'option'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p><?php echo the_field('footer_copyright_text', 'option')?></p>
            </div>
        </div>
     </footer>
    <!-- FOOTER SEC END -->

    <!-- JS START -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <script src="https://kit.fontawesome.com/974ad65308.js"></script>
    <!-- JS END -->