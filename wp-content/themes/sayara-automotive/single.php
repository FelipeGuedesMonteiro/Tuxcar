<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<?php
		    $layout_settings = get_theme_mod( 'sayara_automotive_layout_settings', __('Right Sidebar','sayara-automotive') );
			if($layout_settings == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); 

						get_template_part( 'template-parts/post/single-post' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();

						endif;

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'sayara-automotive' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'sayara-automotive' ) . '</span>',
						) );

					endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($layout_settings == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); 

						get_template_part( 'template-parts/post/single-post' ); 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'sayara-automotive' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'sayara-automotive' ) . '</span>',
						) );

					endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($layout_settings == 'One Column'){ ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); 

					get_template_part( 'template-parts/post/single-post' ); 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );

					the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'sayara-automotive' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'sayara-automotive' ) . '</span>',
					) );

				endwhile; // End of the loop.

				?>
			<?php }else if($layout_settings == 'Grid Layout'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); 

						get_template_part( 'template-parts/post/single-post' ); // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'sayara-automotive' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'sayara-automotive' ) . '</span>',
						) );

					endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); 

						get_template_part( 'template-parts/post/single-post' ); 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'sayara-automotive' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'sayara-automotive' ) . '</span>',
						) );

					endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }?>
		</div>
	</div>
</main>

<?php get_footer();
