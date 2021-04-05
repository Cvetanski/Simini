@extends('client.layout')
@section('home')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="offset-lg-2 col-lg-8">
                    <h3>Нежност за
                        <br />цело семејство</h3>
                    <p>Купи квалитетно и ефтино, достава до дома.</p>
                    <a class="white_bg_btn" href="">Пазари</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<section class="counter_up section_gap mt-5">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div >
                        <div class="p-5">
                            <div class="icon_container mt-3">
                                <i class="fa fa-clock-o fa-3x"></i>
                            </div>
                            <span class="increasing_numbers" id="postoenje">16</span>
                            <span class="d-block">Години Постоење</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div>
                        <div class="p-5">
                            <div class="icon_container mt-3">
                                <i class="fa fa-star fa-3x"></i>
                            </div>
                            <span class="increasing_numbers" id="postoenje">100%</span>
                            <span class="d-block">Квалитет</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div>
                        <div class="p-5">
                            <div class="icon_container mt-3">
                                <i class="fa fa-pie-chart fa-3x"></i>
                            </div>
                            <span class="increasing_numbers" id="postoenje">20,000</span>
                            <span class="d-block">Задоволни Потрошувачи</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ TEST =================-->


<section class="section_gap">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center" style="font-family: Arial">Најпродавани Продукти</h2>
            <hr style="height: 30px; color: #ffdcdc">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img class="img-fluid img-responsive"  src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Продукт</h4>
                                        <p class="item-price"><span>500 Мкд</span></p>
                                        <a class="white_bg_btn" href="#">Додај во кошница</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</section>
<!--================ TEST =================-->



<!--================About Us Area =================-->
<section class="about-us section_gap">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">За Нас</h2>
                    <hr style="height: 30px; color: #ffdcdc">
                    <p class="text-center" style="font-family: Arial; font-size: 20px ">Успешната приказна на трикотажа SIMINI настанува од 2005 година со производство и трговија на големо и мало со трикотажни производи за деца и возрасни, со висококвалитетни памучни материјали.
                        Од самиот почеток започнавме со производство на бебешки програм, бодиња, лигавчиња, боди бенкички, шпихозни, целосни пижами, со понатамошно проширување на нашиот асортиман со детски пижами, пижами за возрасни, хеланки, тренерки, ѕиври, поткошули итн.
                        <br> Со нашата успешна работа сега брендот SIMINI покрај производство се занимава и со увоз на трикотажни производи од други земји и сопствена дистрибуција на нашите производи низ сите градови во Македонија.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End About Us Area =================-->

<!--================ Subscription Area ================-->
<!--
<section class="subscription-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Subscribe for Our Newsletter</h2>
                    <span>We won’t send any kind of spam</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div id="mc_embed_signup">
                    <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
                          method="get" class="subscription relative">
                        <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                               required="">
                         <div style="position: absolute; left: -5000px;">
                            <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                        </div>
                        <button type="submit" class="newsl-btn">Get Started</button>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--================ End Subscription Area ================-->
    <script>
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const obj = document.getElementById("postoenje");
        const max = document.getElementById("postoenje").innerHTML;
        animateValue(obj, 0, parseInt(max), 5000);
    </script>
@endsection
