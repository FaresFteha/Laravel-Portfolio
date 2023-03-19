<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Traits\AttachFilesTrait;

class TestimonialController extends Controller
{
    //Trait for Attachment Files
    use AttachFilesTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('page.backend.Testimonial-section.index', compact('testimonials'));
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
    public function store(TestimonialRequest $request)
    {
        //
        $Testimonial = new Testimonial();
        $Testimonial->review = $request->review;
        $Testimonial->title_job = $request->title_job;
        $Testimonial->name = $request->name;
        //Insert Photo About
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->getClientOriginalName();
            $Testimonial->photo = $photo;
            $this->uploadFile($request, 'photo', 'Testimonial_Photo');
        }
        $Testimonial->save();
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
    public function update(TestimonialRequest $request)
    {

        $Testimonial = Testimonial::findorfail($request->id);
        $Testimonial->review = $request->review;
        $Testimonial->title_job = $request->title_job;
        $Testimonial->name = $request->name;
        //Insert Photo About
        if ($request->hasFile('photo')) {
            $this->deleteTestimonialphoto($request->photo);
            $photo = $request->file('photo')->getClientOriginalName();
            $Testimonial->photo = $photo;
            $this->uploadFile($request, 'photo', 'Testimonial_Photo');
        }
        $Testimonial->save();
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
        $this->deleteTestimonialphoto($request->photo);
        Testimonial::destroy($request->id);
        toastr()->success('Done, Delete Sucssufly.');
        return back();
    }
}
