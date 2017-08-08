<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @yield('title')
            - I Run Errands
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @section('css')
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/IREstyle.css">
        @show


        <script>
            WebFontConfig = {
                google: {families: ['Merriweather Sans:300,400,700,800', 'Indie Flower']
                }
            };
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/webfont/1.5.18/webfontloader.js"></script>
    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="IRE-wrapper">
            <div class="IRE-header container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                                <span class="IRE-logo">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                <ul class="IRE-header-sm-list">
                                    <li><a class="sm-facebook" href="https://www.facebook.com/irunerrandsuk" target="_blank"></a></li>
                                    <li><a class="sm-twitter" href="https://twitter.com/IRunErrandsuk" target="_blank"></a></li>
                                    <li><a class="sm-pinterest" href="https://www.pinterest.com/irunerrandsuk" target="_blank"></a></li>
                                    <li><a class="sm-email" href="mailto:info@irunerrands.co.uk"></a></li>
                                </ul>
                                <div class="IRE-header-contact">
                                    <div class="IRE-header-phone">
                                        00000 000 000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="IRE-navigation container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <ul class="IRE-nav-list">
                                <li class="IRE-menu-expand visible-xs">
                                    <div class="IRE-mob-menu">
                                        <div class="IRE-menu-stick"></div>
                                        <div class="IRE-menu-stick"></div>
                                        <div class="IRE-menu-stick"></div>
                                    </div>
                                </li>
                                @include('irunerrands.menus')
                            </ul>
                            <a class="IRE-blog-link" href="http://blog.irunerrands.co.uk">Blog</a>
                            <a class="IRE-give_away-link" href="http://blog.irunerrands.co.uk/tag/campaign">Giveaway</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="IRE-main-content container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            @yield('content')                            
                        </div>
                    </div>
                </div>
            </div>
            <footer class="container-fluid">
                <div class="row">
                    <div class="container">
                        <ul class="IRE-footer-links">
                            @include('irunerrands.menus')
                            <li><a href="http://blog.irunerrands.co.uk/tag/campaign">Giveaway</a></li>
                            <li><a href="http://blog.irunerrands.co.uk">Blog</a></li>
                        </ul>
                        <hr>
                        <p class="text-left">© 2015 I Run Errands</p>
                    </div>
                </div>
            </footer>
        </div>
        @section('javascript')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//malsup.github.com/jquery.cycle2.js"></script>
        <script src="/js/IREscript.js"></script>
        <script src="/js/ire.js"></script>
        @show
        <script>
            IRE.init();
        </script>
    </body>
</html>
