<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comix;

class ComixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comixes=comix::paginate(10);


        return view("comix.index", compact('comixes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('comix.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $holding=$request->all();

        $new_request=new comix();
        $new_request->title=$holding["title"];
        $new_request->description=$holding["description"];
        $new_request->price=$holding["price"];
        $new_request->date=$holding["sale_date"];
        $new_request->type=$holding["type"];
        $new_request->save();

        return redirect()->route('comix.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array_comix=comix::findorFail($id);

        return view('comix.show',compact('array_comix'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
