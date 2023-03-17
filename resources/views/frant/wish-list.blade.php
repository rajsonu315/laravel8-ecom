@extends('frant.include.layout')
@section('content')
    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="#" class="active">Wishlist</a>
        </div>
    </div>

    <!-- account -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <!--  account sidebar  -->
                <div class="col-lg-3">
                    @include('frant.include.useraccount_sidebar')
                 
                </div>
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="shop_cart_wrap wishlist">
                        <div class="single_shop_cart d-flex align-items-center flex-wrap mt-0">
                            <div class="cart_img mb-4 mb-md-0">
                                <img loading="lazy" src="assets/images/bag.png" alt="product">
                            </div>
                            <div class="cart_cont">
                                <a href="product-view.html">
                                    <h5>Casual USB Charging Laptop Backpacks</h5>
                                </a>
                                <p class="instock mb-0">Availability: <span>In Stock</span></p>
                            </div>

                            <div class="cart_price ms-md-auto ms-0">
                                <p>$45.00</p>
                            </div>
                            <div class="wish_cart_btn ms-md-auto ms-0 mt-3 mt-md-0">
                                <button class="list_product_btn"><span class="icon"><i class="icon-cart"></i></span>
                                    Add to Cart</button>
                            </div>
                            <div class="cart_remove ms-auto align-self-end align-self-md-center">
                                <i class="icon-trash"></i>
                            </div>
                        </div>
                        <div class="single_shop_cart d-flex align-items-center flex-wrap">
                            <div class="cart_img mb-4 mb-md-0">
                                <img loading="lazy" src="assets/images/keyboard.png" alt="product">
                            </div>
                            <div class="cart_cont">
                                <a href="product-view.html">
                                    <h5>HV-KB585GCM Wireless Keyboard & Mouse </h5>
                                </a>
                                <p class="instock mb-0">Availability: <span class="outstock">Out of Stock</span></p>
                            </div>

                            <div class="cart_price ms-md-auto ms-0">
                                <p>$95.00</p>
                            </div>
                            <div class="wish_cart_btn ms-md-auto ms-0 mt-3 mt-md-0">
                                <button class="list_product_btn disable"><span class="icon"><i
                                            class="icon-cart"></i></span> Add to Cart</button>
                            </div>
                            <div class="cart_remove ms-auto align-self-end align-self-md-center">
                                <i class="icon-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
