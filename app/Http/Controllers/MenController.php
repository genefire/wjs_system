<?php

namespace wjs\Http\Controllers;

use wjs\Men;
use DB;
use Illuminate\Http\Request;

class MenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mens = DB::table('mens')->get(); 
        return view('admin.men',compact('mens'));   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'middle_initial' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'number' => 'required|numeric', 
            'address' => 'required',
            'sponsor' => 'required'
        ]);

        $saveMen = $request->all();
        Men::create($saveMen);

        return redirect()->route('menpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \wjs\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function show(Men $men)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \wjs\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function edit(Men $men)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \wjs\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Men $men)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \wjs\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function destroy(Men $men)
    {
        //
    }
}
