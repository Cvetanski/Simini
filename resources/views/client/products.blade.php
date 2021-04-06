@extends('client.layout')
@section('products')
<!--================Home Banner Area =================-->
<!--
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
            </div>
        </div>
    </div>
</section>
-->
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area p_120">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="product_top_bar">
                    <div class="right_page ml-auto">
                        {{$products->links( "pagination::bootstrap-4")}}
                    </div>
                </div>
                <div class="latest_product_inner row">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="{{asset('images/'. $product->photo)}}" alt="">
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="lnr lnr-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="lnr lnr-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#">
                                <h4>{{$product->title}}</h4>
                            </a>
                            <h5>{{$product->price}}</h5>
                            <a class="white_bg_btn mt-3" href="#">Додај во кошница</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">
                        <div class="l_w_title">
                            <h3>Категории</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Бебиња</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Боди</a>
                                        </li>
                                        <li>
                                            <a href="#">Пижами</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Деца</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Пижами</a>
                                        </li>
                                        <li>
                                            <a href="#">Долна Облека</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Мажи</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Пижами</a>
                                        </li>
                                        <li>
                                            <a href="#">Долна Облека</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Жени</a>
                                    <ul class="list">
                                        <li>
                                            <a href="#">Пижами</a>
                                        </li>
                                        <li>
                                            <a href="#">Долна Облека</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Филтри</h3>
                        </div>
                        <div class="widgets_inner">
                            <h4>Големина</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">XS</a>
                                </li>
                                <li>
                                    <a href="#">S</a>
                                </li>
                                <li class="active">
                                    <a href="#">M</a>
                                </li>
                                <li>
                                    <a href="#">L</a>
                                </li>
                                <li>
                                    <a href="#">XL</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets_inner">
                            <h4>Боја</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">Црна</a>
                                </li>
                                <li>
                                    <a href="#">Бела</a>
                                </li>
                                <li class="active">
                                    <a href="#">Розова</a>
                                </li>
                                <li>
                                    <a href="#">Жолта</a>
                                </li>
                                <li>
                                    <a href="#">Кафена</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="right_page ml-auto">
                {{$products->links( "pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

@endsection
