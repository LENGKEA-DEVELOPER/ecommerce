<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\phone;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.product.index');
    }
    public function phone()
    {
        $phone_acticle=phone::where('category','=','1')->paginate(10);
        return view('products.product.phone',compact('phone_acticle'));
    }
    public function laptop()
    {
        $laptop_acticle=phone::where('category','=','2')->paginate(10);
        return view('products.product.laptop',compact('laptop_acticle'));
    }
    public function watch()
    {
        $watch_acticle=phone::where('category','=','3')->paginate(10);
        return view('products.product.watch',compact('watch_acticle'));
    }
    //
    //brand
    public function brand_phone(Request $request,$brand)
    {

$brand_phone=phone::where('brand','=',"$brand")->where('category','=','1')->paginate(10);
        return view('products.product.brand_phone',compact('brand_phone'));

    }
    public function brand_laptop(Request $request,$brand)
    {

$brand_laptop=phone::where('brand','=',"$brand")->where('category','=','2')->paginate(10);
        return view('products.product.brand_laptop',compact('brand_laptop'));

    }
    public function brand_watch(Request $request,$brand)
    {

$brand_watch=phone::where('brand','=',"$brand")->where('category','=','3')->paginate(10);
        return view('products.product.brand_watch',compact('brand_watch'));

    }
    public function brand_allproduct(Request $request,$brand)
    {
        $brand_name=phone::where('brand','=',"$brand")->limit(1)->get();
        $brand_all=phone::where('brand','=',"$brand")->paginate(10);
        return view('products.product.all_brand',compact('brand_all','brand_name'));

    }
    public function search(Request $request){
        $name= $request->search;
        $product_search = phone::where("name","like","%$name%")->get();
    return view('products.product.search',compact('product_search'));
    }
    public function product_contact(){
        return view('products.product.contact');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }
    public function cart(menu $cart)
    {
    return view('products.product.cart',compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
}
