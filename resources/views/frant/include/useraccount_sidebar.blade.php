<div class="account_sidebar">
    <div class="account_profile position-relative shadow_sm">
        <div class="acprof_img">
            <a href="#">
                <img loading="lazy" src="assets/images/avatar-2.png" alt="user">
            </a>
        </div>
        <div class="acprof_cont">
            <p>Hello,</p>
            <h4>Russell Ahmed</h4>
        </div>
        <div class="profile_hambarg d-lg-none d-block">
            <i class="las la-bars"></i>
        </div>
    </div>
    <div class="acprof_wrap shadow_sm">
        <div class="acprof_links">
            <a href="{{route('account')}}" class="active">
                <h4 class="acprof_link_title">
                    <i class="lar la-id-card"></i>
                    Manage My Account
                </h4>
            </a>
            <a href="{{route('account_profile_info')}}">Profile Information</a>
            <a href="{{route('account_manage_address')}}">Manage Address</a>
            {{-- <a href="#">Change Password</a> --}}
        </div>
        <div class="acprof_links">
            <a href="{{route('account_order_history')}}">
                <h4 class="acprof_link_title">
                    <i class="las la-gift"></i>
                    My Order History
                </h4>
            </a>
            {{-- <a href="#">My Returns</a> --}}
            <a href="{{route('account_order_cancel')}}">My Cancellations</a>
            <a href="{{route('account_my_reviews')}}">My Reviews</a>
        </div>
        {{-- <div class="acprof_links">
            <a href="#">
                <h4 class="acprof_link_title">
                    <i class="las la-credit-card"></i>
                    Payments Methods
                </h4>
            </a>
            <a href="#">Voucher</a>
        </div> --}}
        <div class="acprof_links">
            <a href="{{route('wish_list')}}">
                <h4 class="ac_link_title">
                    <i class="lar la-heart"></i>
                    My Wishlist
                </h4>
            </a>
        </div>
        <div class="acprof_links border-0">
            <a href="#">
                <h4 class="acprof_link_title">
                    <i class="las la-power-off"></i>
                    Log Out
                </h4>
            </a>
        </div>
    </div>
</div>