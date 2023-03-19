<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;

class BlogController extends Controller
{

    //Trait for Attachment Files
    use AttachFilesTrait;
    public function index()
    {
        //
        $Blog = Blog::get();
        return view('page.backend.Blog-section.index', compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Category = Categorie::get();
        return view('page.backend.Blog-section.Blog-page.create', compact('Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        // $data['tags'] = implode(",", $request->tags);
        // $Blog->category_id = json_encode($request->category_id);

        $Blog = new Blog();
        $Blog->title = $request->title;
        $Blog->descripsion = $request->descripsion;
        $Blog->category_id = $request->category_id;
        $Blog->coade_use = $request->coade_use;
        $Blog->created_at = Carbon::now()->toDateTimeString();
        $Blog->updated_at = Carbon::now()->toDateTimeString();
        //Insert Photo About
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->getClientOriginalName();
            $Blog->photo = $photo;
            $this->uploadFile($request, 'photo', 'Blog_Photo');
        }
        //dd( $Blog);
        $Blog->save();
        toastr()->success('Done, Insert Sucssufly.');
        return redirect()->route('Blog.index');
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
        $blogs = Blog::findorfail($id);
        $Category = Categorie::get();
        return view('page.backend.Blog-section.Blog-page.edit', compact('blogs' , 'Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request)
    {
        //

        $Blog = Blog::findOrFail($request->id);
        $Blog->title = $request->title;
        $Blog->descripsion = $request->descripsion;
        $Blog->category_id = $request->category_id;
        $Blog->coade_use = $request->coade_use;
        $Blog->created_at = Carbon::now()->toDateTimeString();
        $Blog->updated_at = Carbon::now()->toDateTimeString();
        //Insert Photo About
        if ($request->hasFile('photo')) {
            $this->deleteBlogphoto($request->photo);
            $photo = $request->file('photo')->getClientOriginalName();
            $Blog->photo = $photo;
            $this->uploadFile($request, 'photo', 'Blog_Photo');
        }
        $Blog->save();
        toastr()->success('Done, Update Sucssufly.');
        return redirect()->route('Blog.index');
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
        $this->deleteBlogphoto($request->photo);
        Blog::destroy($request->id);
        toastr()->success('Done, Delete Sucssufly.');
        return redirect()->route('Blog.index');
    }
}
