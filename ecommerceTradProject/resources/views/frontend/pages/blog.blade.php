@extends('frontend.layouts.master')
@section('content')

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!--Page Title-->
    <section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Latest News</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Grid</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- news-section -->
    <section class="news-section blog-grid sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-10.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 28, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-11.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 27, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-12.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 26, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-13.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 25, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-14.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 24, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-15.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 23, 2020</li>
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
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn centred"><a href="blog-grid.html">Load More</a></div>
        </div>
    </section>
    <!-- news-section end -->

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>




@endsection