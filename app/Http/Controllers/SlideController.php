<?php

namespace App\Http\Controllers;

use App\Models\slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide=slide::all();
        return view('admin.slide.index',compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.slide.create');
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
            'status'=>'required',
            'image'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                    $part='img/';
                    $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                    $image->move($part,$imagelogo);
                    $input['image']="$imagelogo";
                }
            slide::create($input);
                return redirect()->route('slide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(slide $slide)
    {
        return view('admin.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slide $slide)
    {
        $request->validate([
            'status'=>'required',
            'image'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                    $part='img/';
                    $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                    $image->move($part,$imagelogo);
                    $input['image']="$imagelogo";
                }
            $slide->update($input);
                return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(slide $slide)
    {
        $slide->delete();
        return redirect()->route('slide.index');

    }
}
