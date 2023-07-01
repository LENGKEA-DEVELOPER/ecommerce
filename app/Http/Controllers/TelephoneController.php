<?php

namespace App\Http\Controllers;

use App\Models\telephone;
use Illuminate\Http\Request;

class TelephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telephone= telephone::all();
    return view('admin.telephone.index',compact('telephone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('admin.telephone.create');
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
            'telephone'=>'required'
        ]);
        $input=$request->all();
        telephone::create($input);
        return redirect()->route('telephone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function show(telephone $telephone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function edit(telephone $telephone)
    {
        return view('admin.telephone.edit',compact('telephone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, telephone $telephone)
    {
        $request->validate([
            'telephone'=>'required'
        ]);
        $input=$request->all();
        $telephone->update($input);
        return redirect()->route('telephone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function destroy(telephone $telephone)
    {
    $telephone->delete();
    return redirect()->route('telephone.index');
    }
}
