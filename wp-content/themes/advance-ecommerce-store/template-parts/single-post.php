<?php
/**
 * The template part for displaying services
 *
 * @package advance-ecommerce-store
 * @subpackage advance-ecommerce-store
 * @since advance-ecommerce-store 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="page-box-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php esc_html(the_title());?></h1>
	<?php if( get_theme_mod( 'advance_ecommerce_store_author_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_date_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_comment_hide',true) != '') { ?>
	    <div class="metabox">
	      <?php if( get_theme_mod( 'advance_ecommerce_store_author_hide',true) != '') { ?>
	        <span class="entry-author"><i class="fa fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php esc_html(the_author()); ?><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a></span>
	      <?php } ?>
	      <?php if( get_theme_mod( 'advance_ecommerce_store_date_hide',true) != '') { ?>
	        <span class="entry-date"><i class="fa fa-calendar"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
	      <?php } ?>     
	      <?php if( get_theme_mod( 'advance_ecommerce_store_comment_hide',true) != '') { ?>
	        <span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-ecommerce-store'), __('0 Comments', 'advance-ecommerce-store'), __('% Comments', 'advance-ecommerce-store') ); ?> </span>
	      <?php } ?>
	    </div>
	<?php }?>
	<?php if(has_post_thumbnail()) { ?>
    <hr>
    <div class="feature-box">   
      <?php the_post_thumbnail(); ?>
    </div>
    <hr>                    
    <?php } ?> 
    <div class="entry-content">
      <?php the_content(); ?>     
    </div> 
    <?php if( get_theme_mod( 'advance_ecommerce_store_tags_hide',true) != '') { ?>
    <div class="tags"><p><?php
        if( $tags = get_the_tags() ) {
          echo '<i class="fas fa-tags"></i>';
          echo '<span class="meta-sep"></span>';
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
          }
        } ?></p></div>
    <?php } ?>
    <?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-ecommerce-store' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-ecommerce-store' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-ecommerce-store' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'advance-ecommerce-store' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'advance-ecommerce-store' ) . '</span> ' ,
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'advance-ecommerce-store' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-ecommerce-store' ) . '</span> ' ,
		) );
	}

	echo '<div class="clearfix"></div>'; ?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}?>
</article>