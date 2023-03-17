<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product = Product::get();


        return view('admin.product', compact('Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = Category::whereNull('category_id')->get();
        return view('admin.add-products' , compact('category'));

    }

    public function product_detail(){
        return view('admin.product-detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
       $data = array(
        'product_name'=>$request->product_name,
        'product_category'=>$request->product_category,
        'product_price'=>$request->product_price,
        'product_description'=>$request->product_description,

       );



       if($request->hasFile('product_image')){
        $images = $request->file('product_image');
        $fileNames = time().'.'.$images->getClientOriginalExtension();
        $images->move(public_path('/upload'), $fileNames);

        $data['product_image']= $fileNames;

     }



       $create = Product::create($data);
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product , Request  $request)
    {
        //
        $d = $request->id;
        $editproduct = Product::findOrFail($d);

        return view('admin.product-edit', compact('editproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $id = $request->id;
        $data = array(
            'product_name'=>$request->product_name,
            'product_category'=>$request->product_category,
            'product_price'=>$request->product_price,
            'product_description'=>$request->product_description,

           );

           if($request->hasFile('product_image')){
            $images = $request->file('product_image');
            $fileNames = time().'.'.$images->getClientOriginalExtension();
            $images->move(public_path('/upload'), $fileNames);

            $data['product_image']= $fileNames;

         }
         $datas = Product::find($id);
         $create = Product::update($datas);
         return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $data = $request->id;
        $d_data = Product::find($data);
        $d_data->delete($d_data);
        return back();

    }
}
