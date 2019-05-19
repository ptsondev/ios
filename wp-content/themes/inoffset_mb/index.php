<?php
get_header(); ?>

<div id="home-main">
    
        <div id="printing-services">
			<div class="container">
                <h3>Các Dịch Vụ In</h3>
                <div class="row">
                <?php 
                    $args = array(
                        'numberposts' => 0,
                        'post_type' => 'service',
                        'orderby' => 'post_date',
		                  'order'   => 'ASC',
                    );

                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {            
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            echo '<div class="item col-sm-4">';
                                //$tmp = get_attached_media('image/jpeg', get_the_ID());
                                $images = get_post_meta(get_the_ID(), 'wpcf-images'); 
                                $tmp = aio_image_resize($images[0], 600, 400, TRUE);          
                                echo '<div class="thumb"><img src="'.$tmp.'" alt="'.get_the_title().'" title="'.get_the_title().'"/></div>'; 
                                $des = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); 
                                echo '<div class="s-des">';
                                    echo '<h4><a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a></h4>';
                                    echo '<div class="r-des">'.$des.'</div>';
                                    echo '<a class="showDetail" href="'.get_permalink(get_the_ID()).'">Xem Chi Tiết</a>';
                                echo '</div>';
                                echo '<div class="clearfix"></div>';
                            echo '</div>';
                            
                            //echo '<li><a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a></li>';
                        endwhile;                       
                    }
                ?>
                </div>
				
			</div>
		</div>
       
    
    <div id="home-intro">
        <div class="container">
        Dịch vụ in ấn của InOffsetHCM sẽ giúp bạn có ngay những cuốn brochure, catalogue, profile,…<br />Theo đúng mong đợi, sát thiết kế với giá thành hợp lý nhất.
        </div>
    </div>
    
		<div id="features">
			<div class="feature" id="feature-1">
				<div class="container">
					<div class="col-sm-3 col-xs-12">					
					</div>
					<div class="col-sm-4 col-xs-12">
						<h2>Thiết kế quảng cáo</h2>
						<h3>< Trước khi in ></h3>
						<h4>Thiết kế catalogue, profile công ty, brochure, namecard,... theo yêu cầu.<br />Chỉnh sửa và bình file cần thiết cho việc in ấn</h4>
					</div>
					<div class="col-sm-5 col-xs-12 pic">					
					</div>
				</div>
			</div>
			
			<div class="feature" id="feature-2">
				<div class="container">
					<div class="col-sm-5 col-xs-12 pic">					
					</div>
					<div class="col-sm-4 col-xs-12">
						<h2>In ấn</h2>
						<h3>< Trong quá trình in ></h3>
						<h4>In hàng loạt sử dụng công nghệ in hiện đại nhất, đảm bảo màu sắc tương đương với thiết kế.</h4>
					</div>
					<div class="col-sm-3 col-xs-12">					
					</div>	
				</div>
			</div>
			
			<div class="feature" id="feature-3">
				<div class="container">
					<div class="col-sm-3 col-xs-12">					
					</div>
					<div class="col-sm-4 col-xs-12">
						<h2>Gia công thành phẩm</h2>
						<h3>< Sau khi in ></h3>
						<h4>Cán màng, cấn, bế,... tất cả các công đoạn cuối cùng cần thiết nhằm đưa ra thành phẩm đúng như bạn mong đợi.</h4>
					</div>
					<div class="col-sm-5 col-xs-12 pic">					
					</div>			
				</div>
			</div>
		</div>
		
		
		
	</div>
	

<?php get_footer(); ?>
