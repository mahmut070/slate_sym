<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>
	


<div class="u-gridContainer">

  <div class="u-gridRow">

    <div class="u-gridCol8">
                
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
			</article>
		<?php endwhile; endif; ?>
	</div>

	<div class="u-gridCol4">
    	<div class="youtube-videos">
      	<?php get_sidebar(); ?>
    	</div>
	</div>

  </div>

</div>

<?php get_footer(); ?>
