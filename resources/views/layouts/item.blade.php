<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="corporate html template - agency theme - business html template - creative theme - portfolio html template - gallery theme - restaurant theme - ecommerce template - app template - landing page - real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency, corporate, business, app and creative portfolio, it is suitable for any kind of websites, like ecommerce, restaurant, photography, gallery and retail website.">
    <meta name="author" content="EncodesLife">
    <link rel="icon" href="img/favicon.png">

    <title>Shop Product Page | Ecada - Responsive Multipurpose Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Theme skins -->
    <link id="skin" href="{{asset('css/theme-colors/orange.css')}}" rel="stylesheet">
    <link href="{{asset('js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
    <link href="{{asset('css/line-icons/line-icons.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href="{{asset('css/ie.css')}}" rel="stylesheet">
    <![endif]-->
</head>

<body>
@include('includes/navigation')



<!-- START - Contain Wrapp -->
<div class="contain-wrapp">
    <div class="container">
        @yield('item')
    </div>
</div>
<!-- END - Contain Wrapp -->

<!-- Start gray Contain Wrapp -->
<div class="contain-wrapp gray-container padding-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 margin-bottom-20">
                <h5>New products</h5>
                <ul class="product-list">
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Purple</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Black</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Red</a></h6>
                        <div class="price"><span>$99</span></div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-20">
                <h5>On sale</h5>
                <ul class="product-list">
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Black</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Brown</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Green</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-20">
                <h5>Popular products</h5>
                <ul class="product-list">
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Blue</a></h6>
                        <div class="price"><span>$99</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Orange</a></h6>
                        <div class="price"><span>$99</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Pink</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-20">
                <h5>Top rated</h5>
                <ul class="product-list">
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Violet</a></h6>
                        <div class="price"><span>$99</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Purple</a></h6>
                        <div class="price"><span>$99</span></div>
                    </li>
                    <li>
                        <a href="#"><img src="img/shop/thumbs/img.png" class="alignleft" alt="" /></a>
                        <h6><a href="shop_product.html">Product Black</a></h6>
                        <div class="price"><del>$100</del> <span>$60</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End gray Contain Wrapp -->

<div class="clearfix"></div>

@include('includes/footer')

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>

<!-- Parallax -->
<script src="{{asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/parallax/setting.js')}}"></script>

<!-- Flexslider -->
<script src="{{asset('js/flexslider/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/flexslider/js/setting.js')}}"></script>

<!-- Rate item -->
<script src="{{asset('js/raty/jquery.raty.min.js')}}"></script>
<script src="{{asset('js/raty/setting.js')}}"></script>

<!-- PrettyPhoto -->
<script src="{{asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/prettyPhoto/js/setting.js')}}"></script>

<!-- Add item -->
<script src="{{asset('js/jqueryadd-count.js')}}"></script>

<!-- Custom javaScript for this theme -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Nicescroll -->
<script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/nicescroll/settings.js')}}"></script>

<!-- Theme option-->
<script src="{{asset('js/style-switcher/js/style-switcher.js')}}"></script>
</body>
</html>