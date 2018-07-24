<?php

$ip= $_SERVER['REMOTE_ADDR'];
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $google_ad = 0;
    //gclid
    if(strpos($url, 'gclid')!=FALSE){
        $google_ad = 1;
    }
$db = connect_db();
if($google_ad){
    $db->queryNoResult('INSERT INTO k_visit(IP, url, time, google_ad) VALUES("'.$ip.'", "'.$url.'", "'.time().'", '.$google_ad.')');
    detect_click_tac($ip);
}

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>

       
        <title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>

        <link href="<?php echo get_template_directory_uri()?>/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri()?>/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri()?>/css/fonts/fonts.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet" />

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/js.js"></script>        
        
        <?php wp_head(); ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49884691-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-49884691-6');
</script>


        <!-- Global site tag (gtag.js) - AdWords: 968191709 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-968191709"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-968191709');
</script>

        

    </head>

    <body <?php body_class(); ?>>

        <script>
      window.fbMessengerPlugins = window.fbMessengerPlugins || {
        init: function () {
          FB.init({
            appId            : '1678638095724206',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
          });
        }, callable: []
      };
      window.fbAsyncInit = window.fbAsyncInit || function () {
        window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
        window.fbMessengerPlugins.init();
      };
      setTimeout(function () {
        (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) { return; }
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      }, 0);
      </script>
      
      <div
        class="fb-customerchat"
        page_id="271793053342017"
        ref="">
      </div>
    
        
        <div id="site-header">
            <div id="header-contact" class="">
                <div class="container">
                    <a class="pull-left" href="mailto:info.inoffsethcm@gmail.com">info.inoffsethcm@gmail.com</a>
                    <a class="pull-right" href="tel:0911667771">0911.66.77.71</a>
                </div>
            </div>

            <div id="header-row-2" class="">
                <div class="container">
                    <div class="col-sm-4 col-xs-12">
                        <div id="site-logo"><a href="/"><img src="<?php echo PATH_TO_IMG?>/logo.png" /></a></div>
                    </div>
                    <div class="col-sm-6 col-xs-12 pull-right" id="site-menu">
                        <div id="main-menu">
                            <!--<form id="search-area" action="/search-service">
                                <input id="txtSearchService" type="text" value="" placeholder="Bạn cần in gì?" />
                                <input type="submit" value="" id="btnSearch" />
                            </form>-->
                            <li><a href="#sub-menu-print" id="btnShowSubService">Dịch Vụ In</a></li>
                            <li><a href="/lien-he">Liên Hệ</a></li>
                        </div>

                    </div>
                    <div id="sub-menu-print" style="display:none;">


                        <div class="col-sm-4 col-xs-12">
                            <div class="item">
                                <a href="/in-catalogue-hcm/">
                                    <div class="name">In catalogue</div>
                                    <div class="ava"><img src="<?php echo PATH_TO_IMG?>/in-catalogue.jpg" /></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="/in-nhanh-namecard-danh-thiep-lay-trong-ngay/">
                                    <div class="name">In namecard</div>
                                    <div class="ava"> <img src="/wp-content/uploads/2017/10/in-nhanh-card-tren-giay-kraft.jpg" /></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="item">
                                <a href="/in-folder-kep-file-bia-ho-so/">
                                    <div class="name">In folder - bìa hồ sơ</div>
                                    <div class="ava"><img src="<?php echo PATH_TO_IMG?>/in-folder.png" /></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="/in-to-roi-to-gap-flyer-leaflet/">
                                    <div class="name">In tờ rơi</div>
                                    <div class="ava"><img src="<?php echo PATH_TO_IMG?>/in-to-roi.png" /></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="item">
                                <a href="/in-profile-cong-ty/">
                                    <div class="name">In profile công ty</div>
                                    <div class="ava"><img src="/wp-content/uploads/2016/10/PAGE-2-3-02.jpg" /></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="/in-tui-giay-hop-giay/">
                                    <div class="name">In túi giấy</div>
                                    <div class="ava"><img src="<?php echo PATH_TO_IMG?>/in-tui-giay.jpg" /></div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>           
        </div>