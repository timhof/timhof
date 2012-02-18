<?php get_header(); ?>
	<div id="content">

	<?php $count = 0; ?>
	<?php the_post(); ?>
			
		<?php $count++ ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?> 
			<h2 class="post_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>
<!--
			<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>
-->

		</article>


	<?php //include (TEMPLATEPATH . '/_/inc/nav.php' ); ?> 

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
