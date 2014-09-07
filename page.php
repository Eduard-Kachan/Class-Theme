	<?php get_header(); ?>	
		<section class="single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
						<!-- <p class="italic">This entry was posted on <?php the_date('F j, Y'); ?>.</p> -->
					</header>
					<section class="article-body">
						<?php the_content(); ?>
					</section>
				</article>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</section>
		<?php get_sidebar(); ?>
	<?php get_footer(); ?>