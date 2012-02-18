<?php get_header(); ?>
<div id="content">
	
	<?php $count = 0; ?>
	<?php if (have_posts()) : while (have_posts() && count < 1) : the_post(); ?>
		<?php $count++; ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

</div><!--content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
