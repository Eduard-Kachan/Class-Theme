	<?php get_header(); ?>			
		<section class="archive">
			<h2 class="title"><?php wp_title(''); ?></h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<header>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p class="italic">This entry was posted in <?php (strip_tags(":",the_category(','))); ?> on <?php the_date('F j, Y'); ?>.</p>
					</header>
					<section class="article-body">
						<?php the_excerpt(); ?>
					</section>
				</article>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</section>
		<?php get_sidebar(); ?>
	<?php get_footer(); ?>