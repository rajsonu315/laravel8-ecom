@extends('frant.include.layout')
@section('content')
    <!-- breadcrumbs -->


    <!--register wrapper-->
    <div class="register_wrap section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="register_form padding_default shadow_sm">
                        <h4 class="title_2">Create an account</h4>
                        <p class="mb-4 text_md">Register here if you are a new customer.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" placeholder="Jone Doe">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" placeholder="example@mail.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Password <span>*</span></label>
                                        <input type="password" placeholder="type password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Confirm Password <span>*</span></label>
                                        <input type="password" placeholder="confirm your password">
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="custom_check check_2 d-flex align-items-center">
                                        <input type="checkbox" class="check_inp" hidden id="save-default">
                                        <label for="save-default">I have read and agree to the <a href="terms-condition.html"
                                                class="text-color">terms & conditions</a> </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">create
                                        account</button>
                                </div>

                            </div>
                        </form>

                        <div class="dif_regway my-3">
                            <span class="txt">Or singup in with</span>
                        </div>

                        <div class="d-flex">
                            <button class="default_btn xs_btn rounded px-4 d-block w-50 text-capitalize bg-facebook">
                                <i class="fab fa-facebook-f me-2"></i> Facebook
                            </button>
                            <button class="default_btn xs_btn rounded px-4 d-block w-50 ms-3 text-capitalize bg-google">
                                <i class="fab fa-google me-2"></i> Google
                            </button>
                        </div>

                        <p class="text-center mt-3 mb-0">Already have an account.? <a href="{{route('login')}}" class="text-color">Login Now</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection