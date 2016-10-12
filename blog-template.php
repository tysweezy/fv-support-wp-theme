<?php
/**
 * Template Name: Blog Template
 *
 */
get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

          
			<?php while ( have_posts() ) : the_post(); ?> 
			  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></h3>

              <span class="entry-date"><?php echo get_the_date(); ?></span>
			<?php endwhile; ?>

        <?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
        
<?php get_footer(); ?>