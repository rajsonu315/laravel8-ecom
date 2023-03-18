<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){

        $category = Category::where('status','1')->get();
        $product = Product::get();



        return view('frant.home',compact('category','product'));
    }

    public function login(){

        $category = Category::where('status','1')->get();

        return view('frant.login',compact('category'));
    }

    public function register(){
        $category = Category::where('status','1')->get();

        return view('frant.register',compact('category'));
    }

    public function account(){
        $category = Category::where('status','1')->get();

        return view('frant.account',compact('category'));
    }




    public function checkout(){
        $category = Category::where('status','1')->get();

        return view('frant.checkout',compact('category'));
    }




    public function account_manage_address(){
        $category = Category::where('status','1')->get();

        return view('frant.account-manage-address',compact('category'));
    }


    public function account_my_reviews(){
        $category = Category::where('status','1')->get();

        return view('frant.account-my-reviews',compact('category'));
    }


    public function account_order_cancel(){
        $category = Category::where('status','1')->get();

        return view('frant.account-order-cancel',compact('category'));
    }


    public function account_order_details(){
        $category = Category::where('status','1')->get();

        return view('frant.account-order-details',compact('category'));
    }


    public function account_order_history(){
        $category = Category::where('status','1')->get();

        return view('frant.account-order-history',compact('category'));
    }



    public function account_profile_info(){
        $category = Category::where('status','1')->get();

        return view('frant.account-profile-info',compact('category'));
    }


    public function account_review_details(){
        $category = Category::where('status','1')->get();

        return view('frant.account-review-details',compact('category'));
    }

    public function forgot_password(){
        $category = Category::where('status','1')->get();

        return view('frant.forgot-password',compact('category'));
    }




    public function order_completed(){
        $category = Category::where('status','1')->get();

        return view('frant.order-completed',compact('category'));
    }



    public function payment(){
        $category = Category::where('status','1')->get();

        return view('frant.payment',compact('category'));
    }



    public function product_view(){
        $category = Category::where('status','1')->get();

        return view('frant.product-view',compact('category'));
    }



    public function shop_grid(Request  $request , $id){

        $product_get_id = Category::with('Product')->find($request->id);

        dd($product_get_id);



        $category = Category::where('status','1')->get();

        return view('frant.shop-grid', compact('category', 'product_get_id'));


    }


    public function shopping_cart(){
        $category = Category::where('status','1')->get();

        return view('frant.shopping-cart',compact('category'));
    }



    public function wish_list(){
        $category = Category::where('status','1')->get();

        return view('frant.wish-list',compact('category'));
    }





}
