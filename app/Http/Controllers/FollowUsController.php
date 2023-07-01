<?php

namespace App\Http\Controllers;

use App\Models\follow_us;
use Illuminate\Http\Request;

class FollowUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $follow_us=follow_us::all();
        return view('admin.follow_us.index',compact('follow_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.follow_us.create');
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
        'url'=>'required',
        'image'=>'required'
            ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $part='img/';
            $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($part,$imagelogo);
            $input['image']="$imagelogo";
        }
    follow_us::create($input);
        return redirect()->route('follow_us.index');
       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\follow_us  $follow_us
     * @return \Illuminate\Http\Response
     */
    public function show(follow_us $follow_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\follow_us  $follow_us
     * @return \Illuminate\Http\Response
     */
    public function edit(follow_us $follow_us)
    {
    return view('admin.follow_us.edit',compact('follow_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\follow_us  $follow_us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, follow_us $follow_us)
    {
        $request->validate([
            'name'=>'required',
            'url'=>'required',
            'image'=>'required'
                ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $part='img/';
            $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($part,$imagelogo);
            $input['image']="$imagelogo";
        }
    $follow_us->update($input);
        return redirect()->route('follow_us.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\follow_us  $follow_us
     * @return \Illuminate\Http\Response
     */
    public function destroy(follow_us $follow_us)
    {
        $follow_us->delete();
        return redirect()->route('follow_us.index');
    }
}
