<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAFCART - Multipurpose eCommerce HTML Template">
    <meta name="author" content="Programming Kit">
    <title>RAFCART - Multipurpose eCommerce HTML Template</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- all css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <img src="assets/images/preloader.gif" alt="preloader">
    </div>

    <!-- top header -->
    <div class="top_heaeder">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="tophead_items">
                    <a href="#"> <span><i class="far fa-envelope"></i></span> rafcart@support.com</a>
                </div>
                <div class="tophead_items">
                    <a href="track-order.html">Track My Order</a>
                    <div class="ms-3">
                        <a class="me-0" href="login.html">Login</a><span class="text_xs">/</span><a
                            href="register.html">Register</a>
                    </div>
                    <div class="ms-3">
                        <select class="nice_select">
                            <option>Language</option>
                            <option>English</option>
                            <option>Franch</option>
                        </select>
                    </div>
                    <div class="ms-3">
                        <select class="nice_select">
                            <option>Currency</option>
                            <option>Dollar</option>
                            <option>Euro</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header -->
    <header>
        <div class="container">
            <div class="d-flex align-items-center justify-content-sm-between">
                <div class="logo">
                    <a href="index-1.html">
                        <img loading="lazy" src="assets/images/svg/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="search_wrap d-none d-lg-block">
                    <div class="search d-flex">
                        <div class="search_category">
                            <select class="nice_select">
                                <option value="">All category</option>
                                <option value="">Men</option>
                            </select>
                        </div>
                        <div class="search_input">
                            <input type="text" placeholder="Search" id="show_suggest">
                        </div>
                        <div class="search_subimt">
                            <button>
                                <span class="d-none d-sm-inline-block">Search</span>
                            </button>
                        </div>
                        <div class="search_suggest shadow-sm">
                            <div class="search_result_product">
                                <a href="product-view.html" class="single_sresult_product">
                                    <div class="sresult_img">
                                        <img loading="lazy" src="assets/images/laptop-2.png" alt="product">
                                    </div>
                                    <div class="sresult_content">
                                        <h4>HP Pavilion 15</h4>
                                        <div class="price">
                                            <span class="org_price">$45.00</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="product-view.html" class="single_sresult_product">
                                    <div class="sresult_img">
                                        <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                    </div>
                                    <div class="sresult_content">
                                        <h4>HP Pavilion 15</h4>
                                        <div class="price">
                                            <span class="org_price">$45.00</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_icon d-flex align-items-center ms-auto ms-sm-0">
                    <a href="wish-list.html" class="icon_wrp text-center wishlist ms-0">
                        <span class="icon">
                            <i class="icon-heart"></i>
                        </span>
                        <span class="icon_text">Wish List</span>
                        <span class="pops">6</span>
                    </a>
                    <div class="shopcart">
                        <a href="shopping-cart.html" class="icon_wrp text-center d-none d-lg-block">
                            <span class="icon">
                                <i class="icon-cart"></i>
                            </span>
                            <span class="icon_text">Cart</span>
                            <span class="pops">8</span>
                        </a>
                        <div class="shopcart_dropdown">
                            <div class="cart_droptitle">
                                <h4 class="text_lg">2 Items</h4>
                            </div>
                            <div class="cartsdrop_wrap">
                                <a href="product-view.html" class="single_cartdrop mb-3">
                                    <span class="remove_cart"><i class="las la-times"></i></span>
                                    <div class="cartdrop_img">
                                        <img loading="lazy" src="assets/images/shoes-5.png" alt="product">
                                    </div>
                                    <div class="cartdrop_cont">
                                        <h5 class="text_lg mb-0 default_link">
                                            Men casual shoes
                                        </h5>
                                        <p class="mb-0 text_xs text_p">x1 <span class="ms-2">$450</span></p>
                                    </div>
                                </a>
                                <a href="product-view.html" class="single_cartdrop">
                                    <span class="remove_cart"><i class="las la-times"></i></span>
                                    <div class="cartdrop_img">
                                        <img loading="lazy" src="assets/images/headphone-2.png" alt="product">
                                    </div>
                                    <div class="cartdrop_cont">
                                        <h5 class="text_lg mb-0 default_link">
                                            Men casual shoes
                                        </h5>
                                        <p class="mb-0 text_xs text_p">x1 <span class="ms-2">$450</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="total_cartdrop">
                                <h4 class="text_lg text-uppercase mb-0">Sub Total:</h4>
                                <h4 class="text_lg mb-0 ms-2">$980.00</h4>
                            </div>
                            <div class="cartdrop_footer d-flex mt-3">
                                <a href="shopping-cart.html" class="default_btn w-50 text_xs px-1">View Cart</a>
                                <a href="checkout.html" class="default_btn second ms-3 w-50 text_xs px-1">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative myacwrap home-1">
                        <a href="javascript:void(0)" class="icon_wrp text-center myacc">
                            <span class="icon">
                                <i class="icon-user-line"></i>
                            </span>
                            <span class="icon_text">Account</span>
                        </a>
                        <div class="myacc_cont">
                            <div class="ac_join">
                                <p>Welcome to RAFCART Shop</p>
                                <div class="account_btn d-flex justify-content-between">
                                    <a href="register.html" class="default_btn">Join</a>
                                    <a href="login.html" class="default_btn second">Sing in</a>
                                </div>
                            </div>
                            <div class="ac_links">
                                <a href="account.html" class="myac">
                                    <i class="lar la-id-card"></i>
                                    My Account
                                </a>
                                <a href="account-order-history.html">
                                    <i class="las la-gift"></i>
                                    My Order
                                </a>
                                <a href="wish-list.html">
                                    <i class="lar la-heart"></i>
                                    My Wishlist
                                </a>
                                <a href="shopping-cart.html">
                                    <i class="icon-cart"></i>
                                    My Cart
                                </a>
                                <a href="login.html">
                                    <i class="las la-power-off"></i>
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar -->
    <nav class="d-none d-lg-block">
        <div class="container">
            <div class="d-flex">
                <div class="all_category">
                    <div class="bars text-white d-flex align-items-center justify-content-center">
                        <span class="icon"> <i class="las la-bars"></i></span>
                        <span class="icon_text">All categories</span>
                    </div>
                    <div class="sub_categories_wrp">
                        <div class="sub_categories">
                            <h5 class="d-block position-relative d-lg-none subcats_title">
                                All categories

                            </h5>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="las la-shoe-prints"></i>
                                </span>
                                <span class="txt">Shoes</span>
                            </a>

                            <div class="singlecats withsub">
                                <span class="img_wrp">
                                    <i class="las la-male"></i>
                                </span>
                                <span class="txt">Men</span>
                                <span class="wsicon"><i class="las la-angle-right"></i></span>
                                <div class="mega_menu">
                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Hot sale</h4>
                                            <div class="mega_categories">
                                                <a href="#">Hoodies $ Sweatshirts</a>
                                                <a href="#">T-Shirt</a>
                                                <a href="#">Men’s Sets</a>
                                                <a href="#">Jacket</a>
                                                <a href="#">Shoes</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Bottoms</h4>
                                            <div class="mega_categories">
                                                <a href="#">Casual Pants</a>
                                                <a href="#">Men’s Sleep & Lounge</a>
                                                <a href="#">Jeans</a>
                                                <a href="#">Shorts</a>
                                                <a href="#">Towel</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Outerwear $ Jackets</h4>
                                            <div class="mega_categories">
                                                <a href="#">Jacket</a>
                                                <a href="#">Sweaters</a>
                                                <a href="#">Casual Faux Leather</a>
                                                <a href="#">Parks</a>
                                                <a href="#">Jeans</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Underwear & Loun</h4>
                                            <div class="mega_categories">
                                                <a href="#">Boxes</a>
                                                <a href="#">Berifs</a>
                                                <a href="#">Long Johns</a>
                                                <a href="#">Men’s Sleep & Lounge</a>
                                                <a href="#">Parks</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Accessories</h4>
                                            <div class="mega_categories">
                                                <a href="#">Scarves</a>
                                                <a href="#">Skullies & Beanies</a>
                                                <a href="#">Casual Faux Leather</a>
                                                <a href="#">Prescription Glasses</a>
                                                <a href="#">Belt</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Novelty & Special</h4>
                                            <div class="mega_categories">
                                                <a href="#">Cosplay Costumes</a>
                                                <a href="#">Stage & Dance Wear</a>
                                                <a href="#">Exotic Apparel</a>
                                                <a href="#">Scarves</a>
                                                <a href="#">Men’s Sets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_mega_menu brnd">
                                        <div class="mega_brands">
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="las la-female"></i>
                                </span>
                                <span class="txt">Women</span>
                            </a>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="las la-plug"></i>
                                </span>
                                <span class="txt">Electronisc</span>
                            </a>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="las la-headphones"></i>
                                </span>
                                <span class="txt">Headphones</span>
                            </a>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="icon-watch"></i>
                                </span>
                                <span class="txt">Watches</span>
                            </a>
                            <div class="singlecats withsub">
                                <span class="img_wrp">
                                    <i class="las la-desktop"></i>
                                </span>
                                <span class="txt">Computer</span>
                                <span class="wsicon"><i class="las la-angle-right"></i></span>
                                <div class="mega_menu">
                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Macbook</h4>
                                            <div class="mega_categories">
                                                <a href="#">Mackbook m1</a>
                                                <a href="#">Mackbook pro</a>
                                                <a href="#">Mackbook air</a>
                                                <a href="#">Mackbook 2015</a>
                                                <a href="#">Mackbook 2020</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Laptop</h4>
                                            <div class="mega_categories">
                                                <a href="#">Razer</a>
                                                <a href="#">Hp Laptop</a>
                                                <a href="#">Dell Notebook</a>
                                                <a href="#">Asus</a>
                                                <a href="#">Lenovo</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Dasktop</h4>
                                            <div class="mega_categories">
                                                <a href="#">Brand Dasktop</a>
                                                <a href="#">All in one pc</a>
                                                <a href="#">Mini PC</a>
                                                <a href="#">Customize PC</a>
                                                <a href="#">Dasktop Accessories</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Monitor</h4>
                                            <div class="mega_categories">
                                                <a href="#">Samsung</a>
                                                <a href="#">Philips</a>
                                                <a href="#">LG</a>
                                                <a href="#">HP</a>
                                                <a href="#">Xiaomi</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single_mega_menu">
                                        <div class="mega_menu_wrap">
                                            <h4>Accessories</h4>
                                            <div class="mega_categories">
                                                <a href="#">Dasktop Ram</a>
                                                <a href="#">Motherboard</a>
                                                <a href="#">SSD Card</a>
                                                <a href="#">Hard disk</a>
                                                <a href="#">Processor</a>
                                            </div>
                                        </div>
                                        <div class="mega_menu_wrap">
                                            <h4>Gaming</h4>
                                            <div class="mega_categories">
                                                <a href="#">Gaming console</a>
                                                <a href="#">Gaming Chair</a>
                                                <a href="#">Gaming Desk</a>
                                                <a href="#">Gaming Controller</a>
                                                <a href="#">Keyboard</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_mega_menu brnd">
                                        <div class="mega_brands">
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                                            </a>
                                            <a href="#" class="mega_brnd_img">
                                                <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="singlecats">
                                <span class="img_wrp">
                                    <i class="las la-mobile"></i>
                                </span>
                                <span class="txt">Mobile</span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="nav_bar flex-grow-1">
                    <li class="withsubs">
                        <a href="index-1.html">Home <span><i class="las la-angle-down"></i></span></a>
                        <ul class="subnav">
                            <li><a href="index-1.html">Home page 1 </a></li>
                            <li><a href="index-2.html">Home page 2</a></li>
                            <li><a href="index-3.html">Home page 3</a></li>
                        </ul>
                    </li>
                    <li class="withsubs">
                        <a href="shop-list.html">Shop <span><i class="las la-angle-down"></i></span></a>
                        <ul class="subnav">
                            <li><a href="shop-list.html">List view </a></li>
                            <li><a href="shop-grid.html">Grid view</a></li>
                            <li><a href="shop-grid-2.html">Grid view 2</a></li>

                            <li><a href="shopping-cart.html">Shopping cart</a></li>
                            <li><a href="product-view.html">Product view</a></li>
                        </ul>
                    </li>
                    <li class="withsubs">
                        <a href="shop-list.html">Pages <span><i class="las la-angle-down"></i></span></a>
                        <div class="subnav py-3 px-2 d-flex gx-4">
                            <div class="single_subnav">
                                <h5 class="text_lg ps-3 mb-2">Others pages</h5>
                                <ul>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>

                                    <li><a href="track-order.html">Track order</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </div>
                            <div class="single_subnav">
                                <h5 class="text_lg ps-3 mb-2">Account pages</h5>
                                <ul>
                                    <li><a href="account.html">My Account</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="shop-grid.html">Forgot password</a></li>
                                </ul>
                            </div>
                            <div class="single_subnav">
                                <h5 class="text_lg ps-3 mb-2">Checkout page</h5>
                                <ul>
                                    <li><a href="shop-list.html">Checkout</a></li>
                                    <li><a href="shop-list.html">Payment</a></li>
                                    <li><a href="shop-list.html">Payment success</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="contact-us.html">contact</a></li>
                    <li class="tophead_items ms-auto">
                        <a href="tel:+18475555555" class="me-0 pe-0"> <span><i class="las la-phone"></i></span>
                            call: +123 456 7890</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- mobile bottom bar -->
    <div class="mobile_bottombar d-block d-lg-none">
        <div class="header_icon">
            <a href="javascript:void(0)" class="icon_wrp text-center open_menu">
                <span class="icon">
                    <i class="las la-bars"></i>
                </span>
                <span class="icon_text">Menu</span>
            </a>
            <a href="javascript:void(0)" class="icon_wrp text-center open_category">
                <span class="icon">
                    <i class="icon-list-ul"></i>
                </span>
                <span class="icon_text">Categories</span>
            </a>
            <a href="javascript:void(0)" class="icon_wrp text-center" id="src_icon">
                <span class="icon">
                    <i class="icon-search-left"></i>
                </span>
                <span class="icon_text">Search</span>
            </a>
            <a href="javascript:void(0)" class="icon_wrp crt text-center" id="openCart">
                <span class="icon">
                    <i class="icon-cart"></i>
                </span>
                <span class="icon_text">Cart</span>
                <span class="pops">8</span>
            </a>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile_menwrap d-lg-none" id="mobile_menwrap">
        <div class="mobile_menu_2">
            <h5 class="mobile_title">
                Menu
                <span class="sidebarclose" id="menuclose">
                    <i class="las la-times"></i>
                </span>
            </h5>
            <ul>
                <li class="withsub">
                    <a href="javascript:void(0)">
                        Home
                    </a>
                    <div class="submn">
                        <a href="index-1.html">Home 1</a>
                        <a href="index-2.html">Home 2</a>
                        <a href="index-3.html">Home 3</a>
                    </div>
                </li>

                <li class="withsub">
                    <a href="javascript:void(0)">
                        Shop
                    </a>
                    <div class="submn">
                        <a href="shop-list.html">List View</a>
                        <a href="shop-grid.html">Grid View</a>
                        <a href="shop-grid-2.html">Grid View 2</a>
                        <a href="wish-list.html">Wishlist</a>
                        <a href="shopping-cart.html">Shopping cart</a>
                        <a href="product-view.html">Product view</a>
                    </div>
                </li>
                <li class="withsub">
                    <a href="javascript:void(0)">
                        My Account
                    </a>
                    <div class="submn">
                        <a href="account.html">My account</a>
                        <a href="login.html">Login</a>
                        <a href="register.html">Register</a>
                        <a href="forgot-password.html">Forgot password</a>
                    </div>
                </li>
                <li class="withsub">
                    <a href="javascript:void(0)">
                        Other pages
                    </a>
                    <div class="submn">
                        <a href="about-us.html">about us</a>
                        <a href="contact-us.html">Contact us</a>
                        <a href="track-order.html">Track order</a>
                        <a href="faq.html">FAQ</a>
                        <a href="404.html">404</a>
                        <a href="checkout.html">Checkout</a>
                        <a href="payment.html">Payment</a>
                        <a href="order-completed.html">Order complete</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--  mobile cart -->
    <div class="mobile_menwrap d-lg-none" id="mobileCart">
        <div class="mobile_cart_wrap d-flex flex-column">
            <h5 class="mobile_title">
                Cart
                <span class="sidebarclose" id="mobileCartClose">
                    <i class="las la-times"></i>
                </span>
            </h5>
            <div class="px-3 py-3 flex-grow-1 d-flex flex-column">
                <div class="cart_droptitle">
                    <h4 class="text_lg">Total 2 Items</h4>
                </div>
                <div class="cartsdrop_wrap">
                    <a href="product-view.html" class="single_cartdrop mb-3">
                        <span class="remove_cart"><i class="las la-times"></i></span>
                        <div class="cartdrop_img">
                            <img loading="lazy" src="assets/images/shoes-5.png" alt="product">
                        </div>
                        <div class="cartdrop_cont">
                            <h5 class="text_lg mb-0 default_link">
                                Men casual shoes
                            </h5>
                            <p class="mb-0 text_xs text_p">x1 <span class="ms-2">$450</span></p>
                        </div>
                    </a>
                    <a href="product-view.html" class="single_cartdrop">
                        <span class="remove_cart"><i class="las la-times"></i></span>
                        <div class="cartdrop_img">
                            <img loading="lazy" src="assets/images/headphone-2.png" alt="product">
                        </div>
                        <div class="cartdrop_cont">
                            <h5 class="text_lg mb-0 default_link">
                                Men casual shoes
                            </h5>
                            <p class="mb-0 text_xs text_p">x1 <span class="ms-2">$450</span></p>
                        </div>
                    </a>
                </div>
                <div class="mt-auto">
                    <div class="total_cartdrop">
                        <h4 class="text_lg text-uppercase mb-0">Sub Total:</h4>
                        <h4 class="text_lg mb-0 ms-2">$980.00</h4>
                    </div>
                    <div class="cartdrop_footer mt-3 d-flex">
                        <a href="shopping-cart.html" class="default_btn w-50 text_xs px-1">View Cart</a>
                        <a href="checkout.html" class="default_btn second ms-3 w-50 text_xs px-1">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile searchbar -->
    <div class="mobile_search_bar">
        <div class="mobile_search_text">
            <p>What you are looking for?</p>
            <span class="close_mbsearch" id="close_mbsearch">
                <i class="las la-times"></i>
            </span>
        </div>
        <form>
            <input type="text" placeholder="search products...">
            <button>
                <i class="icon-search-left"></i>
            </button>
        </form>

        <div class="search_result_product">
            <a href="product-view.html" class="single_sresult_product">
                <div class="sresult_img">
                    <img loading="lazy" src="assets/images/laptop-2.png" alt="product">
                </div>
                <div class="sresult_content">
                    <h4>HP Pavilion 15</h4>
                    <div class="price">
                        <span class="org_price">$45.00</span>
                        <span class="prev_price">$55.45</span>
                    </div>
                </div>
            </a>
            <a href="product-view.html" class="single_sresult_product">
                <div class="sresult_img">
                    <img loading="lazy" src="assets/images/phone-1.png" alt="product">
                </div>
                <div class="sresult_content">
                    <h4>Xiaomi Note 7 Pro</h4>
                    <div class="price">
                        <span class="org_price">$45.00</span>
                        <span class="prev_price">$55.45</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- mobile category -->
    <div class="mobile_menwrap d-lg-none" id="mobile_catwrap">
        <div class="sub_categories">
            <h5 class="mobile_title">
                All categories
                <span class="sidebarclose" id="catclose">
                    <i class="las la-times"></i>
                </span>
            </h5>

            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="las la-shoe-prints"></i>
                </span>
                <span class="txt">Shoes</span>
            </a>

            <div class="singlecats withsub">
                <span class="img_wrp">
                    <i class="las la-male"></i>
                </span>
                <span class="txt">Men</span>
                <span class="wsicon"><i class="las la-angle-right"></i></span>
                <div class="mega_menu">
                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Hot sale</h4>
                            <div class="mega_categories">
                                <a href="#">Hoodies $ Sweatshirts</a>
                                <a href="#">T-Shirt</a>
                                <a href="#">Men’s Sets</a>
                                <a href="#">Jacket</a>
                                <a href="#">Shoes</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Bottoms</h4>
                            <div class="mega_categories">
                                <a href="#">Casual Pants</a>
                                <a href="#">Men’s Sleep & Lounge</a>
                                <a href="#">Jeans</a>
                                <a href="#">Shorts</a>
                                <a href="#">Towel</a>
                            </div>
                        </div>
                    </div>

                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Outerwear $ Jackets</h4>
                            <div class="mega_categories">
                                <a href="#">Jacket</a>
                                <a href="#">Sweaters</a>
                                <a href="#">Casual Faux Leather</a>
                                <a href="#">Parks</a>
                                <a href="#">Jeans</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Underwear & Loun</h4>
                            <div class="mega_categories">
                                <a href="#">Boxes</a>
                                <a href="#">Berifs</a>
                                <a href="#">Long Johns</a>
                                <a href="#">Men’s Sleep & Lounge</a>
                                <a href="#">Parks</a>
                            </div>
                        </div>
                    </div>

                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Accessories</h4>
                            <div class="mega_categories">
                                <a href="#">Scarves</a>
                                <a href="#">Skullies & Beanies</a>
                                <a href="#">Casual Faux Leather</a>
                                <a href="#">Prescription Glasses</a>
                                <a href="#">Belt</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Novelty & Special</h4>
                            <div class="mega_categories">
                                <a href="#">Cosplay Costumes</a>
                                <a href="#">Stage & Dance Wear</a>
                                <a href="#">Exotic Apparel</a>
                                <a href="#">Scarves</a>
                                <a href="#">Men’s Sets</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_mega_menu brnd">
                        <div class="mega_brands">
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="las la-female"></i>
                </span>
                <span class="txt">Women</span>
            </a>
            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="las la-plug"></i>
                </span>
                <span class="txt">Electronisc</span>
            </a>
            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="las la-headphones"></i>
                </span>
                <span class="txt">Headphones</span>
            </a>
            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="icon-watch"></i>
                </span>
                <span class="txt">Watches</span>
            </a>
            <div class="singlecats withsub">
                <span class="img_wrp">
                    <i class="las la-desktop"></i>
                </span>
                <span class="txt">Computer</span>
                <span class="wsicon"><i class="las la-angle-right"></i></span>
                <div class="mega_menu">
                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Macbook</h4>
                            <div class="mega_categories">
                                <a href="#">Mackbook m1</a>
                                <a href="#">Mackbook pro</a>
                                <a href="#">Mackbook air</a>
                                <a href="#">Mackbook 2015</a>
                                <a href="#">Mackbook 2020</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Laptop</h4>
                            <div class="mega_categories">
                                <a href="#">Razer</a>
                                <a href="#">Hp Laptop</a>
                                <a href="#">Dell Notebook</a>
                                <a href="#">Asus</a>
                                <a href="#">Lenovo</a>
                            </div>
                        </div>
                    </div>

                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Dasktop</h4>
                            <div class="mega_categories">
                                <a href="#">Brand Dasktop</a>
                                <a href="#">All in one pc</a>
                                <a href="#">Mini PC</a>
                                <a href="#">Customize PC</a>
                                <a href="#">Dasktop Accessories</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Monitor</h4>
                            <div class="mega_categories">
                                <a href="#">Samsung</a>
                                <a href="#">Philips</a>
                                <a href="#">LG</a>
                                <a href="#">HP</a>
                                <a href="#">Xiaomi</a>
                            </div>
                        </div>
                    </div>

                    <div class="single_mega_menu">
                        <div class="mega_menu_wrap">
                            <h4>Accessories</h4>
                            <div class="mega_categories">
                                <a href="#">Dasktop Ram</a>
                                <a href="#">Motherboard</a>
                                <a href="#">SSD Card</a>
                                <a href="#">Hard disk</a>
                                <a href="#">Processor</a>
                            </div>
                        </div>
                        <div class="mega_menu_wrap">
                            <h4>Gaming</h4>
                            <div class="mega_categories">
                                <a href="#">Gaming console</a>
                                <a href="#">Gaming Chair</a>
                                <a href="#">Gaming Desk</a>
                                <a href="#">Gaming Controller</a>
                                <a href="#">Keyboard</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_mega_menu brnd">
                        <div class="mega_brands">
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                            </a>
                            <a href="#" class="mega_brnd_img">
                                <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="singlecats">
                <span class="img_wrp">
                    <i class="las la-mobile"></i>
                </span>
                <span class="txt">Mobile</span>
            </a>
        </div>
    </div>

    <!-- hero area -->
    <div class="banner_slider">
        <div class="hero_area" style="background-image: url('assets/images/banner-1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn small rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('assets/images/banner-2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('assets/images/banner-3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features area -->
    <section class="features_area  section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row justify-content-center gx-2 gx-md-4">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/delivery-van.svg" alt="icon">

                                </div>
                                <div class="feature_content">
                                    <h4>Free shipping</h4>
                                    <p>Orders over $200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/money-back.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>Money Returns</h4>
                                    <p>30 Days money return</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy" src="assets/images/svg/service-hours.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>24/7 Support</h4>
                                    <p>Customer support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- offer deal -->
    <div class="offer_wrp section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single_offercard">
                        <div class="offertext">
                            <h3 class="offer_pers">30% offer</h3>
                            <h4>Free Shipping</h4>
                            <p>Attractive Natural Furniture</p>
                            <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                        </div>
                        <div class="offerimg">
                            <img loading="lazy" src="assets/images/sofa-1.png" alt="product">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 mt-sm-0">
                    <div class="single_offercard bg_2">
                        <div class="offertext">
                            <h3 class="offer_pers">50% offer</h3>
                            <h4>Flash Sale</h4>
                            <p>Attractive Natural Furniture</p>
                            <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                        </div>
                        <div class="offerimg">
                            <img loading="lazy" src="assets/images/sofa-2.png" alt="product">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- categories -->
    <div class="shop_bycat section_padding_b">
        <div class="container">
            <h2 class="section_title_3">Shop by category</h2>
            <div class="row gx-2 gy-2">
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-1.jpg);">
                        <div class="shopcat_cont">
                            <h4>Bedroom</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-2.jpg);">
                        <div class="shopcat_cont">
                            <h4>Mattresses</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-3.jpg);">
                        <div class="shopcat_cont">
                            <h4>Office</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-4.jpg);">
                        <div class="shopcat_cont">
                            <h4>Outdoor</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-5.jpg);">
                        <div class="shopcat_cont">
                            <h4>Lounges & Sofas</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="#" class="single_shopbycat bg_1"
                        style="background-image: url(assets/images/category-6.jpg);">
                        <div class="shopcat_cont">
                            <h4>Living & Dining</h4>
                            <div class="icon">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- top new arrival -->
    <div class="top_arrival_wrp section_padding_b">
        <div class="container">
            <h2 class="section_title_3">Top new arrival</h2>
            <div class="product_slider_2">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                        <div class="persof">25%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>GUYER Chair</h4>
                        </a>
                        <p>Queen Headboard</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>MADELINE sofa</h4>
                        </a>
                        <p>Fabric Sofa Bed</p>
                        <div class="price mb-1">
                            <span class="org_price">$120.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product8.jpg" alt="product">
                        <div class="persof bg-danger">HOT</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>BIANCO Chair</h4>
                        </a>
                        <p>Fabric Accent Chair</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product10.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>PELAGIA Lounge</h4>
                        </a>
                        <p>Outdoor Modular
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product12.jpg" alt="product">
                        <div class="persof bg-warning">50%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Black ARCHIE</h4>
                        </a>
                        <p>Black Bedside
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$400.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ad banner -->
    <div class="offer_banner_area section_padding_b">
        <div class="container">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset="assets/images/offer-2.jpg">
                    <img loading="lazy" src="assets/images/offer-mobile.jpg" alt="ad">
                </picture>
            </a>
        </div>
    </div>

    <!--  recomended for you  -->
    <div class="recfor_you section_padding_b">
        <div class="container">
            <h2 class="section_title_3">Recomended for you</h2>
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product2.jpg" alt="product">
                            <div class="persof bg-warning">50%</div>
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>PELAGIA Lounge</h4>
                            </a>
                            <p>Outdoor Modular Lounge</p>
                            <div class="price mb-1">
                                <span class="org_price">$449.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(50)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product3.jpg" alt="product">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>AVERY bed</h4>
                            </a>
                            <p>Queen Bed</p>
                            <div class="price mb-1">
                                <span class="org_price">$549.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(52)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product4.jpg" alt="product">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>white bed</h4>
                            </a>
                            <p>king Bed</p>
                            <div class="price mb-1">
                                <span class="org_price">$549.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(52)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                            <div class="persof">25%</div>
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>GUYER Chair</h4>
                            </a>
                            <p>Queen Headboard</p>
                            <div class="price mb-1">
                                <span class="org_price">$45.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(150)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>MADELINE sofa</h4>
                            </a>
                            <p>Fabric Sofa Bed</p>
                            <div class="price mb-1">
                                <span class="org_price">$120.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(150)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product8.jpg" alt="product">
                            <div class="persof bg-danger">HOT</div>
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>BIANCO Chair</h4>
                            </a>
                            <p>Fabric Accent Chair</p>
                            <div class="price mb-1">
                                <span class="org_price">$45.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(150)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product10.jpg" alt="product">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>PELAGIA Lounge</h4>
                            </a>
                            <p>Outdoor Modular Lounge
                            </p>
                            <div class="price mb-1">
                                <span class="org_price">$45.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(150)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single_toparrival">
                        <div class="topariv_img">
                            <img loading="lazy" src="assets/images/product12.jpg" alt="product">
                            <div class="persof bg-warning">50%</div>
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="prod_soh">
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="qk_view open_quickview">
                                    <span><i class="las la-eye"></i></span>
                                    Quick View
                                </div>
                            </div>
                        </div>
                        <div class="topariv_cont">
                            <a href="product-view.html">
                                <h4>Black ARCHIE</h4>
                            </a>
                            <p>Black Bedside
                            </p>
                            <div class="price mb-1">
                                <span class="org_price">$400.00</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count mb-0">(150)</p>
                                </div>
                            </div>
                        </div>
                        <div class="full_atc_btn">
                            <button>
                                <span class="me-1"><i class="icon-cart"></i></span>
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <footer class="white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-md-0">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_logo">
                                <img loading="lazy" src="assets/images/svg/logo.svg" alt="easy shop">
                            </div>
                            <div class="footet_text">
                                <p>Lorem ipsum, or lipsum as it is sometimes kno
                                    wn, is dummy text used in laying out print, gra
                                    phic or web designs the passage.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_newslet">
                                <h4>Newsletter</h4>
                                <form class="footernews_form">
                                    <input type="text" placeholder="Your email address">
                                    <button type="submit" class="default_btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-md-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">My Account</h4>
                                <a href="account-order-history.html">Orders</a>
                                <a href="wish-list.html">Wishlist</a>
                                <a href="track-order.html">Track Order</a>
                                <a href="#">Manage Account</a>
                                <a href="return-order.html">Return Order</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">Information</h4>
                                <a href="about-us.html">About Us</a>
                                <a href="return-policy.html">Return Policy</a>
                                <a href="terms-condition.html">Terms & condition</a>
                                <a href="privacy-policy.html">Privacy Policy</a>
                                <a href="faq.html">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_download">
                        <div class="row">
                            <div class="col-lg-6 col-lg-12">
                                <h4 class="footer_title">Contact</h4>
                                <div class="footer_contact">
                                    <p>
                                        <span class="icn"><i class="las la-map-marker-alt"></i></span>

                                        7895 Dr New Albuquerue, NM 19800, <br> United
                                        States Of America
                                    </p>
                                    <p class="phn">
                                        <span class="icn"><i class="las la-phone"></i></span>
                                        +566 477 256, +566 254 575
                                    </p>
                                    <p class="eml">
                                        <span class="icn"><i class="lar la-envelope"></i></span>
                                        info@domain.com
                                    </p>
                                </div>
                            </div>
                            <div class="footer_social col-lg-6 col-lg-12">
                                <div class="footer_icon d-flex">
                                    <a href="#" class="facebook"><i class="lab la-facebook-f"></i></a>
                                    <a href="#" class="twitter"><i class="lab la-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="lab la-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- copyright -->
    <div class="copyright_wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright_text">© RAFCART - All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <div class="payment_method">
                        <img loading="lazy" src="assets/images/payment-method.png" alt="payment method">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product quick view -->
    <div class="product_quickview">
        <div class="prodquick_wrap position-relative">
            <div class="close_quickview">
                <i class="las la-times"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_view_slider">
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        </div>
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product2.jpg" alt="product">
                        </div>
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product3.jpg" alt="product">
                        </div>
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product4.jpg" alt="product">
                        </div>
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                        </div>
                        <div class="single_viewslider">
                            <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        </div>
                    </div>
                    <div class="product_viewslid_nav">
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        </div>
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product2.jpg" alt="product">
                        </div>
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product3.jpg" alt="product">
                        </div>
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product4.jpg" alt="product">
                        </div>
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                        </div>
                        <div class="single_viewslid_nav">
                            <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product_info_wrapper">
                        <div class="product_base_info">
                            <h1>MEN'S ADIDAS COURTSMASH</h1>
                            <div class="rating">
                                <div class="d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">50 Reviews</p>
                                </div>
                            </div>
                            <div class="product_other_info">
                                <p><span class="text-semibold">Availability:</span><span class="text-green">In
                                        Stock</span></p>
                                <p><span class="text-semibold">Brand:</span>Bata</p>
                                <p><span class="text-semibold">Category:</span>Clothing</p>
                                <p><span class="text-semibold">SKU:</span>BE45VGRT</p>
                            </div>
                            <div class="price mt-3 mb-3 d-flex align-items-center">
                                <span class="prev_price ms-0">$5000.00</span>
                                <span class="org_price ms-2">$4500.00</span>
                                <div class="disc_tag ms-3">-30%</div>
                            </div>
                            <div class="pd_dtails">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem
                                    quaerat....
                                </p>
                            </div>
                            <div class="shop_filter border-bottom-0 pb-0">
                                <div class="size_selector mb-3">
                                    <h5>Size</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="single_size_opt">
                                            <input type="radio" hidden name="size" class="size_inp"
                                                id="size-xs">
                                            <label for="size-xs">XS</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp"
                                                id="size-s">
                                            <label for="size-s">S</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp"
                                                id="size-m" checked>
                                            <label for="size-m">M</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp"
                                                id="size-l">
                                            <label for="size-l">L</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp"
                                                id="size-xl">
                                            <label for="size-xl">XL</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="size_selector color_selector">
                                    <h5>Color:</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="single_size_opt">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-purple">
                                            <label for="color-purple" class="bg-color" data-bs-toggle="tooltip"
                                                title="Rose Red"></label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-red">
                                            <label for="color-red" class="bg-white" data-bs-toggle="tooltip"
                                                title="White"></label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-green" checked>
                                            <label for="color-green" class="bg-dark" data-bs-toggle="tooltip"
                                                title="Black"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_qnty ms-md-auto">
                                <p>Quantity</p>
                                <div class="d-flex align-items-center">
                                    <div class="cart_qnty_btn">
                                        <i class="las la-minus"></i>
                                    </div>
                                    <div class="cart_count">4</div>
                                    <div class="cart_qnty_btn">
                                        <i class="las la-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_buttons">
                            <a href="#" class="default_btn me-sm-3 me-2 px-2 px-lg-4"><i
                                    class="icon-cart me-2"></i> Add to Cart</a>
                            <a href="#" class="default_btn second px-3 px-ms-4"><i
                                    class="icon-heart me-2"></i>
                                Wishlist</a>
                        </div>
                        <div class="share_icons footer_icon d-flex">
                            <a href="#"><i class="lab la-facebook-f"></i></a>
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popup -->
    <div class="popup_wrap">
        <div class="popup_container">
            <div class="popup_content">
                <div class="close_popup">
                    <i class="las la-times"></i>
                </div>
                <h2 class="text-uppercase">Get <span class="text-color">30%</span> off</h2>
                <p class="mb-3">
                    Subscribe to the newsletter to receive updates about new products.
                </p>
                <form class="subscribe_form">
                    <input type="text" placeholder="Your email address">
                    <button type="submit" class="default_btn">Subscribe</button>
                </form>
                <div class="mt-4">
                    <div class="custom_check check_2 d-flex align-items-center justify-content-center">
                        <input type="checkbox" class="check_inp" hidden="" id="save-default">
                        <label for="save-default">Do not show this again</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- all js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


</html>
