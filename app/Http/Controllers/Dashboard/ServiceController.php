<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::paginate(10);
        return view('page.backend.Service-Section.index', compact('services'));
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
    public function store(ServiceRequest $request)
    {
        //
        $services = new Service();
       // $services->title = $request->title;
        $services->icone = $request->icone;
        $services->service_name = $request->service_name;
        $services->descripsion = $request->descripsion;
        $services->save();
        toastr()->success('Done, Insert Sucssufly.');
        return back();
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
    public function update(ServiceRequest $request)
    {
        //
        $services = Service::findorFail($request->id);
       // $services->title = $request->title;
        $services->icone = $request->icone;
        $services->service_name = $request->service_name;
        $services->descripsion = $request->descripsion;
        $services->save();
        toastr()->success('Done, Update Sucssufly.');
        return back();
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
        Service::destroy($request->id);
        toastr()->success('Done, Delete Sucssufly.');
        return back();
    }
}
