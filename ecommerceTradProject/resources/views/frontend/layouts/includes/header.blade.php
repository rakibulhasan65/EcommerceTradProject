<header class="main-header style-one">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <ul class="info top-left pull-left">
                    <li><i class="fas fa-map-marker-alt"></i>{{ $siteSetting->address }}</li>
                    <li><i class="fas fa-headphones"></i>Support <a href="tel:01005200369">{{ $siteSetting->contact }}</a></li>
                </ul>
                <div class="top-right pull-right">
                    <ul class="social-links clearfix">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="{{ asset('images/siteImage/'.$siteSetting->navLogo) }}"
                                alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ Route('home') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="{{ url('about') }}">About</a>
                                </li>
                                <li class="dropdown"><a href="{{ Route('service') }}">Services</a>
                                </li>
                                <li class="dropdown"><a href="index.html">Elements</a>
                                </li>
                                <li class="dropdown"><a href="{{ Route('blog') }}">Blog</a>
                                </li>
                                <li><a href="{{ Route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                   
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img
                                src="{{ asset('images/siteImage/'.$siteSetting->headLogo) }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>