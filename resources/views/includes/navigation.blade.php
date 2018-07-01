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
            <a class="navbar-brand logo" href="/">
                <img src="{{asset('img/themes/logo-orange.png')}}" alt="Logo" />
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

                <li><a href="#">About us</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('emptyCart')}}">Empty cart</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END - Navbar -->