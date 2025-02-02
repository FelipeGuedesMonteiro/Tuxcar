<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="blogger singlebox">
		<div class="post-image">
		    <?php 
		      if(has_post_thumbnail()) { 
		        the_post_thumbnail(); 
		      }
		    ?>
	 	</div>
		<div class="category">
		  	<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_category(); ?><span class="screen-reader-text"><?php esc_attr_e( 'Category','sayara-automotive' );?></span></a>
		</div>
		<?php if( get_theme_mod( 'sayara_automotive_date_hide',true) != '' || get_theme_mod( 'sayara_automotive_comment_hide',true) != '' || get_theme_mod( 'sayara_automotive_author_hide',true) != '') { ?>
			<div class="post-info">
				<?php if( get_theme_mod( 'sayara_automotive_date_hide',true) != '') { ?>
				  <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
				<?php } ?>

				<?php if( get_theme_mod( 'sayara_automotive_author_hide',true) != '') { ?>
				  <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
				<?php } ?>

				<?php if( get_theme_mod( 'sayara_automotive_comment_hide',true) != '') { ?>
				  <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','sayara-automotive'), __('0 Comments','sayara-automotive'), __('% Comments','sayara-automotive') ); ?></span>
				<?php } ?>
			</div>
		<?php } ?>
		<h1><?php the_title();?></h1>
		<div class="text">
	    	<?php the_content();?>
	  	</div>
	  	<?php if( get_theme_mod( 'sayara_automotive_tags_hide',true) != '') { ?>
			<div class="tags"><p><?php
		      if( $tags = get_the_tags() ) {
		        echo '<span class="meta-sep"></span>';
		        foreach( $tags as $content_tag ) {
		          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
		          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
		        }
		      } ?></p></div>
	    <?php } ?>
	</div>
</article>