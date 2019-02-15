<?php
DEFINE('PATH_TO_IMG', get_template_directory_uri().'/images');
require_once(get_template_directory().'/aio_image_resize.php');

function connect_db(){
    require_once 'EasyMySQLi.inc.php'; 
    $db = new EasyMySQLi('localhost', 'root', '', 'wp_inoffsethcm'); 
    $db->set_charset("utf8");
    return $db;
}

$db = connect_db();
//var_dump($db);

function detect_click_tac($ip){
    $db = connect_db();    
    $yesterday          = strtotime('-7 day', time());
    $result = $db->queryAllRows('SELECT url FROM k_visit WHERE IP=? AND time > ? AND google_ad=1', $ip, $yesterday);     
    $tmp = array();
    foreach($result as $item){
        $tmp[]=$item['url'];
    }    
    $result = array_count_values($tmp);
    if(count($result)>3){
        $db->queryNoResult('UPDATE k_visit SET click_tac=1 WHERE IP=?', $ip);
    }   
}


function sher_test(){
		global $wp_filter; 
		//print_r($wp_filter['wp_head']);
		
		remove_action('wp_head', 'rest_output_link_wp_head');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'locale_stylesheet');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'wp_shortlink_wp_head');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		
		remove_action('rest_api_init', 'wp_oembed_register_route');	
		remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wp_oembed_add_host_js');		
}
function wpa54064_inspect_scripts() {
    global $wp_scripts;
    foreach( $wp_scripts->queue as $handle ) :
        //echo $handle . ' | ';
		wp_deregister_script($handle);
    endforeach;
	//die("sssss");
}
function wpa54064_inspect_styles() {
    global $wp_styles;
    foreach( $wp_styles->queue as $handle ) :
    //    echo $handle . ' | ';
		wp_deregister_style($handle);
    endforeach;
	//die("sssss");
}
function remove_all_scripts() {
   foreach( wp_scripts()->registered as $script ) {
      wp_dequeue_script( $script );
      wp_deregister_script( $script );
  }
} 

if(!is_user_logged_in()){
    add_action('init', 'sher_test');
    //add_action('wp_footer', 'remove_all_scripts', PHP_INT_MAX);
    add_action( 'wp_print_styles', 'wpa54064_inspect_styles' );
    add_action( 'wp_print_scripts', 'wpa54064_inspect_scripts' );
    add_action( 'wp_print_scripts', 'remove_all_scripts' );
    
}



//* Remove kk Star Ratings from Homepage and Archives
add_action('wp_head','my_conditional_script',0); 
function my_conditional_script() {
        global $kkStarRatings_obj;
        remove_action('wp_enqueue_scripts', array($kkStarRatings_obj, 'js'));
        remove_action('wp_enqueue_scripts', array($kkStarRatings_obj, 'css'));
        remove_action('wp_head', array($kkStarRatings_obj, 'css_custom')); 
    remove_filter('head','rsssl_javascript_redirect');   
}



/* AMP replace <img> to <amp-img> */
function replace_img_to_ampimg($content,$width=NULL, $height=NULL) {
  if($width==NULL){
	$content = preg_replace('#<img([^>]+)>#i', '<amp-img layout="responsive" ${1}></amp-img>', $content);
  }else{
	  $content = preg_replace('#<img([^>]+)>#i', '<amp-img layout="responsive" width="'.$width.'" height="'.$height.'" ${1}></amp-img>', $content);
  }
  
  return $content;
}
add_filter( 'the_content', 'replace_img_to_ampimg' );
