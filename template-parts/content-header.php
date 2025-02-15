<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JK Global</title>
    <!-- CSS START -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/query.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" />
    <!-- CSS END -->
</head>
    <!-- HEADER SEC START -->
    <header>
        <div class="container">
            <div class="header-outer">
                <div class="header-nav">
                    <ul>
                    <?php
                        wp_nav_menu(
                            array(
                            'menu' => 'Menu 1',
                            )
                        ); ?>
                    </ul>
                </div>
                <div class="header-logo">
                    <?php 
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                    <a href="index.php">
                    <img src="/assets/images/header-logo.png" alt="" />
                    <?php } ?>
                    </a>

                    
                </div>
                <div class="header-btn">
                    <a href="#">contact us</a>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SEC END -->