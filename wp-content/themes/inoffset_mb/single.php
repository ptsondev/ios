<?php get_header(); ?>

<?php get_template_part('breadcrumb');?>

<div id="main-area">		
	<div class="container wrapper">		
		
		<div id="main-content" class="col-sm-9 col-xs-12" role="main">			
			<?php while ( have_posts() ) : the_post(); ?>

				<article itemscope itemtype="http://schema.org/CreativeWork" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 id="site-title" class="entry-title" itemprop="about"><?php the_title(); ?></h1>			                    
					<div  class="entry-content" itemprop="text">
						<?php the_content(); ?>
					</div>					
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>					
				</article>

			<?php endwhile; ?>
			
		</div>
					
	</div>
</div>

<?php get_footer(); ?>
