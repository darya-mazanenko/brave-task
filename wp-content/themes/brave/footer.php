<?php
/**
 * Theme Footer
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<?php if ( is_active_sidebar( 'footer-about' ) ) : ?>
				<div class="footer-item">
					<?php dynamic_sidebar( 'footer-about' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-menu1' ) ) : ?>
				<div class="footer-item">
					<?php dynamic_sidebar( 'footer-menu1' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-menu2' ) ) : ?>
				<div class="footer-item">
					<?php dynamic_sidebar( 'footer-menu2' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-menu3' ) ) : ?>
				<div class="footer-item">
					<?php dynamic_sidebar( 'footer-menu3' ); ?>
				</div>
			<?php endif; ?>
		</div>		
		<div class="footer-bottom">
			<div class="legal-info">
				<?php	
					echo __( 'Copyright © Scotts of Thrapston 2021', 'brave' );
				?>
				<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'https://www.scottsofthranston.com/privacy-policy/', 'brave' ) ); ?>">
					<?php					
						echo esc_html(__( 'Privacy Policy', 'brave' ) );
					?>
				</a>
				<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'https://www.scottsofthranston.com/terms-and-conditions/', 'brave' ) ); ?>">
					<?php					
						echo esc_html(__( 'Terms and Conditions', 'brave' ) );
					?>
				</a>
			</div>
			<div class="design-info">						
				<?php
					printf( esc_html__( 'Website Design by %1$s', 'brave' ), '<a href="https://www.brave.agency">Brave Agency</a>' );
				?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>