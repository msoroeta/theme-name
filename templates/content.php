<article <?php post_class(); ?>>
	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php get_template_part('templates/entry-meta'); ?>
	  </header>
	  <div class="featuredimage">
	  	<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail( 'medium' );
			} 
			else 
				
		?>
	  </div>
	  <div class="entry-summary">
	    <?php the_excerpt(); ?>
	  </div>
</article>
