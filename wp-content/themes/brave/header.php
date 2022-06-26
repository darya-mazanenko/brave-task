<?php 
/**
 * Theme Header 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="top-header">
                <p class="top-text">Engrained with passion and quality for over 100 years.</p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_id'        => 'top-menu',
                        'menu_class'     => 'top-menu'
                    )
                );
                ?>
            </div>                   
            <nav id="site-navigation" class="main-navigation">  
                <div class="site-branding">       
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->
                <div class="main-menu-wrap">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary_menu',
                            'container'      => '',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'main-menu'
                        )
                    );
                    ?>
                    <div class="more-btn">
                        <a href="#">
                            <span class="dots-wrap">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </span>                            
                            <span>MORE</span>
                        </a>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->