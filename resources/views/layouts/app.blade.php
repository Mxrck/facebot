<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost:8000/#features -->
<html class="no-js csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform  vc_transform " lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="{{asset('favicon.png')}}">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<!-- Startuply favicon -->
<link rel="shortcut icon" href="http://localhost:8000/wp-content/themes/startuply/images/favicon.ico">
<title>{{ Cache::get('site_name', 'Facebot') }} | @yield('title', 'Facebook Messenger Bot')</title>

<style type="text/css">
    img.wp-smiley,
    img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
    }
</style>
<link rel="stylesheet" id="js_composer_front-css" href="{{ asset('landing/js_composer.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="{{ asset('landing/font-lineicons.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('landing/bootstrap.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="startuply_custom-css" href="{{ asset('landing/style.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="startuply_option-css" href="{{ asset('landing/theme-options.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="startuply_lato-css" href="{{ asset('landing/css.css') }}" type="text/css" media="all">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" id="vsc-animation-style-css" href="{{ asset('landing/vivaco-animations.css') }}" type="text/css" media="all">
<script type="text/javascript" src="{{ asset('landing/jquery.js') }}"></script>

<style>
.fa, b{color: rgba(46, 201, 253, 0.71);}
.edd_download{float:left;}
.edd_download_columns_1 .edd_download{width: 100%;}
.edd_download_columns_2 .edd_download{width:50%;}
.edd_download_columns_0 .edd_download,.edd_download_columns_3 .edd_download{width:33%;}
.edd_download_columns_4 .edd_download{width:25%;}
.edd_download_columns_5 .edd_download{width:20%;}
.edd_download_columns_6 .edd_download{width:16.6%;}
</style>

<style type="text/css">
.vc_custom_1429535941154{padding-top: 150px !important;}
.vc_custom_1424792112101{padding-top: 35px !important;padding-bottom: 35px !important;}
.vc_custom_1424378068484{padding-top: 50px !important;}
.vc_custom_1423845105581{padding-top: 15px !important;}
.vc_custom_1427199365504{padding-top: 10px !important;padding-bottom: 25px !important;}
.vc_custom_1423845168912{padding-top: 110px !important;padding-bottom: 35px !important;}
.vc_custom_1424792145739{padding-top: 50px !important;padding-bottom: 30px !important;}
.vc_custom_1435785411858{padding-top: 100px !important;}
.vc_custom_1435785521444{padding-top: 70px !important;}
.vc_custom_1423845269495{padding-top: 75px !important;padding-bottom: 100px !important;}
.vc_custom_1427892651576{padding-top: 50px !important;}
.vc_custom_1423845293496{padding-top: 50px !important;}
.vc_custom_1423845310879{padding-top: 50px !important;padding-bottom: 100px !important;}
.vc_custom_1424792162256{padding-top: 5px !important;padding-bottom: 10px !important;}
.vc_custom_1435835840608{padding-right: 35px !important;padding-left: 35px !important;}
.vc_custom_1429533656107{padding-top: 20px !important;}
.vc_custom_1429533701919{padding-top: 10px !important;}
.vc_custom_1428413570438{padding-top: 50px !important;}
.vc_custom_1428413822933{padding-top: 85px !important;}
.vc_custom_1428413838927{padding-top: 85px !important;}
.vc_custom_1429534238931{padding-right: 100px !important;padding-left: 100px !important;}
</style>

</head>
<body id="landing-page" class="home page page-id-3153 page-template page-template-page-fullwidth page-template-page-fullwidth-php wpb-js-composer js-comp-ver-4.11.1 vc_responsive">
<div id="mask" style="display: none;">
    <div class="preloader">
        <div class="spin base_clr_brd">
            <div class="clip left">
                <div class="circle"></div>
            </div>
            <div class="gap">
                <div class="circle"></div>
            </div>
            <div class="clip right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<header>
    <nav class="navigation navigation-header  transparent" role="navigation">
        <div class="container">
            <div class="navigation-brand">
                <div class="brand-logo">
                    <a href="{{ route('welcome') }}" class="logo">
                        <img src="./landing/logo-white-2-1.png" width="117" height="28" alt="logo">
                    </a>
                </div>
                <button class="navigation-toggle visible-xs" type="button" data-target=".navbar-collapse">
                <span class="icon-bar base_clr_bg"></span>
                <span class="icon-bar base_clr_bg"></span>
                <span class="icon-bar base_clr_bg"></span>
                </button>
            </div>
            <div class="navbar-collapse collapsed">
                <div class="menu-wrapper">
                    <!-- Left menu -->
                    <div class="menu-demo-menu-container">
                        <ul id="menu-demo-menu" class="navigation-bar navigation-bar-left">
                            <li class="menu-item"><a title="HOME" href="{{ route('welcome') . '/#' }}">HOME</a></li>
                            <li class="menu-item"><a title="FEATURES" href="{{ route('welcome') . '/#features' }}">FEATURES</a></li>
                            <li class="menu-item"><a title="SUBSCRIBE" href="{{ route('welcome') . '/#subscribe' }}">SUBSCRIBE</a></li>
                            <li class="menu-item"><a title="DEMO" target="_blank" href="{{ url('login') }}">DEMO</a></li>
                            <li class="menu-item"><a title="PURCHASE" href="#">PURCHASE</a></li>
                        </ul>
                    </div>
                    <!-- Right menu -->
                    <div class="right-menu-wrap">
                        <div class="menu-loginregister-container">
                            <ul id="menu-loginregister" class="navigation-bar navigation-bar-right">
                                <li class="menu-item"><a title="LOGIN" target="_blank" href="{{ url('login') }}">DEMO</a></li>
                                <li class="featured menu-item"><a title="PURCHASE" href="#">PURCHASE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<header class="entry-header">
</header>
@yield('content')
<div id="sub-footer" class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">&nbsp;</div>
            <div class="col-sm-4">
                <aside id="text-2" class="widget widget_text">
                    <div class="widgetBody clearfix">
                        <div class="textwidget">© 2017 Facebot All right reserved</div>
                    </div>
                </aside>
            </div>
            <div class="col-sm-4">&nbsp;</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('landing/custom-isotope-portfolio.js') }}"></script>
<script type="text/javascript" src="{{ asset('landing/custom.js') }}"></script>


</body></html>