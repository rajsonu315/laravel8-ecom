@extends('frant.include.layout')
@section('content')

    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="account.html">My Account</a>
            <a href="#" class="active">Order Details</a>
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
                    <div class="order_detail_wrapper shadow_sm">
                        <h4 class="od_title">Order Details</h4>
                        <!-- order details -->
                        <div class="orderdet_info d-flex align-items-center justify-content-between flex-wrap">
                            <div class="single_orderdet">
                                <h5>Sold By</h5>
                                <p class="text-color">RAFCART</p>
                            </div>
                            <div class="single_orderdet">
                                <h5>Order Number</h5>
                                <p>789ER4S324</p>
                            </div>
                            <div class="single_orderdet">
                                <h5>Shipped Date</h5>
                                <p>01 March 2021</p>
                            </div>
                            <div class="orderdet_btn">
                                <a href="account-review-details.html" class="default_btn second rounded text-capitalize small">Write A Review</a>
                            </div>
                        </div>

                        <!-- shipping address process -->
                        <div class="shipping_process">
                            
                            <div class="sprocess_cont">
                                <div class="sprosbar">
                                    <span class="sp_fill"></span>
                                </div>

                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Processing</p>
                                </div>
                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Shipped</p>
                                </div>
                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Delivered</p>
                                </div>
                            </div>
                            <div class="sprocess_tooltip shadow_sm">
                                <p>23 Jul 2021.18.56</p>
                                <p>Your package has been delivered. Thank you for shopping at RAFCART!</p>
                            </div>
                        </div>
    
                        <!-- product details -->
                        <div class="order_prodetails d-flex align-items-center flex-wrap">
                            <div class="orderprod_img">
                                <img loading="lazy"  src="assets/images/headphone-3.png" alt="product">
                            </div>
                            <div class="single_orderdet pdname">
                                <h5>Sound Intone I65 Earphone</h5>
                                <p>No Warranty Available</p>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-md-auto ms-0 mt-3 mt-md-0">
                                <h5>$50</h5>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-auto mt-3 mt-md-0">
                                <h5>Qty:1</h5>
                            </div>
                            <div class="single_orderdet w-xs-33 ms-auto d-flex align-items-center d-md-block mt-3 mt-md-0">
                                <h5 class="text-color text-uppercase me-3 me-md-0 mb-0 mb-md-1"> <a href="account-return-details.html">Return</a> </h5>
                                <p>Until 24Sep 2021</p>
                            </div>
                        </div>

                    </div>

                    <div class="profile_info_wrap mt-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single_prof_info shadow_sm">
                                    <div class="prof_info_title">
                                        <h4>Shipping Address</h4>
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
                                <div class="single_prof_info shadow_sm">
                                    <div class="prof_info_title">
                                        <h4>Billing Address</h4>
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
                                        <h4>Total Summary</h4>
                                    </div>
                                    <div class="prfo_info_cont">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">Subtotal</p>
                                            <p class="text-semibold mb-0">$50</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class=" mb-0">Shipping Fee</p>
                                            <p class="text-semibold mb-0">$30</p>
                                        </div>
                                        <hr class="my-2">
                                        <div class="d-flex justify-content-between">
                                            <p class="text-semibold mb-0">Total</p>
                                            <p class="text-semibold mb-0">$80</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Paid by Cash on Delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

   @endsection