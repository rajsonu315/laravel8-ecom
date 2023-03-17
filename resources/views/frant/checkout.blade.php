@extends('frant.include.layout')
@section('content')
    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="#">Shop</a>
            <a href="#" class="active">Checkout</a>
        </div>
    </div>

    <!-- cart area -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-6">
                    <h4 class="shop_cart_title mb-4 ps-3">Billing details</h4>
                    <div class="billing_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_billing_inp">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" id="first_name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_billing_inp">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" id="last_name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" id="company_name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="county_region">County/Region <span>*</span></label>
                                    <input type="text" id="county_region">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="street_addr">Street Address <span>*</span></label>
                                    <input type="text" id="street_addr">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="town_city">Town/City <span>*</span></label>
                                    <input type="text" id="town_city">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="zip_code">Zip Code <span>*</span></label>
                                    <input type="text" id="zip_code">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="phone_number">Phone Number <span>*</span></label>
                                    <input type="text" id="phone_number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label for="email_addr">Email Address <span>*</span></label>
                                    <input type="text" id="email_addr">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <h4 class="shop_cart_title ps-3">Your order</h4>
                    <div class="checkout_order mt-4">
                        <h4>product</h4>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Size: M</p>
                            </div>
                            <p class="checkorder_qnty">x1</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Color: Red</p>
                            </div>
                            <p class="checkorder_qnty">x2</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Size: M</p>
                            </div>
                            <p class="checkorder_qnty">x1</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order subs">
                            <div class="checkorder_cont subtotal-h">
                                <h5>Subtotal</h5>
                            </div>
                            <p class="checkorder_price">$140.00</p>
                        </div>
                        <div class="single_check_order subs">
                            <div class="checkorder_cont subtotal-h">
                                <h5>Shipping</h5>
                            </div>
                            <p class="checkorder_price">Free</p>
                        </div>
                        <div class="single_check_order total">
                            <div class="checkorder_cont">
                                <h5>Total</h5>
                            </div>
                            <p class="checkorder_price">$140.00</p>
                        </div>
                        <div class="checkorder_agree custom_check check_2">
                            <input type="checkbox" class="check_inp" hidden id="save-default">
                            <label for="save-default">Agree to our <a href="#" class="text-color">terms &
                                    conditions</a></label>
                        </div>


                        <div class="checkorder_btn">
                            <a href="{{ route('payment') }}" class="href">
                                <button class="default_btn rounded w-100">place order</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
