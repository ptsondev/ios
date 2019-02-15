<?php get_header(); ?>

<?php get_template_part('breadcrumb');?>

<div id="main-area">		
	<div class="container wrapper">				
            <div id="main-content" class="col-sm-9 col-xs-12" role="main">			
                <?php while ( have_posts() ) : the_post(); ?>

                    <article itemscope itemtype="http://schema.org/CreativeWork" id="post-<?php the_ID(); ?>" 
                             <?php post_class(); ?>>
                        
                        <?php 
                            $tab1 = get_post_meta(get_the_ID(), 'wpcf-tab-1-title', 1);
                            $tab2 = get_post_meta(get_the_ID(), 'wpcf-tab-2-title', 1);
                            $tab3 = get_post_meta(get_the_ID(), 'wpcf-tab-3-title', 1);
                            $tab4 = get_post_meta(get_the_ID(), 'wpcf-tab-4-title', 1);
                        ?>
                        <div id="service-header">
                            <h1 id="service-title" class="entry-title" itemprop="about">Dịch Vụ <?php the_title(); ?></h1>	
                            <div id="service-tabs">
                                    <a class="tab-title active" href="#tab-intro"><?php echo $tab1; ?></a>
                                    <a class="tab-title" href="#tab-images"><?php echo $tab2; ?></a>
                                    <a class="tab-title" href="#tab-prices"><?php echo $tab3; ?></a>
                                    <a class="tab-title" href="#tab-order"><?php echo $tab4; ?></a>
                            </div>

                                
                        </div>
                        
                            <div  class="entry-content" itemprop="text">
                                <div class="s-tab-content" id="tab-intro">
                                    <?php the_content(); ?>
                                </div>

                                <div class="s-tab-content" id="tab-images">
                                    <?php 
                                        $images = get_post_meta(get_the_ID(), 'wpcf-images'); 
                                        foreach($images as $img){
                                            if(!empty($img)){
                                                $tmp = aio_image_resize($img, 300, 200, TRUE);
                                                echo '<a href="'.$img.'" class="s-images" rel="s-images"><img src="'.$tmp.'" /></a>';
                                            }
                                        }
                                    ?>                                    
                                </div>

                                <div class="s-tab-content" id="tab-prices">
                                    <?php $price = get_post_meta(get_the_ID(), 'wpcf-price', 1); echo ($price); ?>
                                </div>
                                
                                <div class="s-tab-content" id="tab-order">
                                    <?php $order = get_post_meta(get_the_ID(), 'wpcf-order-service', 1); echo ($order); ?>
                                </div>
                            </div>	
                        
                        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>					
                    </article>

                <?php endwhile; ?>

            </div>

            <div id="sidebar" class="col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
            </div>	        
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
