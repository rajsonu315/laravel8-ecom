@extends('frant.include.layout')
@section('content')

    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="account.html">My Account</a>
            <a href="#" class="active">Order Cancel</a>
        </div>
    </div>

    <!-- account wrapper -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <!--  account sidebar  -->
                <div class="col-lg-3">
                    @include('frant.include.useraccount_sidebar')
                 
                </div>
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="acorder_wrapper">
                        <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                            <div class="prorder_img">
                                <img loading="lazy"  src="assets/images/tv.png" alt="product">
                                <img loading="lazy"  src="assets/images/tv.png" alt="product">
                            </div>
                            <div class="prorder_btn">
                                <a href="{{route('account_order_details')}}">View Order</a>
                            </div>
                            <div class="prorder_txt prorder_odnumber">
                                <h5>Order Number</h5>
                                <p>23E34RT3</p>
                            </div>
                            <div class="prorder_txt prorder_purchased">
                                <h5>Purchased</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div class="prorder_txt prorder_qnty d-none d-sm-block">
                                <h5>Quantity</h5>
                                <p>x3</p>
                            </div>
                            <div class="prorder_txt prorder_total">
                                <h5>Total</h5>
                                <p>$120</p>
                            </div>
                            <div class="prorder_txt prorder_status">
                                <h5 class="d-none d-md-block">Status</h5>
                                <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                                <p class="text-color">Cancelled</p>
                            </div>
                        </div>
                        <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                            <div class="prorder_img">
                                <img loading="lazy"  src="assets/images/iphone-12.png" alt="product">
                                <img loading="lazy"  src="assets/images/iphone-12.png" alt="product">
                            </div>
                            <div class="prorder_btn">
                                <a href="{{route('account_order_details')}}">View Order</a>
                            </div>
                            <div class="prorder_txt prorder_odnumber">
                                <h5>Order Number</h5>
                                <p>23E34RT3</p>
                            </div>
                            <div class="prorder_txt prorder_purchased">
                                <h5>Purchased</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div class="prorder_txt prorder_qnty d-none d-sm-block">
                                <h5>Quantity</h5>
                                <p>x3</p>
                            </div>
                            <div class="prorder_txt prorder_total">
                                <h5>Total</h5>
                                <p>$120</p>
                            </div>
                            <div class="prorder_txt prorder_status">
                                <h5 class="d-none d-md-block">Status</h5>
                                <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                                <p class="text-color">Cancelled</p>
                            </div>
                        </div>
                        <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                            <div class="prorder_img">
                                <img loading="lazy"  src="assets/images/headphone-1.png" alt="product">
                                <img loading="lazy"  src="assets/images/headphone-1.png" alt="product">
                            </div>
                            <div class="prorder_btn">
                                <a href="{{route('account_order_details')}}">View Order</a>
                            </div>
                            <div class="prorder_txt prorder_odnumber">
                                <h5>Order Number</h5>
                                <p>23E34RT3</p>
                            </div>
                            <div class="prorder_txt prorder_purchased">
                                <h5>Purchased</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div class="prorder_txt prorder_qnty d-none d-sm-block">
                                <h5>Quantity</h5>
                                <p>x3</p>
                            </div>
                            <div class="prorder_txt prorder_total">
                                <h5>Total</h5>
                                <p>$120</p>
                            </div>
                            <div class="prorder_txt prorder_status">
                                <h5 class="d-none d-md-block">Status</h5>
                                <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                                <p class="text-color">Cancelled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection