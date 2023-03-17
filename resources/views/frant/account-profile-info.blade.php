@extends('frant.include.layout')
@section('content')

    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="index-1.html"><i class="las la-home"></i></a>
            <a href="account.html">My Account</a>
            <a href="#" class="active">Profile Information</a>
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
                    <div class="acprof_info_wrap shadow_sm">
                        <h4 class="text_xl mb-3">Profile Information</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>First Name</label>
                                        <input type="text" Value="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Last Name</label>
                                        <input type="text" Value="Doe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Birthday</label>
                                        <input type="date" value="1998-01-08">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Gender</label>
                                        <select class="nice_select">
                                            <option>select gender</option>
                                            <option selected>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Email Address</label>
                                        <input type="text" value="example@mail.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Phone Number</label>
                                        <input type="text" value="123 456-789">
                                    </div>
                                </div>
                                <div class="col-12 acprof_subbtn">
                                    <button type="submit" class="default_btn rounded small">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @endsection