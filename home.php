	<?php get_header(); ?>
		<section class="content">
			<?php 
				$args = array(
					'posts_per_page' => 1,
					'post__in'  => get_option( 'sticky_posts' ),
					'ignore_sticky_posts' => 1
				);
				$the_query = new WP_Query( $args );
			?>
			<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post();?>
			<section class="latest">
				<article>
					<header>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p class="italic">This entry was posted in <?php (strip_tags(":",the_category(','))); ?> on <?php the_date('F j, Y'); ?>.</p>
					</header>
					<section class="article-body">
						<!-- <p><?php echo wp_trim_words( get_the_content(), 60 ); ?> <a href="<?php the_permalink(); ?>">Read more</a></p> -->
						<?php the_excerpt(); ?>
					</section>
				</article>
			</section>
		<?php endwhile; endif;?>
			<section class="featured">
				<h3>Featured Posts</h3>
				<?php 
					$featArgs = array(
						'post_type' => 'post',
						'category_name' => 'featured'
					);
					$the_query = new WP_Query( $featArgs )
				?>

				<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
					<div class="post">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="italic"><?php the_date('F j, Y'); ?>.</p>
					</div>
				<?php endwhile; else: ?>
					<div class="post">
						<p>no eatured posts found</p>
					</div>
				<?php endif ?>
			</section>
			<section class="recent">
				<h3>Recent Posts</h3>
				<?php 
					$args=array('
						post_type'=>'post',
						'ignore_sticky_posts' => 1
					);
					$the_query=new WP_Query($args);
				?>
				<?php if( have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post();?>
					<article>
						<header>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="italic">This entry was posted in <?php (strip_tags(":",the_category(','))); ?> on <?php the_date('F j, Y'); ?>.</p>
						</header>
						<section class="article-body">
							<!-- <p><?php echo wp_trim_words( get_the_content(), 60 ); ?> <a href="<?php the_permalink(); ?>">Read more</a></p> -->
							<?php the_excerpt(); ?>
						</section>
					</article>
				<?php endwhile; else: ?>
					<p>no posts found</p>
				<?php endif; ?>
			</section>
		</section>
		<?php get_sidebar(); ?>
	<?php get_footer(); ?>




