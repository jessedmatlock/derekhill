<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns wow bounceInUp"  data-wow-delay="0.4s" id="content" role="main">
	<?php if ($GLOBALS['$show_titles']){ echo 'Index'; }  ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<aside id="sidebar" class="small-12 large-4 columns">
		<?php get_sidebar(); ?>
	</aside>	
</div><!-- Row End -->
		
<?php get_footer(); ?>