@extends('client.layout')
@section('single_blog')
<!--================Home Banner Area =================-->
<!--
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Blog Details</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="single-blog.html">Blog Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area p_120">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="client_resources/img/blog/feature-img1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="#">Food,</a>
                                <a class="active" href="#">Technology,</a>
                                <a href="#">Politics,</a>
                                <a href="#">Lifestyle</a>
                            </div>
                            <ul class="blog_meta list">
                                <li>
                                    <a href="#">Mark wiens
                                        <i class="lnr lnr-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">12 Dec, 2017
                                        <i class="lnr lnr-calendar-full"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">1.2M Views
                                        <i class="lnr lnr-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">06 Comments
                                        <i class="lnr lnr-bubble"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2>Astronomy Binoculars A Great Alternative</h2>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                            on boot camp when you can get the MCSE study materials yourself at a fraction.
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
                            camp when you can get the MCSE study materials yourself at a fraction of the camp price.
                            However, who has the willpower to actually sit through a self-imposed MCSE training. who
                            has the willpower to actually sit through a self-imposed
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
                            camp when you can get the MCSE study materials yourself at a fraction of the camp price.
                            However, who has the willpower to actually sit through a self-imposed MCSE training. who
                            has the willpower to actually sit through a self-imposed
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="quotes">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                            on boot camp when you can get the MCSE study materials yourself at a fraction of the camp
                            price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <img class="img-fluid" src="client_resources/img/blog/post-img1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="client_resources/img/blog/post-img2.jpg" alt="">
                            </div>
                            <div class="col-lg-12 mt-25">
                                <p>
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                                    on boot camp when you can get the MCSE study materials yourself at a fraction of
                                    the camp price. However, who has the willpower.
                                </p>
                                <p>
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                                    on boot camp when you can get the MCSE study materials yourself at a fraction of
                                    the camp price. However, who has the willpower.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Слични Поста</h3>
                        <div class="media post_item">
                            <img src="client_resources/img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="client_resources/img/blog/popular-post/post2.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="client_resources/img/blog/popular-post/post3.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="client_resources/img/blog/popular-post/post4.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Други Категории</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Бебе</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Дом</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Комфорт</p>
                                    <p>59</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Подарок</p>
                                    <p>29</p>
                                </a>
                            </li>
                        </ul>
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection
