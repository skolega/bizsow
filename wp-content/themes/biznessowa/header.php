<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body>
        <div id="content" class="site-content">
            <div class="header">
                <div class="container">
                <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <div class="row header">
                        <div class="col-md-4">
                             <?php echo ('<a href="'.get_site_url().'"><img src="'.$image[0].'"/></a>');?>
                        </div>
                        <div class="col-md-8">
                             <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_extra_menu_class' ) );?>
                        </div>
                    </div>
                </div>
    </div>

