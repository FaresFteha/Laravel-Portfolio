<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class IntroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $intro = Intro::all();
        return view('page.backend.Intro-Section.index' , compact('intro'));
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
        //
        $validated = $request->validate([
            'icon' => 'required',
            'name' => 'required|max:50|unique:intros',
            'descripsion' => 'required',
        ]);
        $intro = new Intro();
        $intro->icon = $request->icon;
        $intro->name = $request->name;
        $intro->descripsion = $request->descripsion;
        $intro->save();
        toastr()->success('Done, Insert Sucssufly.');
        return redirect()->route('Intro.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        //
     
        $validated = $request->validate([
            'icon' => 'required',
            'name'=> 'required',
            'descripsion' => 'required',
        ]);
        
        $intro = Intro::findOrFail($request->id);
        $intro->icon = $request->icon;
        $intro->name = $request->name;
        $intro->descripsion = $request->descripsion;
        $intro->save();
        toastr()->success('Done, Update Sucssufly.');
        return redirect()->route('Intro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Intro::destroy($request->id);
        toastr()->success('Done, Delete Sucssufly.');
        return redirect()->route('Intro.index');
    }
}
