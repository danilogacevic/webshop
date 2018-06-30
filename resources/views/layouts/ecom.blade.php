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

    <title>Shop Home | Ecada - Responsive Multipurpose Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/settings.css')}}">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/navigation.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Theme skins -->
    <link id="skin" href="{{asset('css/theme-colors/orange.css')}}" rel="stylesheet">
    <link href="{{asset('js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
    <link href="{{asset('css/line-icons/line-icons.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href="/css/ie.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
<!-- START - Style Switcher -->
<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
<div class="style-switcher animated fadeInRight">
    <div class="style-switcher-header">
        <div class="style-switcher-heading">Style Switcher</div>
        <div class="style-switcher-close"><i class="icon-close"></i></div>
    </div>
    <div class="style-switcher-body">
        <!-- Theme Colors -->
        <div class="style-switcher-heading">Theme Colors</div>
        <ul class="list-unstyled">
            <li class="theme-orange theme-active" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
            <li class="theme-aqua" data-style="aqua" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-dark-blue last" data-style="dark-blue" data-header="light"></li>
            <li class="theme-purple" data-style="purple" data-header="light"></li>
            <li class="theme-brown" data-style="brown" data-header="light"></li>
            <li class="theme-yellow" data-style="yellow" data-header="light"></li>
            <li class="theme-light-green" data-style="light-green" data-header="light"></li>
            <li class="theme-teal" data-style="teal" data-header="light"></li>
            <li class="theme-green last" data-style="green" data-header="light"></li>
        </ul>
        <div class="style-switcher-heading">Header Color</div>
        <button type="button" class="btn-e btn-e-primary btn-sm margin-bottom-15 margin-right-10 header-light">Light</button>
        <button type="button" class="btn-e btn-e-primary btn-sm margin-bottom-15 header-dark">Dark</button>
    </div>
</div>
<!-- END - Style Switcher -->

<!-- START - Top area -->
<div class="top-container">
    <div class="container">
        <div class="top-column-left">
            <ul class="contact-line">
                <li><i class="fa fa-envelope"></i> support@ecada.com</li>
                <li><i class="fa fa-phone"></i> (0123)-123-456-789</li>
            </ul>
        </div>
        <div class="top-column-right">
            <div class="top-social-network">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <ul class="register">
                <li class="dropdown language" style="display: block;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> Languages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">English <i class="fa fa-check"></i></a></li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Russian</a></li>
                        <li><a href="#">German</a></li>
                    </ul>
                </li>
                <li><a href="page_faq.html">Help</a></li>
                <li><a href="page_login.html">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- END - Top area -->

<div class="clearfix"></div>

<!-- START -  Navbar -->
<nav class="navbar navbar-default navbar-dark megamenu">
    <div class="container">

        <!-- START - Navbar Right -->
        <div class="navlink-right">
            <button type="button" class="btn-navlink show-form"><i class="fa fa-search"></i></button>
            <button type="button" class="btn-navlink close-form"><i class="fa fa-remove"></i></button>
        </div>
        <!-- END - Navbar Right -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand logo" href="index.html">
                <img src="img/themes/logo-orange.png" alt="Logo" />
            </a>
        </div>

        <!-- START - Form Search -->
        <div class="search-wrapper animated">
            <input type="text" class="form-search" placeholder="Type something and hit enter...">
        </div>
        <!-- END - Form Search -->

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Option 1: Default Page</a></li>
                        <li><a href="page_home2.html">Option 2: Agency</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Option 3: Landing pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="page_home3.html">Landing page 1</a></li>
                                <li><a href="page_home4.html">Landing page 2</a></li>
                            </ul>
                        </li>
                        <li><a href="page_home5.html">Option 5: Restaurant</a></li>
                        <li><a href="page_home6.html">Option 6: Photography</a></li>
                        <li><a href="page_home7.html">Option 7: Gallery</a></li>
                        <li><a href="page_home8.html">Option 8: App</a></li>
                        <li><a href="page_home9.html">Option 9: Real estate</a></li>
                        <li><a href="page_home10.html">Option 10: Medical</a></li>
                        <li><a href="page_home11.html">Option 11: Construction</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="page_about.html">About Us 1</a></li>
                                <li><a href="page_about2.html">About Us 2</a></li>
                                <li><a href="page_about3.html">About Us 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="page_services.html">Our Services 1</a></li>
                                <li><a href="page_services2.html">Our Services 2</a></li>
                                <li><a href="page_services3.html">Our Services 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login & Register</a>
                            <ul class="dropdown-menu">
                                <li><a href="page_login.html">Login 1</a></li>
                                <li><a href="page_login2.html">Login 2</a></li>
                                <li><a href="page_login3.html">Login 3</a></li>
                                <li><a href="page_register.html">Register 1</a></li>
                                <li><a href="page_register2.html">Register 2</a></li>
                                <li><a href="page_register3.html">Register 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_faq.html">Faq Page</a>
                        </li>
                        <li>
                            <a href="page_404.html">404 Page</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Level 1</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sub Level 2</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Level 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sub Level 3</a></li>
                                        <li><a href="#">Sub Level 3</a></li>
                                        <li><a href="#">Sub Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub Level 2</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Level 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sub Level 3</a></li>
                                        <li><a href="#">Sub Level 3</a></li>
                                        <li><a href="#">Sub Level 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Left</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_left_sidebar.html">Blog Left 1</a></li>
                                <li><a href="blog_left_sidebar2.html">Blog Left 2</a></li>
                                <li><a href="blog_left_sidebar3.html">Blog Left 3</a></li>
                                <li><a href="blog_left_sidebar4.html">Blog Left 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Right</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_right_sidebar.html">Blog Right 1</a></li>
                                <li><a href="blog_right_sidebar2.html">Blog Right 2</a></li>
                                <li><a href="blog_right_sidebar3.html">Blog Right 3</a></li>
                                <li><a href="blog_right_sidebar4.html">Blog Right 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Full Width</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_no_sidebar.html">Blog Full Width 1</a></li>
                                <li><a href="blog_no_sidebar2.html">Blog Full Width 2</a></li>
                                <li><a href="blog_no_sidebar3.html">Blog Full Width 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Item Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_item_full_width.html">Full Width Page</a></li>
                                <li><a href="blog_item_left_sidebar.html">Left Sidebar Page</a></li>
                                <li><a href="blog_item_right_sidebar.html">Right Sidebar Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">No Space Boxed</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_2_columns_grid_no_space.html">2 Columns</a></li>
                                <li><a href="portfolio_3_columns_grid_no_space.html">3 Columns</a></li>
                                <li><a href="portfolio_4_columns_grid_no_space.html">4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grid Boxed</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_2_columns_grid.html">2 Columns</a></li>
                                <li><a href="portfolio_3_columns_grid.html">3 Columns</a></li>
                                <li><a href="portfolio_4_columns_grid.html">4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grid Text Boxed</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_2_columns_grid_text.html">2 Columns</a></li>
                                <li><a href="portfolio_3_columns_grid_text.html">3 Columns</a></li>
                                <li><a href="portfolio_4_columns_grid_text.html">4 Columns</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="portfolio_left.html">Portfolio Left</a>
                        </li>
                        <li>
                            <a href="portfolio_right.html">Portfolio Right</a>
                        </li>
                        <li>
                            <a href="portfolio_single_item.html">Portfolio Single Item</a>
                        </li>
                    </ul>
                </li>
                <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="shop_home.html">Home Page</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop_left_sidebar.html">Left Sidebar 1</a></li>
                                <li><a href="shop_left_sidebar2.html">Left Sidebar 2</a></li>
                                <li><a href="shop_right_sidebar.html">Right Sidebar 1</a></li>
                                <li><a href="shop_right_sidebar2.html">Right Sidebar 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop_product.html">Product Page</a>
                        </li>
                        <li>
                            <a href="shop_checkout.html">Checkout Page</a>
                        </li>
                        <li>
                            <a href="shop_billing.html">Billing Page</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcodes</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Components</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="shortcode_comp_call_to_action.html"><i class="fa fa-code"></i> Call to action</a></li>
                                            <li><a href="shortcode_comp_parallax_counters.html"><i class="fa fa-calculator"></i> Parallax Counters</a></li>
                                            <li><a href="shortcode_comp_modal.html"><i class="fa fa-bars"></i> Modals</a></li>
                                            <li><a href="shortcode_comp_blog_post_style.html"><i class="fa fa-edit"></i> Blog Post Style</a></li>
                                            <li><a href="shortcode_comp_process_style.html"><i class="fa fa-hourglass-half"></i> Process Style</a></li>
                                            <li><a href="shortcode_comp_team_style.html"><i class="fa fa-user"></i> Team Style</a></li>
                                            <li><a href="shortcode_comp_pricing_tables.html"><i class="fa fa-shopping-cart"></i> Pricing Tables</a></li>
                                            <li><a href="shortcode_comp_testimonials.html"><i class="fa fa-comments"></i> Testimonials</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Buttons & Icons</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="shortcode_btn_general.html"><i class="fa fa-flask"></i> General Buttons</a></li>
                                            <li><a href="shortcode_btn_brands.html"><i class="fa fa-html5"></i> Brand & Social Buttons</a></li>
                                            <li><a href="shortcode_btn_effects.html"><i class="fa fa-bolt"></i> Loading & Hover Effects</a></li>
                                            <li><a href="shortcode_icon_general.html"><i class="fa fa-chevron-circle-right"></i> General Icons</a></li>
                                            <li><a href="shortcode_icon_fa.html"><i class="fa fa-chevron-circle-right"></i> Font Awesome Icons</a></li>
                                            <li><a href="shortcode_icon_line.html"><i class="fa fa-chevron-circle-right"></i> Line Icons</a></li>
                                            <li><a href="shortcode_icon_glyph.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons (Bootstrap)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Elements</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="shortcode_elem_accordion.html"><i class="fa fa-list-ol"></i> Accordion</a></li>
                                            <li><a href="shortcode_elem_tabs.html"><i class="fa fa-list-ol"></i> Tabs</a></li>
                                            <li><a href="shortcode_elem_tables.html"><i class="fa fa-table"></i> Tables</a></li>
                                            <li><a href="shortcode_elem_progress_bars.html"><i class="fa fa-align-left"></i> Progress Bars</a></li>
                                            <li><a href="shortcode_elem_form.html"><i class="fa fa-server"></i> Form Layouts</a></li>
                                            <li><a href="shortcode_elem_google_maps.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                            <li><a href="shortcode_elem_icon_boxes.html"><i class="fa fa-cubes"></i> Icon Boxes</a></li>
                                            <li><a href="shortcode_elem_image_style.html"><i class="fa fa-picture-o"></i> Image Style</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Typography</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="shortcode_typo_typography.html"><i class="fa fa-sort-alpha-asc"></i> Typography</a></li>
                                            <li><a href="shortcode_typo_headings.html"><i class="fa fa-text-height"></i> Headings Options</a></li>
                                            <li><a href="shortcode_typo_highlights.html"><i class="fa fa-pencil"></i> Highlights Options</a></li>
                                            <li><a href="shortcode_typo_dropcaps.html"><i class="fa fa-font"></i> Dropcaps</a></li>
                                            <li><a href="shortcode_typo_blockquote.html"><i class="fa fa-quote-left"></i> Blockquote Blocks</a></li>
                                            <li><a href="shortcode_typo_pagination.html"><i class="fa fa-arrows-h"></i> Paginations</a></li>
                                            <li><a href="shortcode_typo_list.html"><i class="fa fa-ellipsis-v"></i> List style</a></li>
                                            <li><a href="shortcode_typo_dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers</a></li>
                                            <li><a href="shortcode_typo_alerts.html"><i class="fa fa-comment"></i> Alerts</a></li>
                                            <li><a href="shortcode_typo_grid.html"><i class="fa fa-align-justify"></i> Grid Layouts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="page_contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END - Navbar -->

<!-- START REVOLUTION SLIDER 5.0 -->
<div id="slider_container" class="rev_slider_wrapper">
    <div id="rev-slider" class="rev_slider" data-version="5.0">
        <ul>
            <li data-transition="boxslide">
                <!-- MAIN IMAGE -->
                <img src="img/slider/revolution/011.jpg" alt="" width="1920" height="600">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption captionHeadline3 text-right" id="slide-51-layer-1" data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="1200" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Get discount
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption captionText1" id="slide-51-layer-2" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption captionButtonlink" id="slide-400-layer-3" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                    <a href="#" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </li>
            <li data-transition="boxslide">
                <!-- MAIN IMAGE -->
                <img src="img/slider/revolution/012.jpg" alt="" width="1920" height="600">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption captionHeadline3 text-right" id="slide-51-layer-4" data-x="['right','right','right','right']" data-hoffset="['100','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="1200" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Quick & safe
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption captionText1" id="slide-51-layer-5" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption captionButtonlink" id="slide-400-layer-6" data-x="['right','right','right','right']" data-hoffset="['100','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                    <a href="#" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </li>
            <li data-transition="boxslide">
                <!-- MAIN IMAGE -->
                <img src="img/slider/revolution/013.jpg" alt="" width="1920" height="600">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption captionHeadline3" id="slide-51-layer-7" data-x="['left','left','left','left']" data-hoffset="['80','80','40','40']" data-y="['top','top','top','top']" data-voffset="['190','250','250','250']" data-width="544" data-height="auto" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; min-width: 364px; max-width: 364px; max-width: 133px; max-width: 133px; white-space: normal;">Get more gifts
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption captionText1" id="slide-51-layer-8" data-x="['left','left','left','left']" data-hoffset="['80','81','41','41']" data-y="['top','top','top','top']" data-voffset="['265','305','101','101']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 0.65);br:0 0 0px 0;cursor:pointer;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Usu velit iisque iracundia te vocibus
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption captionButtonlink" id="slide-400-layer-9" data-x="['left','left','left','left']" data-hoffset="['80','81','41','41']" data-y="['top','top','top','top']" data-voffset="['325','355','151','151']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                    <a href="#" class="btn-e btn-e-primary btn-icon">Shopping Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </li>
        </ul>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>
<!-- END OF SLIDER WRAPPER -->

<div class="clearfix"></div>

<!-- START - Contain Wrapp -->
<div class="contain-wrapp padding-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('gallery')
            </div>
        </div>
    </div>
</div>
<!-- END - Contain Wrapp -->

<div class="clearfix"></div>

<!-- START - Contain Wrapp -->
<div class="contain-wrapp gray-container padding-bottom-20">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-heading">
                    <h3>Recent Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <!-- Start Recent Product -->
        <div id="recent-products" class="owl-carousel leftControls-right">
            <!-- Start product 1 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Purple</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 1 -->

            <!-- Start product 2 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Black</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 2 -->

            <!-- Start product 3 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Green</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 3 -->

            <!-- Start product 4 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Black</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 4 -->

            <!-- Start product 5 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Red</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 5 -->

            <!-- Start product 6 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">Product Title</a></h5>
                        <a href="#" class="img-categorie">Jacket</a>
                    </div>
                    <img src="img/shop/img.png" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="shop_product.html">Product Orange</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>$60</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 6 -->
        </div>
        <!-- End Recent Product -->
    </div>
</div>

<div class="clearfix"></div>

<!-- START - Parallax -->
<div class="parallax bg5">
    <div class="parallax-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 owl-column-wrapp">
                    <div id="testimonials" class="owl-carousel">
                        <div class="item">
                            <div class="testimonials-single">
                                <blockquote class="centered">
                                    Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                </blockquote>
                                <span class="block"><a href="#">Evan Bohringer</a> - Google Manager</span>
                                <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-single">
                                <blockquote class="centered">
                                    Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                </blockquote>
                                <span class="block"><a href="#">Alice Williams</a> - Wrapbootstrap</span>
                                <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-single">
                                <blockquote class="centered">
                                    Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                </blockquote>
                                <span class="block"><a href="#">John Doe</a> - Facebook</span>
                                <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-single">
                                <blockquote class="centered">
                                    Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                </blockquote>
                                <span class="block"><a href="#">Katrina Mc`coy</a> - Web Designer</span>
                                <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END - Parallax -->

<div class="clearfix"></div>

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

<!-- START - Parallax -->
<div class="parallax parallax-two bg-clients">
    <div class="parallax-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-column-wrapp text-center">
                    <div id="clients" class="owl-carousel leftControls-right">
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END - Parallax -->

<div class="clearfix"></div>

<!-- START - Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="footer-description">
                    <img class="footer-logo" src="img/themes/logo-orange.png" alt="Footer logo" />
                    <span>Responsive Multipurpose Template</span>
                    <div class="widget" id="text-footer">
                        <p>Tota melius antiopam ex. Novum iuvaret principes ut vis, at mei tollit convenire. Pri autem solet delicata cu, ad viris copiosae theophrastus.</p>
                    </div>
                </div>
                <div class="footer-details">
                    <ul class="list-unstyled footer-list">
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Service</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Login</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Registration</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">F.A.Q.</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
                    </ul>
                    <ul class="list-unstyled footer-list">
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Lorem Ipsum</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Dolor sit amet</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Eiusmod tempor</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Labore et dolore</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">At vero eos</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Nam libero tempore</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Ecada terms</a></li>
                    </ul>
                    <ul class="list-unstyled footer-list">
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Service</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Login</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Registration</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">F.A.Q.</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
                    </ul>
                    <ul class="list-unstyled footer-list">
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Lorem Ipsum</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Dolor sit amet</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Eiusmod tempor</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Labore et dolore</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">At vero eos</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Nam libero tempore</a></li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#">Ecada terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Newsletter</h5>
                <p>Subscribe to our newsletter to get important news, amazing offers & inside scoops:</p>
                <!-- START - Subscribe -->
                <div class="input-group margin-bottom-20">
                    <input type="text" class="form-control" placeholder="Enter your email address...">
                    <span class="input-group-btn">
                                <button class="btn-e btn-e-primary" type="button"><i class="fa fa-send-o"></i></button>
                            </span>
                </div>
                <!-- END - Subscribe -->
                <div class="footer-social-networks">
                    <a href="#"><i class="fa fa-facebook fa-2x icon-square"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x icon-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-2x icon-square"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x icon-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-2x icon-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-brand">
                        <p><a href="#">Ecada</a> &copy; 2018 - All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline sponsors-icons">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END - Footer -->

<!-- START - Back To Top -->
<a href="#" class="toTop">
    <i class="fa fa-chevron-up"></i>
</a>
<!-- END - Back To Top -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min.js?ver=1.0.0')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script>
    $(document).ready(function() {
        if ($("#rev-slider").revolution != undefined) {
            $("#rev-slider").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hephaistos",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hephaistos",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 30,
                        space: 5,
                        tmp: ''
                    }
                },
                gridwidth: 1230,
                gridheight: [550, 550, 600, 500],
            });
        }
    });
</script>

<!-- Parallax -->
<script src="{{asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/parallax/setting.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('js/owlcarousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/owlcarousel/js/setting.js')}}"></script>

<!-- PrettyPhoto -->
<script src="{{asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/prettyPhoto/js/setting.js')}}"></script>

<!-- Masonry -->
<script src="{{asset('js/masonry/js/masonry.min.js')}}"></script>
<script src="{{asset('js/masonry/js/masonry.filter.js')}}"></script>
<script src="{{asset('js/masonry/js/setting.js')}}"></script>

<!-- Custom javaScript for this theme -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Nicescroll -->
<script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/nicescroll/settings.js')}}"></script>

<!-- Theme option-->
<script src="{{asset('js/style-switcher/js/style-switcher.js')}}"></script>
</body>
</html>