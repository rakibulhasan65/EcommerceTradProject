@extends('frontend.layouts.master')
@section('content')
    <!-- banner-section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @foreach ($banner as $banner)
                    <div class="slide-item">
                        <div class="image-layer" style="background:url('{{ asset('images/Banner/' . $banner->image) }}')">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                <h5>{{ $banner->title }}</h5>
                                <h1>{{ $banner->description }}</h1>
                                <div class="btn-box">
                                    <a href="{{ $banner->btnLink }}"
                                        class="theme-btn style-one mar-0">{{ $banner->themeBtn }}</a>
                                </div>

                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
    <!-- banner-section end -->


    <!-- info-section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="year-box">
                            <figure class="image-box"><img src="{{ asset('frontend') }}/images/icons/year-icon.png"
                                    alt=""></figure>
                            <h2>35</h2>
                            <h3>FIONCA</h3>
                        </div>
                        <div class="title">
                            <h2>Years of Struggle <span>—</span> Better Strategy With Quality Business</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Beniam quis nostrud exercitation sed lamco laboris nis aliquip sed conseqa sed rure repreh
                            derit luptate velit excepteur ocaan dcats ipsum aliquip eduis aute irure reprehy enderit dui
                            voluptate ipsum velit esse cillum dolore ipsum.</p>
                        <a href="index.html"><i class="fas fa-arrow-right"></i><span>Who We Are</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info-section end -->


    <!-- feature-section -->
    <section class="feature-section">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($businessPlan as $businessPlan)
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{ asset('Images/BusinessPlan/' . $businessPlan->planImage) }}"
                                            alt="planImage">
                                    </figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3>{{ $businessPlan->planName }}</h3>
                                            <a href="index.html"><span>Read more</span><i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- about-section -->
    <section class="about-section bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div class="video-inner">
                        <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/about-1.jpg"
                                alt=""></figure>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption=""
                                style="background-image: url({{ asset('frontend') }}/images/resource/btn-bg.png);"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_one">
                        <div class="content-box">
                            <div class="sec-title left">
                                <h5>About fionca</h5>
                                <h2>Largest Demand Partnership Buidling Financial Experts</h2>
                            </div>
                            <div class="text">
                                <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate
                                    velit excepteur duis aute irure dolor voluptate.</p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <span class="bg-box"></span>
                                        <i class="flaticon-computer-1"></i>
                                    </div>
                                    <h4><a href="index.html">Support On Raising Funds</a></h4>
                                    <p>Veniam quis nostrud exercitason ullamco ipsum laboris sed ut perspiciatis unde
                                        omnis iste natus.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box">
                                        <span class="bg-box"></span>
                                        <i class="flaticon-browser-1"></i>
                                    </div>
                                    <h4><a href="index.html">Outsourced Consulting Business</a></h4>
                                    <p>Ad mini veniam quis nostrud exercitas tion ullamco ipsum sed ut perspiciatis unde
                                        omnis iste natus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- service-section -->
    <section class="service-section">
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title right">
                            <h5>What we provides</h5>
                            <h2>Get Exceptional <br />Service For Growth</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text">
                            <p>Tempor incididunt ut labore et dolore magna aliquat enim veniam quis nostrud exercitation
                                ullamco laboris nis aliquip consequat duis aute irure dolor voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    @foreach ($servicesData as $servicesData)
                            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <h4><a href="planning-strategies.html">{{ $servicesData->ServiceName }}</a></h4>
                                        <div class="inner">
                                            <div class="icon-box"><i class="flaticon-{{ $servicesData->serviceIcon }}"></i>
                                            </div>
                                            <p>{{ $servicesData->SortDescription }}</p>
                                            <a href="#"><i class="fas fa-arrow-right"></i><span>Read
                                                    More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- project-section -->
    <section class="project-section">
        <div class="fluid-container">
            <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend') }}/images/gallery/project-1.jpg"
                                alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Global Management Apps</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend') }}/images/gallery/project-2.jpg"
                                alt=""></figure>
                        <div class="lower-content">
                            <p>Financial Initiatives</p>
                            <h2><a href="index.html">Planning & Task Completion</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('frontend') }}/images/gallery/project-3.jpg"
                                alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Private Workshop Assistant</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->


    <!-- annual-stats -->
    <section class="annual-stats">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_two">
                        <div class="content-box">
                            <div class="sec-title left">
                                <h5>annual Stats</h5>
                                <h2>Graph Shows Net Value Profit Assembling</h2>
                            </div>
                            <div class="text">
                                <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate
                                    velit excepteur duis aute irure dolor voluptate labore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea reprehenderit in voluptate.</p>
                            </div>
                            <div class="inner-box clearfix">
                                <div class="single-progress-box">
                                    <div class="box">
                                        <div class="piechart" data-fg-color="#204669" data-value=".75">
                                            <span>.75</span>
                                        </div>
                                        <h5>Global Flexibility <br />Investment</h5>
                                        <h3>Upto 75% Asests</h3>
                                    </div>
                                </div>
                                <div class="single-progress-box">
                                    <div class="box">
                                        <div class="piechart" data-fg-color="#da2c46" data-value=".25">
                                            <span>.25</span>
                                        </div>
                                        <h5>Security Financial <br />Solutions</h5>
                                        <h3>Upto 25% Efficient</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_one">
                        <div class="image-box">
                            <div class="pattern-layer"
                                style="background-image: url({{ asset('frontend') }}/images/shape/shape-1.png);">
                            </div>
                            <figure class="image"><img src="{{ asset('frontend') }}/images/resource/state-1.jpg"
                                    alt=""></figure>
                            <div class="award-box">
                                <div class="box">
                                    <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-1.png"
                                            alt="">
                                    </figure>
                                    <span>Financial & Consulting Award 2019-2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- annual-stats end -->


    <!-- world-cyber -->
    <section class="world-cyber bg-color-1">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend') }}/images/shape/shape-2.png);">
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Globaly renowned & trusted</h5>
                <h2>Fionca’s Working Everywhere</h2>
            </div>
            <div class="office-location">
                <div class="location-area">
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="{{ asset('frontend') }}/images/icons/icon-2.png"
                                    alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- world-cyber end -->


    <!-- support-section -->
    <section class="support-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="sec-title light left">
                                <h5>try our service</h5>
                                <h2>Get Free Quote</h2>
                                <p>Ad mini veniam quis nostrud ipsum exercitas tion ullamco ipsum laboris sed ut
                                    perspiciatis unde.</p>
                            </div>
                            <form action="contact.html" method="post" class="submit-form">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn style-one">request estimate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 info-column">
                        <div class="info-inner">
                            <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/info-1.jpg"
                                    alt=""></figure>
                            <div class="info-box">
                                <figure class="info-logo"><img src="{{ asset('frontend') }}/images/icons/info-logo.png"
                                        alt="">
                                </figure>
                                <div class="icon-box"><i class="fas fa-phone"></i></div>
                                <h2><a href="tel:18003698527">1-800-369-8527</a></h2>
                                <div class="email"><a href="mailto:support@my-domain.net">support@my-domain.net</a>
                                </div>
                                <ul class="list-item clearfix">
                                    <li>.&nbsp;<a href="index.html">Experienced</a>&nbsp;.</li>
                                    <li><a href="index.html">Specialized</a>&nbsp;.</li>
                                    <li><a href="index.html">Professional</a>&nbsp;.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section"
        style="background-image: url({{ asset('frontend') }}/images/background/testimonial-bg.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title right">
                            <h5>testimonials</h5>
                            <h2>What Our Loving <br />Clients Saying</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text">
                            <p>Tempor incididunt ut labore et dolore magna aliquat enim veniam quis nostrud exercitation
                                ullamco laboris nis aliquip consequat duis aute irure dolor voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-inner">
                <div class="client-testimonial-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam estm qui dolorem ipsum quia dolor sit
                                amet consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam sd ipsum quaerat voluptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Robert Smith</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Christine Eva</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Jhon Doe</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-4.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Robert</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-5.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Tomas Tom</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Robert Smith</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Christine Eva</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-3.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Jhon Doe</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-4.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Robert</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('frontend') }}/images/resource/testimonial-5.png" alt="">
                            </figure>
                            <div class="info-box">
                                <h5>Tomas Tom</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- news-section -->
    <section class="news-section bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Read the articles</h5>
                <h2>What’s Happening</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img
                                        src="{{ asset('frontend') }}/images/news/news-1.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 31, 2020</li>
                                    <li class="share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                        <ul class="social-links">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html">Take Action For Benefits Of Your Business</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem
                                    incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i
                                            class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img
                                        src="{{ asset('frontend') }}/images/news/news-2.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 30, 2020</li>
                                    <li class="share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                        <ul class="social-links">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html">Improve Your Investment Through Money</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem
                                    incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i
                                            class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img
                                        src="{{ asset('frontend') }}/images/news/news-3.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 29, 2020</li>
                                    <li class="share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                        <ul class="social-links">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html">Isolate & Reframe Beliefs For The Future</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem
                                    incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i
                                            class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="index.html"><img
                            src="{{ asset('frontend') }}/images/clients/clients-1.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img
                            src="{{ asset('frontend') }}/images/clients/clients-2.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img
                            src="{{ asset('frontend') }}/images/clients/clients-3.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img
                            src="{{ asset('frontend') }}/images/clients/clients-4.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img
                            src="{{ asset('frontend') }}/images/clients/clients-5.png" alt=""></a></figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- cta-section -->
    <section class="cta-section">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend') }}/images/shape/shape-3.png);">
        </div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title pull-left">
                    <h2>We help you to unlock & unleash the power within.</h2>
                </div>
                <div class="btn-box pull-right">
                    <a href="index.html">get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- fun-fact -->
    <section class="fun-fact centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="254">0</span>
                        </div>
                        <p>Expert Consultants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="930">0</span>
                        </div>
                        <p>Our Trusted Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="826">0</span>
                        </div>
                        <p>Orders in Queue</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="720">0</span>
                        </div>
                        <p>Projects Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-fact end -->
@endsection
