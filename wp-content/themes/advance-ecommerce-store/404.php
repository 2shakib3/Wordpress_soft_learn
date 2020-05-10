<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package advance-ecommerce-store
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="middle-align">
			<h1><?php echo esc_html(get_theme_mod('advance_ecommerce_store_title_404_page',__('404 Not Found','advance-ecommerce-store')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','advance-ecommerce-store')));?></p>
			<?php if( get_theme_mod('advance_ecommerce_store_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_button_404_page',__('Back to Home Page','advance-ecommerce-store')));?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'advance-ecommerce-store' ); ?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>