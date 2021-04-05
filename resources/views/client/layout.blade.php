<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('client_resources/img/favicon.png')}}" type="image/png">
    <title>Simini</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('client_resources/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('client_resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client_resources/css/responsive.css')}}">

    <!-- slider -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #ef2d71;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ef2d71;
        }
    </style>

</head>

<body>

<!--================Header Menu Area =================-->
<header class="header_area">

    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <img style="width: 150px;height: auto" src="{{asset('client_resources/img/trikotaza-logo.png')}}" alt="">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row w-100">
                        <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="">Дома</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категории</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Бебиња</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Деца</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Мажи</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Жени</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Се за семејството</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Акција</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Блог</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Бебе</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Дом</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Комфорт</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Подарок</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Контакт</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-5">
                            <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                <hr>
                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="lnr lnr lnr-cart"></i>
                                    </a>
                                </li>

                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->




    @yield('home')
    @yield('products')
    @yield('single_product')
    @yield('blogs')
    @yield('single_blog')


<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-5 col-sm-5">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Контакт Информации</h6>
                    <ul style="list-style: none; padding-left: 0px">
                        <li>
                            Телефон:<br> 070/298/158
                        </li>
                        <li class="mt-2">
                            Е-маил: simini.macedonia@yahoo.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5">
                <div class="single-footer-widget">
                    <h6 class="footer_title text-center">Локација</h6>
                    <p>Stay updated with our latest trends</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <h6 class="footer_title text-center">Instagram Feed</h6>
                    <ul class="list instafeed d-flex flex-wrap">
                        <li>
                            <img src="client_resources/img/instagram/Image-01.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-02.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-03.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-04.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-05.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-06.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-06.jpg" alt="">
                        </li>
                        <li>
                            <img src="client_resources/img/instagram/Image-06.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget f_social_wd">
                    <h6 class="footer_title text-center">Следете Не</h6>
                    <div class="f_social" style="text-align: center">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  col-md-5 col-sm-5">
                <div class="single-footer-widget">
                    <h6 class="footer_title text-center">Важни Информации</h6>
                    <ul style="list-style: none; padding-left: 0px">
                        <li>
                            Услови на користење
                        </li>
                        <li>
                            Информации за достава
                        </li>
                        <li>
                            Политика за приватност
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('client_resources/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('client_resources/js/popper.js')}}"></script>
<script src="{{asset('client_resources/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client_resources/js/stellar.js')}}"></script>
<script src="{{asset('client_resources/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{asset('client_resources/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('client_resources/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('client_resources/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('client_resources/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('client_resources/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('client_resources/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('client_resources/vendors/flipclock/timer.js')}}"></script>
<script src="{{asset('client_resources/vendors/counter-up/jquery.counterup.js')}}"></script>
<script src="{{asset('client_resources/js/mail-script.js')}}"></script>
<script src="{{asset('client_resources/js/theme.js')}}"></script>
</body>

</html>
