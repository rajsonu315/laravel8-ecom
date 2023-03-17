<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        // $password = Hash::make('admin@123');
        // dd($password);


        return view('admin.login');
    }

    public function makelogin(Request $request){
        $data = array(
            'email'=> $request->email,
            'password'=>$request->password,

        );

        if(Auth::attempt($data)){
          return redirect()->route('admin.dashboard');
        }else{
             return back()->withErrors(['message'=> 'inot login']);
        }


    }

    public function logout(){
        Auth::logout();
         return redirect()->route('admin.login');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function Profile(){
        return view('admin.profile');
    }





    public function locked(){
        return view('admin.locked');
    }



    public function product_cart(){
        return view('admin.product-cart');
    }

    public function product_checkout(){
        return view('admin.product-checkout');
    }






    public function product_orders(){
        return view('admin.product-orders');
    }


}
