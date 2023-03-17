<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){

        $category = Category::where('status','1')->get();


        return view('frant.home',compact('category'));
    }

    public function login(){
        return view('frant.login');
    }

    public function register(){
        return view('frant.register');
    }

    public function account(){
        return view('frant.account');
    }




    public function checkout(){
        return view('frant.checkout');
    }




    public function account_manage_address(){
        return view('frant.account-manage-address');
    }


    public function account_my_reviews(){
        return view('frant.account-my-reviews');
    }


    public function account_order_cancel(){
        return view('frant.account-order-cancel');
    }


    public function account_order_details(){
        return view('frant.account-order-details');
    }


    public function account_order_history(){
        return view('frant.account-order-history');
    }



    public function account_profile_info(){
        return view('frant.account-profile-info');
    }


    public function account_review_details(){
        return view('frant.account-review-details');
    }

    public function forgot_password(){
        return view('frant.forgot-password');
    }




    public function order_completed(){
        return view('frant.order-completed');
    }



    public function payment(){
        return view('frant.payment');
    }



    public function product_view(){
        return view('frant.product-view');
    }



    public function shop_grid(){

        $category = Category::where('status','1')->get();

        return view('frant.shop-grid', compact('category'));
    }


    public function shopping_cart(){
        return view('frant.shopping-cart');
    }



    public function wish_list(){
        return view('frant.wish-list');
    }





}
