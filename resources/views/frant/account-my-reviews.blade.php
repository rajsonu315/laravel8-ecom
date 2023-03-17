@extends('frant.include.layout')
@section('content')

    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="account.html">My Account</a>
            <a href="#" class="active">My Reviews</a>
        </div>
    </div>

    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <!--  account sidebar  -->
                <div class="col-lg-3">
                    @include('frant.include.useraccount_sidebar')
                 
                </div>
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="return_ordwrap">
                        <!-- product details -->
                        <div class="order_prodetails d-flex flex-wrap shadow_sm padding_default mt-0">
                            <div class="orderprod_img">
                                <img loading="lazy"  src="assets/images/x-box.png" alt="product">
                            </div>
                            <div class="single_orderdet pdname">
                                <h5>Xbox One Wireless Controll</h5>
                                <p class="text-semibold">$200</p>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-md-auto ms-0 mt-3 mt-md-0">
                                <h5>Order Number</h5>
                                <p>798W4E574</p>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-auto mt-3 mt-md-0">
                                <h5>Purchased</h5>
                                <p>16 Dec 2020</p>
                            </div>
                            <div class="orderdet_btn align-self-center ms-auto">
                                <a href="{{route('account_review_details')}}" class="default_btn second rounded text-capitalize small mt-3 mt-md-0">Write Review</a>
                            </div>
                        </div>

                        <div class="order_prodetails d-flex flex-wrap shadow_sm padding_default mt-4">
                            <div class="orderprod_img">
                                <img loading="lazy"  src="assets/images/bag-2.png" alt="product">
                            </div>
                            <div class="single_orderdet pdname">
                                <h5>Herschel Leather Duffle Bag</h5>
                                <p class="text-semibold">$55</p>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-md-auto ms-0 mt-3 mt-md-0">
                                <h5>Order Number</h5>
                                <p>798W4E574</p>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-auto mt-3 mt-md-0">
                                <h5>Purchased</h5>
                                <p>16 Dec 2020</p>
                            </div>
                            <div class="orderdet_btn align-self-center ms-auto">
                                <a href="{{route('account_review_details')}}" class="default_btn second rounded text-capitalize small mt-3 mt-md-0">Edit Review</a>
                            </div>
                        </div>

                        <div class="order_prodetails d-flex flex-wrap shadow_sm padding_default mt-4">
                            <div class="orderprod_img">
                                <img loading="lazy"  src="assets/images/headphone-3.png" alt="product">
                            </div>
                            <div class="single_orderdet pdname">
                                <h5>Sound Intone I65 Earphone</h5>
                                <p class="text-semibold">$59</p>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-md-auto ms-0 mt-3 mt-md-0">
                                <h5>Order Number</h5>
                                <p>798W4E574</p>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-auto mt-3 mt-md-0">
                                <h5>Purchased</h5>
                                <p>16 Dec 2020</p>
                            </div>
                            <div class="orderdet_btn align-self-center ms-auto">
                                <a href="{{route('account_review_details')}}" class="default_btn second rounded text-capitalize small mt-3 mt-md-0">Edit
                                    Review</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection