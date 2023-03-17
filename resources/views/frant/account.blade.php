@extends('frant.include.layout')
@section('content')
    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="#"><i class="las la-home"></i></a>
            <a href="#" class="active">My Account</a>
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
                    <div class="account_cont_wrap">
                        <div class="profile_info_wrap">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title">
                                            <h4>Personal Profile</h4>
                                            <a href="account-profile-info">Edit</a>
                                        </div>
                                        <div class="prfo_info_cont">
                                            <p class="text-semibold">Russell Ahmed</p>
                                            <p>example@mail.com</p>
                                            <p>(123) 456-789</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title">
                                            <h4>Shipping Address</h4>
                                            <a href="account-manage-address">Edit</a>
                                        </div>
                                        <div class="prfo_info_cont">
                                            <p class="text-semibold">Ralph Bohner</p>
                                            <p>3891 Ranchview Dr.</p>
                                            <p>Richardson, Califora</p>
                                            <p>(123) 456-789</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single_prof_info shadow_sm mb-0">
                                        <div class="prof_info_title">
                                            <h4>Billing Address</h4>
                                            <a href="account-manage-address">Edit</a>
                                        </div>
                                        <div class="prfo_info_cont">
                                            <p class="text-semibold">Ralph Bohner</p>
                                            <p>3891 Ranchview Dr.</p>
                                            <p>Richardson, Califora</p>
                                            <p>(123) 456-789</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prof_recent_order shadow_sm">
                            <h4>Recent Orders</h4>
                            <div class="single_prof_recorder">
                                <div class="prorder_img">
                                    <img loading="lazy" src="assets/images/tv.png" alt="product">
                                    <img loading="lazy" src="assets/images/tv.png" alt="product">
                                </div>
                                <div class="prorder_btn">
                                    <a href="account-order-details">View Order</a>
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
                                    <h5 class="d-block d-md-none"><span
                                            class="me-2 d-inline-block d-sm-none font-normal text_xs">x3</span> $120</h5>
                                    <p class="text-color">Cancelled</p>
                                </div>
                            </div>
                            <div class="single_prof_recorder">
                                <div class="prorder_img">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                </div>
                                <div class="prorder_btn">
                                    <a href="account-order-details">View Order</a>
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
                                    <h5 class="d-block d-md-none"><span
                                            class="me-2 d-inline-block d-sm-none font-normal text_xs">x3</span> $120</h5>
                                    <p class="text-green">Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
