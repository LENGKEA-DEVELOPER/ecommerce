<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=cart::all();
    return view('admin.order.index',compact('order'));
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
        $request->validate=([
            'product'=>'required',
            'customer'=>'required',
            'gmail'=>'required',
            'telephone'=>'required',
            'price'=>'required',
            'address'=>'required',
            'image'=>'required'

         ]);
         $input=$request->all();
         cart::create($input);
         return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
return view('admin.order.show',compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        $request->validate([
            'product'=>'required',
            'customer'=>'required',
            'gmail'=>'required',
            'telephon'=>'required',
            'image'=>'required',

                       ]);
                       $input = $request->all();
                       if($image=$request->file('image')){
                       $part='img/';
                       $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                       $image->move($part,$imagelogo);
                       $input['image']="$imagelogo";
                       }

                   cart::create($input);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
