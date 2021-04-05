@extends('client.layout')
@section('blogs')
<!--================Home Banner Area =================-->
<!--
<section class="home_banner_area blog_banner">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="blog_b_text text-center">
                <h2>Нај нови новости тука
                    <br />во нашиот блог</h2>
                <p>Читајте за она што ви интересира</p>
            </div>
        </div>
    </div>
</section>
-->
<!--================End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="client_resources/img/blog/cat-post/baby1.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Бебе</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Бебе</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="client_resources/img/blog/cat-post/comfort.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Комфорт</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Комфорт</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="client_resources/img/blog/cat-post/home.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="blog-details.html">
                                <h5>Дом</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>Дом</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                        <div class="col-md-3">
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
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="client_resources/img/blog/main-blog/m-blog-1.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>Astronomy Binoculars A Great Alternative</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
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
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="client_resources/img/blog/main-blog/m-blog-2.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>The Basics Of Buying A Telescope</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
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
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="client_resources/img/blog/main-blog/m-blog-3.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>The Glossary Of Telescopes</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
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
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="client_resources/img/blog/main-blog/m-blog-4.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>The Night Sky</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
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
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="client_resources/img/blog/main-blog/m-blog-5.jpg" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>Telescopes 101</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not understand
                                        why you should have to spend money on boot camp when you can get the MCSE study
                                        materials yourself at a fraction.</p>
                                    <a href="single-blog.html" class="white_bg_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">01</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">02</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">03</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">04</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">09</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection
