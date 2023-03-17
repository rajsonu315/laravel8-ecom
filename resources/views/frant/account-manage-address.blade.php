@extends('frant.include.layout')
@section('content')

    <!-- breadcrumbs -->
    <div class="container">
        <div class="breadcrumbs">
            <a href=""><i class="las la-home"></i></a>
            <a href="account.html">My Account</a>
            <a href="#" class="active">Manage Address</a>
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
                        <h4 class="text_xl mb-3">Manage Address</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Full Name</label>
                                        <input type="text" Value="John Doe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Phone Number</label>
                                        <input type="text" Value="123 456-789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Country</label>
                                        <select class="nice_select">
                                            <option>select country</option>
                                            <option selected>Bangladesh</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Region</label>
                                        <select class="nice_select">
                                            <option>select region</option>
                                            <option selected>Dhaka</option>
                                            <option>Comilla</option>
                                            <option>Chittagong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>City</label>
                                        <select class="nice_select">
                                            <option>select city</option>
                                            <option selected>Dhaka-North</option>
                                            <option>Dhaka-South</option>
                                            <option>Badda</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Area</label>
                                        <select class="nice_select">
                                            <option>select area</option>
                                            <option selected>Notun Bazar</option>
                                            <option>Gulshan</option>
                                            <option>Mirpur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Address</label>
                                        <input type="text" Value="Solmaid Eidgha Mosque">
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