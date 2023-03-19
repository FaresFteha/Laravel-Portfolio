<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Traits\AttachFilesTrait;

class WorkController extends Controller
{
    //Trait for Attachment Files
    use AttachFilesTrait;

    // Work-Section
    public function index()
    {
        $collection = Work::all();
        $WorkSection['WorkSection'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.Service-Section.work', $WorkSection);
    } //end Work-Section

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
        try {
            $info = $request->except('_token', '_method', 'photo');
            foreach ($info as $key => $value) {
                Work::where('key', $key)->update(['value' => $value]);
            }

            if ($request->hasFile('photo')) {
                $this->deleteWorkphoto($request->photo);
                $photo = $request->file('photo')->getClientOriginalName();
                Work::where('key', 'photo')->update([
                    'value' => $photo
                ]);
                $this->uploadFile($request, 'photo', 'Work');
            }
            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
