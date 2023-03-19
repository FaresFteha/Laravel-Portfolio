<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use App\Http\Traits\AttachFilesTrait;

class PortfolioController extends Controller
{
    //Trait for Attachment Files
    use AttachFilesTrait;

    public function index()
    {
        //
        $portfolio = Portfolio::paginate(10);;
        return view('page.backend.Portfolio.index', compact('portfolio'));
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
    public function store(PortfolioRequest $request)
    {
        //
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->descripsion = $request->descripsion;
        $portfolio->type = $request->type;
        $portfolio->duration = $request->duration;
        //Insert Photo About
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->getClientOriginalName();
            $portfolio->photo = $photo;
            $this->uploadFile($request, 'photo', 'Portfolio_Photo');
        }
        $portfolio->save();
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
    public function update(PortfolioRequest $request)
    {
        //
        $portfolio =  Portfolio::findorFail($request->id);
        $portfolio->title = $request->title;
        $portfolio->descripsion = $request->descripsion;
        $portfolio->type = $request->type;
        $portfolio->duration = $request->duration;

        //Insert Photo About
        if ($request->hasFile('photo')) {
            $this->deletePortfoliophoto($portfolio->photo);
            $photo = $request->file('photo')->getClientOriginalName();
            $portfolio->photo = $photo;
            $this->uploadFile($request, 'photo', 'Portfolio_Photo');
        }

        $portfolio->save();
        toastr()->success('Done, Insert Sucssufly.');
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
        $this->deletePortfoliophoto($request->photo);
        Portfolio::destroy($request->id);
        toastr()->success('Done, Delete Sucssufly.');
        return back();
    }
}
