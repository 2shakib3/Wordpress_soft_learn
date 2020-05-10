<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package advance-ecommerce-store
 */
?>
<header role="banner">
	<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'advance-ecommerce-store' ); ?></h2>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'advance-ecommerce-store' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'advance-ecommerce-store' ); ?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'advance-ecommerce-store' ); ?></p><br />
		<div class="read-moresec">
			<a href="<?php echo esc_url(home_url()); ?>" class="button"><?php esc_html_e( 'Return to Home Page', 'advance-ecommerce-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to Home Page', 'advance-ecommerce-store' ); ?></span></a>
		</div>
<?php endif; ?>