<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo= logo::all();
        return view('admin.logo.index',compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo.create');
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
'image'=>'required',
'status'=>'required'
    ]);
    $input = $request->all();
    if($image=$request->file('image')){
        $part='img/';
        $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
        $image->move($part,$imagelogo);
        $input['image']="$imagelogo";
    }
$logo=logo::create($input);
    return redirect()->route('logo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(logo $logo)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(logo $logo)
    {
        return view('admin.logo.edit',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logo $logo)
    {
        $request->validate([
            'image'=>'required',
            'status'=>'required'
                ]);
                $input = $request->all();
                if($image=$request->file('image')){
                    $part='img/';
                    $imagelogo= date('YmdHis').'.'.$image->getClientOriginalExtension();
                    $image->move($part,$imagelogo);
                    $input['image']="$imagelogo";
                }
            $logo->update($input);
                return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        $logo->delete();
        return redirect()->route('logo.index');
    }
}
