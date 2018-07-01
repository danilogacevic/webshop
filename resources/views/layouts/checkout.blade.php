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

    <title>Shop Checkout Page | Ecada - Responsive Multipurpose Template</title>

    <!-- Bootstrap core CSS -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Theme skins -->
    <link id="skin" href="css/theme-colors/orange.css" rel="stylesheet">
    <link href="js/style-switcher/css/style-switcher.css" rel="stylesheet">
    <link href="css/line-icons/line-icons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href="css/ie.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
@include('includes/navigation')

<!-- START - Inner Head -->
<div class="parallax inner-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <i class="fa fa-shopping-cart"></i>
                <h4>Theme <span>pages</span></h4>
                <ol class="breadcrumb">
                    <li><a href="#">Shop</a></li>
                    <li class="active">Checkout Page</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- END - Inner Head -->

<!-- START - Contain Wrapp -->
<div class="contain-wrapp padding-bottom-40">
    <div class="container">
        <div class="row">
            <!-- Start shopping cart -->
            <div class="col-md-12">
                <div class="tab-icons">
                    <!-- Tab panes -->
                    <table class="styled-table mobile-responsive margin-bottom-20">
                        <thead>
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Product</th>
                            <th class="text-left">Color</th>
                            <th class="text-left">Size</th>
                            <th class="text-left">Qty</th>
                            <th class="text-left">Price</th>
                            <th class="text-left">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-title="No">1</td>
                            <td data-title="Product">
                                <a href="#" class="alignleft"><img src="img/shop/thumbs/img.png" alt="" /></a>
                                <h6 class="item-title"><a href="#">Product Purple</a><br /><span>T-shirt</span></h6>
                            </td>
                            <td data-title="Color">Purple</td>
                            <td data-title="Size">L</td>
                            <td data-title="Qty">
                                <div class="input-group input-group-lg">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn-e btn-e-primary btn-e-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" data-min="1" data-max="10" value="1">
                                    <span class="input-group-btn">
                                                    <button type="button" class="btn-e btn-e-primary btn-e-number" data-type="plus" data-field="quant[1]">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </span>
                                </div>
                            </td>
                            <td data-title="Price">$80</td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fa fa-remove"></i></a></td>
                        </tr>

                        @yield('items')
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End shopping cart -->
        </div>

        <div class="row">
            @yield('total_cart')
        </div>
    </div>
</div>
<!-- END - Contain Wrapp -->

<div class="clearfix"></div>

@include('includes/footer')

<!-- START - Back To Top -->
<a href="#" class="toTop">
    <i class="fa fa-chevron-up"></i>
</a>
<!-- END - Back To Top -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- BOOTSTRAP -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>

<!-- jQuery Easing -->
<script src="js/jquery.easing-1.3.min.js"></script>

<!-- Parallax -->
<script src="js/parallax/jquery.parallax-1.1.3.js"></script>
<script src="js/parallax/setting.js"></script>

<!-- Add item -->
<script src="js/jqueryadd-count.js"></script>

<!-- Custom javaScript for this theme -->
<script src="js/custom.js"></script>

<!-- Nicescroll -->
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<script src="js/nicescroll/settings.js"></script>

<!-- Theme option-->
<script src="js/style-switcher/js/style-switcher.js"></script>
</body>
</html>