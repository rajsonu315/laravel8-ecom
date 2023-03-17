@extends('frant.include.layout')
@section('content')
    <!-- hero area -->
    <div class="banner_slider">
        <div class="hero_area" style="background-image: url('assets/images/banner-1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn small rounded" href="{{route('shop_grid')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('assets/images/banner-2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="{{route('shop_grid')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('assets/images/banner-3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="{{route('shop_grid')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features area -->
    <section class="features_area  section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row justify-content-center gx-2 gx-md-4">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/delivery-van.svg" alt="icon">

                                </div>
                                <div class="feature_content">
                                    <h4>Free shipping</h4>
                                    <p>Orders over $200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/money-back.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>Money Returns</h4>
                                    <p>30 Days money return</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/service-hours.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>24/7 Support</h4>
                                    <p>Customer support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- top new arrival -->
    <div class="top_arrival_wrp home-3 section_padding_b">
        <div class="container">
            <h2 class="section_title_3">Flash sale</h2>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="flash_counter">
                    <div class="end_in">Ending in</div>
                    <div class="single_count">00</div>
                    <div class="time_sep">:</div>
                    <div class="single_count" id="count_minute">00</div>
                    <div class="time_sep">:</div>
                    <div class="single_count" id="count_second">00</div>
                </div>
                <div class="seemore_2">
                    <a href="#">See More <span><i class="las la-angle-right"></i></span></a>
                </div>
            </div>
            <div class="product_slider_2">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/parse.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Women Scrub Leather</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shirt-2.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Men T-SHIRT ΚΑΝΟΝΙΚΗ </h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/toy.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Playmobil Princess M</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shoes-5.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Men s Running Shoes</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shoes-3.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Women Hill Leather</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- categories -->
    <div class="category_2 section_padding_b">
        <div class="container">
            <h2 class="section_title_3">Categories</h2>
            <div class="row gy-4">


                @foreach ($category as $category_name )
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="{{$category_name->id}}">
                        <div class="single_category_2">
                            <div class="cat2_img">
                                <img loading="lazy" src="{{ asset('assets/images/shoes-5.png') }}" alt="">
                            </div>
                            <h5>{{$category_name->name}}</h5>
                        </div>
                    </a>
                </div>

                @endforeach


            </div>
        </div>
    </div>

    <!-- ad banner -->
    <div class="offer_banner_area section_padding_b">
        <div class="container">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/offer.jpg') }}">
                    <img loading="lazy" src="{{ asset('assets/images/offer-mobile-2.jpg') }}" alt="ad">
                </picture>
            </a>
        </div>
    </div>

    <!-- recomended -->
    <div class="top_arrival_wrp home-3 section_padding_b">
        <div class="container">
            <h2 class="section_title_3">recomended for you</h2>
            <div class="product_slider_2">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/parse.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Women Scrub Leather</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shirt-2.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Men T-SHIRT ΚΑΝΟΝΙΚΗ </h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/toy.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Playmobil Princess M</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shoes-5.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Men s Running Shoes</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="{{ asset('assets/images/shoes-3.png') }}" alt="product">
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Women Hill Leather</h4>
                        </a>
                        <div class="price mb-1 mt-2">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <a href="{{ route('product_view') }}" class="href">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- best selling -->
    {{-- <div class="best_selling section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="bestprod_title d-flex align-items-center justify-content-between">
                        <div class="text_xl text-uppercase text-semibold">Latest</div>
                        <div class="seemore_2">
                            <a href="#">See More <span><i class="las la-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="bestprod_wrp">
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-1.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Adidas Trefoil Hoodie</h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-6.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">REG BROADCLOTH </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-4.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Blazer Tenia - Lana-Beige </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="bestprod_title d-flex align-items-center justify-content-between">
                        <div class="text_xl text-uppercase text-semibold">best selling</div>
                        <div class="seemore_2">
                            <a href="#">See More <span><i class="las la-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="bestprod_wrp">
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-3.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Jump-Rings Connectors </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-2.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">SWAROVSKI Fine Bracelet</h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-5.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Hilfiger Tommy Hilfiger </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0 d-block d-md-none d-lg-block">
                    <div class="bestprod_title d-flex align-items-center justify-content-between">
                        <div class="text_xl text-uppercase text-semibold">Top rated</div>
                        <div class="seemore_2">
                            <a href="#">See More <span><i class="las la-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="bestprod_wrp">
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/shirt-2.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Adidas Trefoil Hoodie</h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-8.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">REG BROADCLOTH </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_bestprod">
                            <div class="bestprod_img">
                                <img loading="lazy" src="{{ asset('assets/images/prod-7.png') }}" alt="product">
                            </div>
                            <div class="bestprod_content">
                                <a href="#" class="default_link">
                                    <h4 class="text_lg mb-2">Blazer Tenia - Lana-Beige </h4>
                                </a>
                                <div class="price mb-0">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count">(150)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
