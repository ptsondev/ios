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
                                    <a id="btnSorder" class="tab-title" href="#tab-order"><?php echo $tab4; ?></a>
                            </div>

                                
                        </div>
                        
                            <div  class="entry-content" itemprop="text">
                                <div class="s-tab-content" id="tab-intro">
                                    <?php the_content(); ?>
                                    
                                    <h3>Liên Hệ Tư Vấn &amp; Báo Giá</h3>
                                    <b>Liên hệ đặt in qua hotline <a href="tel:0911667771">0911 66 77 71</a> hoặc <a href="#tab-order" id="btnClickTabOrder">tab đặt in</a> bên trên</b>
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
                                    <?php $order = get_post_meta(get_the_ID(), 'wpcf-order-service', 1); echo do_shortcode($order); ?>
                                    
                                    <div id="note-before-order">
                                        <h3>1 số lưu ý trước khi đặt in</h3> 
                                        <i class="fas fa-check"></i> Gửi đầy đủ thông tin quy cách và file.
                                        (upload files lên google drive hoặc cloud nào đó rồi gửi link để quá trình download được nhanh hơn.<br/> 
                                        <i class="fas fa-check"></i> 1 ví dụ chi tiết: <i>"Tôi cần in 500 cuốn catalogue, mỗi cuốn 32 trang (cả bìa), kích thước thành phẩm 30x21cm, bìa dày ruột mỏng, đóng cuốn bấm kim giữa. File download tại:...."</i><br/>
                                        <i class="fas fa-check"></i> Trong trường hợp cần lấy gấp, hoặc có bất cứ yêu cầu in đặc biệt nào, vui lòng ghi rõ hoặc liên hệ hotline trên để được tư vấn cụ thể. <br/> 
                                        <b>Hân hạnh được phục vụ quý khách hàng!</b>
                                    </div>
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
