<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone=phone::where('category','=','1')->paginate(10);
        return view('admin.phone.index',compact('phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
     'name'=>'required',
     'price'=>'required',
     'color'=>'required',
     'storage'=>'required',
     'ram'=>'required',
     'chip'=>'required',
     'screen'=>'required',
     'camera'=>'required',
     'camera2'=>'required',
     'battery'=>'required',
     'battery_type'=>'required',
     'resolution'=>'required',
     'category'=>'required',
     'promotion'=>'required',
     'image'=>'required',
     'brand'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                $part='img/';
                $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                $image->move($part,$imagelogo);
                $input['image']="$imagelogo";
                }

            phone::create($input);
 return redirect()->route('phone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(phone $phone)
    {
        return view('admin.phone.show',compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(phone $phone)
    {
        return view('admin.phone.edit',compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phone $phone)
    {
        $request->validate([
            'name'=>'required',
            'name'=>'required',
            'price'=>'required',
            'color'=>'required',
            'storage'=>'required',
            'ram'=>'required',
            'chip'=>'required',
            'screen'=>'required',
            'camera'=>'required',
            'camera2'=>'required',
            'battery'=>'required',
            'battery_type'=>'required',
            'resolution'=>'required',
            'category'=>'required',
            'promotion'=>'required',
            'image'=>'required',
            'brand'=>'required'
                       ]);
                       $input = $request->all();
                       if($image=$request->file('image')){
                       $part='img/';
                       $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                       $image->move($part,$imagelogo);
                       $input['image']="$imagelogo";
                       }
                   $phone->update($input);
        return redirect()->route('phone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(phone $phone)
    {
        $phone->delete();
        return redirect()->route('phone.index');
    }
    //laptop
    public function laptop_index()
    {
        $laptop=phone::where('category','=','2')->paginate(10);
        return view('admin.laptop.index',compact('laptop'));
    }

    public function laptop_create()
    {
        return view('admin.laptop.create');
    }
    public function laptop_store(Request $request)
    {
        $request->validate([
     'name'=>'required',
     'price'=>'required',
     'color'=>'required',
     'storage'=>'required',
     'ram'=>'required',
     'chip'=>'required',
     'screen'=>'required',
     'camera'=>'required',
     'camera2'=>'required',
     'battery'=>'required',
     'battery_type'=>'required',
     'resolution'=>'required',
     'category'=>'required',
     'promotion'=>'required',
     'image'=>'required',
     'brand'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                $part='img/';
                $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                $image->move($part,$imagelogo);
                $input['image']="$imagelogo";
                }

            phone::create($input);
 return redirect()->route('laptop.index');
    }
    public function laptop_show(phone $laptop)
    {
        return view('admin.laptop.show',compact('laptop'));
    }
    public function laptop_edit(phone $laptop)
    {
        return view('admin.laptop.edit',compact('laptop'));
    }
    public function laptop_update(Request $request, phone $laptop)
    {
        $request->validate([
            'name'=>'required',
            'name'=>'required',
            'price'=>'required',
            'color'=>'required',
            'storage'=>'required',
            'ram'=>'required',
            'chip'=>'required',
            'screen'=>'required',
            'camera'=>'required',
            'camera2'=>'required',
            'battery'=>'required',
            'battery_type'=>'required',
            'resolution'=>'required',
            'category'=>'required',
            'promotion'=>'required',
            'image'=>'required',
            'brand'=>'required'
                       ]);
                       $input = $request->all();
                       if($image=$request->file('image')){
                       $part='img/';
                       $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                       $image->move($part,$imagelogo);
                       $input['image']="$imagelogo";
                       }
                   $laptop->update($input);
        return redirect()->route('laptop.index');
    }
    public function laptop_destroy(phone $laptop)
    {
        $laptop->delete();
        return redirect()->route('laptop.index');
    }
    //watch
    public function watch_index()
    {
     $watch=phone::where('category','=','3')->paginate(10);
        return view('admin.watch.index',compact('watch'));
    }
    public function watch_create()
    {
        return view('admin.watch.create');
    }
    public function watch_store(Request $request)
    {
        $request->validate([
     'name'=>'required',
     'price'=>'required',
     'color'=>'required',
     'storage'=>'required',
     'ram'=>'required',
     'chip'=>'required',
     'screen'=>'required',
     'camera'=>'required',
     'camera2'=>'required',
     'battery'=>'required',
     'battery_type'=>'required',
     'resolution'=>'required',
     'category'=>'required',
     'promotion'=>'required',
     'image'=>'required',
     'brand'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                $part='img/';
                $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                $image->move($part,$imagelogo);
                $input['image']="$imagelogo";
                }

            phone::create($input);
 return redirect()->route('watch.index');
    }
public function watch_show(phone $watch)
    {
        return view('admin.watch.show',compact('watch'));
    }
    public function watch_edit(phone $watch)
    {
        return view('admin.watch.edit',compact('watch'));
    }
    public function watch_update(Request $request, phone $watch)
    {
        $request->validate([
            'name'=>'required',
            'name'=>'required',
            'price'=>'required',
            'color'=>'required',
            'storage'=>'required',
            'ram'=>'required',
            'chip'=>'required',
            'screen'=>'required',
            'camera'=>'required',
            'camera2'=>'required',
            'battery'=>'required',
            'battery_type'=>'required',
            'resolution'=>'required',
            'category'=>'required',
            'promotion'=>'required',
            'image'=>'required',
            'brand'=>'required'
                       ]);
                       $input = $request->all();
                       if($image=$request->file('image')){
                       $part='img/';
                       $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                       $image->move($part,$imagelogo);
                       $input['image']="$imagelogo";
                       }
                   $watch->update($input);
        return redirect()->route('watch.index');
    }
    public function watch_destroy(phone $watch)
    {
        $watch->delete();
        return redirect()->route('watch.index');
    }
    public function detail(Request $request,$id)
    {
        $id = $request->id;
        $all_detail=phone::where("id","=","$id")->get();
        $relate=phone::where("id","!=","$id")->OrderBy('viewer','DESC')->limit(5)->get();
        $viewer_id = phone::findOrFail($id);
        $viewer_id->viewer =$viewer_id->viewer+1;
        $viewer_id->save();
        return view('products.product.detail',compact('all_detail','relate'));
    }
}
