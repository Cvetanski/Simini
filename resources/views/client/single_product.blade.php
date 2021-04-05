@extends('client.layout')
@section('single_product')
<!--================Home Banner Area =================-->
<!--
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Име на продукт</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="category.html">Category</a>
                    <a href="single-product.html">Product Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_product_img">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="client_resources/img/product/feature-product/produkt1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>Маица</h3>
                    <h2>500 MKD</h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                                <span>Категорија</span> : Бебиња</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Достапност</span> : Има</a>
                        </li>
                    </ul>
                    <p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that
                        can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.</p>
                    <div class="product_count">
                        <label for="qty">Количина:</label>
                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                class="increase items-count" type="button">
                            <i class="lnr lnr-chevron-up"></i>
                        </button>
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                class="reduced items-count" type="button">
                            <i class="lnr lnr-chevron-down"></i>
                        </button>
                    </div>
                    <div class="card_area">
                        <a class="main_btn" href="#">Додај во кошница</a>
                        <a class="icon_btn" href="#">
                            <i class="lnr lnr lnr-diamond"></i>
                        </a>
                        <a class="icon_btn" href="#">
                            <i class="lnr lnr lnr-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->


<!--================Slicni Produkti =================-->
<section class="slicni_produkti section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-3>"><hr></div>
            <div class="col-lg-6 col-sm-6">
                <h2 class="text-center">Слични Продукти</h2>
            </div>
            <div class="col-lg-3 col-sm-3"><hr></div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6">
                <img class="img-fluid" src="{{asset('client_resources/img/product/feature-product/produkt1.jpg')}}">
                <div>
                    <h3 class="text-center">Ime</h3>
                    <a class="main_btn" style="width: 100%" href="#">Отвори</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <img class="img-fluid" src="{{asset('client_resources/img/product/feature-product/produkt2.jpg')}}">
                <div>
                    <h3 class="text-center">Ime</h3>
                    <a class="main_btn" style="width: 100%" href="#">Отвори</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <img class="img-fluid" src="{{asset('client_resources/img/product/feature-product/produkt3.jpg')}}">
                <div>
                    <h3 class="text-center">Ime</h3>
                    <a class="main_btn" style="width: 100%" href="#">Отвори</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <img class="img-fluid" src="{{asset('client_resources/img/product/feature-product/produkt4.jpg')}}">
                <div>
                    <h3 class="text-center">Ime</h3>
                    <a class="main_btn" style="width: 100%" href="#">Отвори</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--================End Slicni Produkti =================-->
@endsection
