<?php
/**
 * Front Page template
 */

/*-------------------
  General Fields
 -------------------*/
 $icon = get_field('icon');

/*-------------------
  Main Banner
--------------------*/
$banner = get_field('hero');
if( $banner ):
    $heading = $banner['heading'];
    $image = $banner['image'];
    $bm_title = $banner['bottom_menu_title'];
    $under_banner = $banner['under_banner'];
endif;

/*---------------------
  Why Choose Us Section
----------------------*/
$feature1 = get_field('feature_1');
$feature2 = get_field('feature_2');
if( $feature1 ):
    $title1 = esc_html($feature1['title']);
    $description1 = esc_html($feature1['description']);
    $image1 = $feature1['image'];
    $link1 = esc_url($feature1['link']);
endif; 

if( $feature2 ):
    $title2 = esc_html($feature2['title']);
    $description2 = esc_html($feature2['description']);
    $image2 = $feature1['image'];
    $link2 = esc_url($feature2['link']);
endif; 

get_header();
?>

<main id="primary" class="site-main">
    <div class="home-banner" style='background-image: url("<?php echo $image; ?>");'>
        <h1 class="banner-title"><?php echo $heading; ?></h1>
        <h3 class="banner-subtitle"><span><?php echo $bm_title; ?></span></h3>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'banner_menu',
                    'container'      => '',
                    'menu_id'        => 'banner-menu',
                    'menu_class'     => 'banner-menu'
                )
            );
        ?>
    </div>
    <div class="banner-description">
        <p><?php echo $under_banner; ?></p>
    </div>
    
		<?php
		if ( have_posts() ) :			            	

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

                the_content();

			endwhile;

		endif;        
		?>

        <div class="home-features" >
            <h2>Why choose Scotts of Thrapston?</h2>
            <p>Our History  |  Our Experience  |  Our Quality  |  Our Service</p>
            <div class="features-slider">
                
                <!-- Swiper -->
                <div class="swiper" style="height: 619px;">      
                    <div class="swiper-button-prev"></div>                
                    <div class="demo-pagination"></div>
                    <div class="swiper-button-next"></div>              
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <h3><?php echo $title1; ?></h3>
                                <img src="<?php echo $image1; ?>" alt="">                            
                                <p><?php echo $description1; ?></p>
                                <a href="<?php echo $link1; ?>">find out more</a>                                
                            </div> 
                            <?php if( $icon ): ?>  
                                <img class="icon" src="<?php echo $icon; ?>" alt="">                             
                            <?php endif; ?>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <h3><?php echo $title1; ?></h3>
                                <img src="<?php echo $image2; ?>" alt="">                             
                                <p><?php echo $description2; ?></p>    
                                <a href="<?php echo $link2; ?>">find out more</a>                            
                            </div>                             
                            <?php if( $icon ): ?>  
                                <img class="icon" src="<?php echo $icon; ?>" alt="">                             
                            <?php endif; ?>
                        </div>   
                        
                    </div>           
                </div>
            </div>
        </div>
	</main><!-- #main -->

<?php
get_footer();