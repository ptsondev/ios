<!DOCTYPE html>
<html ⚡>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>	
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
	<script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script> 
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>    
	<script async src="https://cdn.ampproject.org/v0.js"></script>
    <?php wp_head(); ?>

    
    <style amp-custom>
        
        @font-face {
            font-family: 'filebold';
            src: url('file-webfont.woff2') format('woff2'),
                 url('file-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condensedregular';
            src: url('robotocondensed-regular-webfont.woff2') format('woff2'),
                 url('robotocondensed-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condensedlight_italic';
            src: url('robotocondensed-lightitalic-webfont.woff2') format('woff2'),
                 url('robotocondensed-lightitalic-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condensedbold_italic';
            src: url('robotocondensed-bolditalic-webfont.woff2') format('woff2'),
                 url('robotocondensed-bolditalic-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condenseditalic';
            src: url('robotocondensed-italic-webfont.woff2') format('woff2'),
                 url('robotocondensed-italic-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condensedlight';
            src: url('robotocondensed-light-webfont.woff2') format('woff2'),
                 url('robotocondensed-light-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'roboto_condensedbold';
            src: url('robotocondensed-bold-webfont.woff2') format('woff2'),
                 url('robotocondensed-bold-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }
        
        /* bootstrap mini */
*, *:before, *:after {
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box; 
  box-sizing: border-box;
}

        .pull-left{
            float: left;
        }
        .pull-right{
            float: right;
        }
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
        ul.list-style-none{
    list-style: none;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}

       
        
#note-before-order{
    padding: 10px;
    font-weight: 100;
    border: dotted 1px #0094be;
    -webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
#note-before-order h3{
    color: #0094be;
}
        
         #sidebar1{
            background: #4d4d4f;
            
        }
        .inner {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .col {
            display: inline-block;
            float: left;
        }
        
        .col.col-right {
            float: right;
        }
        
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 16px;
            color: #2f2f2f;
            /*background:#f4f5f5;*/
        }
        
        a,
        a:hover,
        a:visited {
            text-decoration: none;
        }
        
        a:hover,
        a:focus {
            color: #333;
        }
        
        img {
            width: 100%;
        }
        
        #site-header {
            background: url('/wp-content/themes/inoffset_mb/images/header-contact2.png') repeat-x #FFF;
        }
        #header-contact {
                position: fixed;
                z-index: 1;
                background: #0094be;
                width: 100%;
                top: 0;
                padding-bottom:10px;
        }
        #header-contact a {
            color: #FFF;
            font-size: 15px;
            padding-top: 5px;
        }
        
        #site-header.active {
            position: fixed;
            z-index: 9;
            width: 100%;
        }
        
        #site-header.active #header-row-2 {
            background: #FFF;
            padding-top: 10px;
        }
        
        #site-header.active #site-name {
            width: auto;
            height: 60px;
        }
        
        #site-header.active #main-menu {
            top: 6px;
        }
        
        #site-header.active #main-menu li {
            padding-bottom: 25px;
        }
        
        #search-area {
            width: 320px;
            display: inline-block;
            position: relative;
        }
        
        #search-area #btnSearch {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: url(/wp-content/themes/inoffset_mb/images/btnSearch.png) no-repeat;
            background-size: 100% 100%;
            border: none;
            position: absolute;
            right: 5px;
            top: 7px;
        }
        
        #search-area #txtSearchService {
            width: 100%;
            padding: 5px;
        }
        
        #sub-menu-print {
            display: inline-block;
            width: 100%;
            border: 1px solid #ccc;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        #sub-menu-print .item {
            display: inline-block;
            width: 100%;
            border-bottom: 1px dashed #ccc;
            padding: 5px;
        }
        
        #sub-menu-print .col-sm-4 .item:last-child {
            border: none;
        }
        
        #sub-menu-print .item .ava {
            display: inline-block;
            float: left;
            width: 150px;
        }
        
        #sub-menu-print .name {
            display: inline-block;
            float: left;
            width: 150px;
            padding-top: 30px;
        }
        
        #sub-menu-print .item img {
            height: 90px;
            width: auto;
            margin: auto;
            padding: 5px;
        }
        
        #sub-menu-print .item:hover img {
            -webkit-animation: imgZoom 0.2s forwards;
            animation: imgZoom 0.2s forwards;
        }
        
        @keyframes imgZoom {
            from {
                padding: 5px;
            }
            to {
                padding: 0;
            }
        }
        
        #sub-menu-print .item:hover .name {
            -webkit-animation: moveTopPad 0.2s forwards;
            animation: moveTopPad 0.2s forwards;
        }
        
        @keyframes moveTopPad {
            from {
                padding-top: 30px;
            }
            to {
                padding-top: 15px;
            }
        }
        
        #header-contact {
            text-align: right;
            color: #FFF;
            padding-top: 10px;
            font-size: 18px;
            font-weight: bold;            
        }
        
        #header-row-2 {
            padding-top: 50px;
        }
        
        #site-name {
            color: #01aef0;
            text-transform: uppercase;
            font-size: 35px;
            height: 100px;
            font-weight: bold;
            margin: 0;
            padding-top: 20px;
        }
        
        #site-menu {}
        
        #main-menu {
            padding-top: 40px;
        }
        
        #main-menu li {
            list-style: none;
            margin-left: 30px;
            display: inline-block;
            float: left;
            padding-bottom: 35px;
        }
        
        #main-menu li.active,
        #main-menu li.current-menu-item,
        #main-menu li:hover {
            border-bottom: 3px solid #fbb15b;
        }
        
        #header-row-3 {
            width: 220px;
            display: block;
            margin: 70px auto;
            color: #FFF;
            text-align: center;
        }
        
        #header-row-3 .row-1 {
            background: url('/wp-content/themes/inoffset_mb/images/printer.png') no-repeat center center #0094be;
            height: 80px;
            -webkit-border-top-left-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            -moz-border-radius-topleft: 10px;
            -moz-border-radius-topright: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        #header-row-3 .row-2 {
            background: #f26664;
            font-size: 24px;
            padding: 20px;
        }
        
        #header-row-3 .row-3 {
            background: url('/wp-content/themes/inoffset_mb/images/row3.png') no-repeat;
            background-size: 100%;
            height: 110px;
            padding: 20px;
        }
        
        #list-services li a:hover {
            -webkit-animation: changeColor1 0.5s forwards;
            animation: changeColor1 0.5s forwards;
        }
        
        @keyframes changeColor1 {
            from {
                background: #f26664;
            }
            to {
                background: #0094be;
            }
        }
        
        #main-content {
            text-align: left;
            line-height: 21px;
            padding: 0;
        }
        
        #home-intro {
            background: #4d4d4f;
            color: #FFF;
            text-align: center;
            padding: 20px;
            font-size: 20px;
        }
        
        a,
        a:hover,
        a:visited {
            color: #0094be;
        }
        
        #main-menu li:hover a {
            color: #fbb15b;
        }
        
        #main-menu a {
            font-size: 20px;
            text-transform: uppercase;
            float: right;
        }
        
        #home-main .feature {
            min-height: 400px;
            color: #FFF;
        }
        
        #home-main #feature-1 {
            background: #0094be;
        }
        
        #home-main #feature-2 {
            background: #f26664;
            text-align: right;
        }
        
        #home-main #feature-3 {
            background: #fbb15b;
        }
        
        #home-main .pic {
            background-size: contain;
            height: 300px;
        }
        
        #home-main #feature-1 .pic {
            background: url('/wp-content/themes/inoffset_mb/images/slide1.png') no-repeat center 0;
            background-size: 80%;
        }
        
        #home-main #feature-2 .pic {
            background: url('/wp-content/themes/inoffset_mb/images/slide2.png') no-repeat center 0;
            background-size: 80%;
        }
        
        #home-main #feature-3 .pic {
            background: url('/wp-content/themes/inoffset_mb/images/slide3.png') no-repeat center 0;
            background-size: 80%;
        }
        
        #home-main .feature h2 {
            font-size: 30px;
            margin: 10px auto;
        }
        
        #home-main .feature h3 {
            color: #191c20;
            font-style: italic;
            margin: 15px 0;
        }
        
        #home-main .feature h4 {
            font-size: 16px;
            line-height: 26px;
        }
        
        #printing-services {
            background: #f4f5f5;
            display: inline-block;
            width: 100%;
            padding: 30px 0;
        }
        
        #printing-services .item {
            overflow: hidden;
        }
        
        #printing-services .item .item-wrapper {
            padding: 0 14px;
            background: #FFF;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        #printing-services .item .num {
            padding: 10px 15px;
            background: #FFF;
            margin-left: 20px;
            font-size: 24px;
            display: inline-block;
            float: left;
            font-weight: bold;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }
        
        #printing-services .item .title {
            font-size: 30px;
            margin-left: 15px;
            color: #FFF;
            display: inline-block;
            float: left;
            margin-top: 10px;
        }
        
        #printing-services .item .row-1 {
            background: #0094be;
            padding: 10px 0;
        }
        
        #printing-services .item .more {
            margin: 10px 0;
        }
        
        #printing-services .item .more .icon {
            background: url('/wp-content/themes/inoffset_mb/images/home-service-more.png') center center no-repeat #0094be;
            background-size: 100% 100%;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            width: 25px;
            height: 25px;
            display: inline-block;
            float: left;
            margin-bottom: 20px;
        }
        
        #printing-services .item .btn {
            display: inline-block;
            float: left;
            margin-left: 10px;
            font-size: 20px;
        }
        
        #printing-services .item-2 .row-1,
        #printing-services .item-2 .more .icon {
            background-color: #f26664;
        }
        
        #printing-services .item-3 .row-1,
        #printing-services .item-3 .more .icon {
            background-color: #fbb15b;
        }
        
        #footer {
            background: url('/wp-content/themes/inoffset_mb/images/footer.png') no-repeat;
            background-size: cover;
            padding: 50px 0;
            text-align: center;
            color: #FFF;
        }
        
        #address {
            background: #31353d;
            color: #646b79;
            text-align: center;
            padding: 10px;
        }
        
        #address a,
        #footer a {
            color: #01aef0;
        }
        
        .entry-content img {
            width: auto;
            max-width: 100%;
            display: block;
            margin: auto;
        }
        
        #list-services li {
            list-style: none;
            margin: 10px 0;
        }
        /*
#list-services li.row-1{
	background:#01aef0;
}
#list-services li.row-2{
	background:#f26664;
}
#list-services li.row-3{
	background:#ebe004;
}
*/
        
        .wpcf7-form input,
        .wpcf7-form select{
            border: 1px solid #ccc;
            width: 200px;
            float: right;
        }
        .wpcf7-form textarea{
            width: 100%;
            border: 1px solid #ccc;
        }
        .wpcf7-form label{
            width: 100px;
            display: inline-block;
        }
        .wpcf7-form input[type=submit]{
            width: 100%;
            background: #0094be;
            text-transform: uppercase;
            color: #FFF;
            padding: 10px;
        }
        #list-services li a {
            color: #FFF;
            font-size: 20px;
            padding: 10px;
            background: #f26664;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            display: inline-block;
            width: 100%;
        }
        
        #breadcrumb {
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;                        
            background: #4d4d4f;
            color: #FFF;
        }
        #breadcrumb ol{
            margin: 5px 0;
            padding:0 15px;
            font-size: 13px;
            font-style: italic;
        }
        #breadcrumb li {
            list-style: none;
            display: inline-block;
            float: left;
        }
        
        #breadcrumb a {
            color: #FFF;
        }
        
        #detail-main {
            margin: 30px 0;
        }
        
        h1 {
            color: #f26664;
            text-transform: uppercase;
            line-height: 30px;
        }
        
        #sidebar #header-row-3 {
            width: 100%;
        }
        
        .ajax-loader {
            width: auto;
        }
        
        .entry-content h3 {
            color: #f26664;
        }
        /* tabs */
        
        #tabs {
            border: none;
        }
        
        #tabs ul {
            padding: 0;
            margin: 0;
            background: none;
            border: none;
        }
        
        #tabs li {
            list-style: none;
            padding: 0;
            margin: 5px 0;
            width: 100%;
            background: none;
            border: none;
        }
        
        #tabs li a {
            color: #FFF;
            font-size: 20px;
            padding: 10px;
            background: #f26664;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            display: inline-block;
            width: 100%;
        }
        
        #tabs li.ui-tabs-active a {
            background: url('/wp-content/themes/inoffset_mb/images/printer.png') no-repeat 90% center #01aef0;
            background-size: 30px;
        }
        /* END tabs */
        
        #post-138 h2 {
            color: #01aef0;
        }
        
        td {
            border: 2px solid #333;
            padding: 5px;
            text-align: center;
        }
        
        table tr:first-child {
            background: #f26664;
            color: #FFF;
        }
        
        img {
            width: 80%;
            margin: 0;
        }
        #sidebar1{
            background: #4d4d4f;
            color:#FFF;
        }
        #sidebar1 a{
            color:#FFF;
        }
        .single-post #main-content img {
            width: 600px;
            margin: 10px auto;
        }
        
        #post-more-info {
            color: #ccc;
            font-style: italic;
            font-size: 11px;            
        }
        
        .foogallery-container img {
            width: 150px  ;
            display: inline-block;
            float: left;
        }
        
        @media (max-width: 768px) {
            #site-name {
                height: 70px;
                font-size: 28px;
            }
            #header-contact {
                text-align: left;
            }
            #main-menu li {
                width: 100%;
                padding: 8px;
                margin: 0;
            }
            #main-menu {
                margin: 0;
                padding: 0;
                background: #eee;
                position: absolute;
                display: none;
                top: -110px;
                width: 100%;
                text-align: center;
            }
            #main-menu li.active,
            #main-menu li.current-menu-item,
            #main-menu li:hover {
                border: none;
            }
            #btnShowMenu {
                position: absolute;
                top: -150px;
                right: 0;
                z-index: 9;
                cursor: pointer;
                background: url('/wp-content/themes/inoffset_mb/images/menu.png') center center no-repeat;
                background-size: 100%;
                width: 36px;
                height: 36px;
            }
            #home-main .feature .pic {
                background-position: center  ;
            }
            #home-main #feature-2 {
                text-align: left;
            }
            #printing-services .item {
                margin-bottom: 35px;
            }
            #footer {
                padding: 30px 0;
            }
            #sub-menu-print .item .ava {
                float: right;
            }
            #sub-menu-print .name {
                width: 100px;
            }
        }
        .hamburger {
            font-size: 20px;
            float: right;
            color: #fff;
            padding-top: 0;
        }      
.sidebar {
  padding: 10px;
  margin: 0;
}
.sidebar > li {
  list-style: none;
  margin-bottom:10px;
}
.sidebar a {
  text-decoration: none;
}
.close-sidebar {
  font-size: 1.5em;
  padding-left: 5px;
}
        
        
h1#service-title{
    margin: 3px 0;
}        
#service-header{
    position: sticky;
    top: 46px;
    background: #FFF;
    z-index: 999;    
}
#service-tabs{
    border-bottom: 1px solid #ccc;
    padding:0;
}
#service-tabs a{
    padding: 2px;
    background: #f9f9f9;
    width: 50%;
    display: inline-block;
    float: left;
    text-align: center;
}
#service-tabs a.active{
    background: #ccc;
}
.s-tab-content{
    padding-top: 120px;
}
    </style>
</head>

<body <?php body_class(); ?>>

    <amp-analytics type="googleanalytics">
        <script type="application/json">
        {
          "vars": {
            "account": "UA-49884691-6"
          },
          "triggers": {
            "trackPageview": {
              "on": "visible",
              "request": "pageview"
            }
          }
        }
        </script>
    </amp-analytics>
    
    <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
              <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
              <ul class="sidebar">
                  <li><a href="/in-catalogue-chat-luong-cao/">In Catalogue - Brochure</a></li>
                  <li><a href="/in-profile-cong-ty/">In Profile Công Ty</a></li>
                  <li><a href="/in-folder-kep-file-bia-ho-so/">In Folder - Bìa hồ sơ</a></li>
                  <li><a href="/in-nhanh-namecard-danh-thiep-lay-trong-ngay/">In Namecard - danh thiếp</a></li>
                  <li><a href="/in-to-roi-to-gap-flyer-leaflet/">In Tờ Rơi - Tờ Gấp</a></li>
                  <li><a href="/in-tui-giay-hop-giay/">In Túi Giấy - Hộp Giấy</a></li>
                  <li><a href="/in-menu-nha-hang-quan-an/">In Menu</a></li>
                  <li><a href="/in-thiep-moi-su-kien/">In Thiệp Mời</a></li>
                  <li><a href="/lien-he">Liên Hệ</a></li>
              </ul>
            </amp-sidebar>
    
    <div id="site-header">
        <div id="header-contact" class="">
            <div class="container">
                <div class="pull-left">
                    <header class="headerbar">
                      <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger">☰</div>              
                    </header>
                </div>
                <a class="pull-right" href="tel:0911667771">0911.66.77.71</a>
            </div>
                        
        </div>

        <div id="header-row-2" class="">
            <div class="container">                
                    <div id="site-logo"><a href="/"><amp-img src="<?php echo PATH_TO_IMG?>/logo.png" height="80" width="220"></amp-img></a></div>                
            </div>
        </div>
    </div>