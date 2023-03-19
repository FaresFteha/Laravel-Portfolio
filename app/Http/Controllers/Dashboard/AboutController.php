<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Traits\AttachFilesTrait;

class AboutController extends Controller
{
    //Trait for Attachment Files
    use AttachFilesTrait;

    //return one column in database
    public function index()
    {
        $About = About::firstwhere('id', 1);
        return view('page.backend.About.about', compact('About'));
    } //end return one column in database

    public function update(Request $request)
    {
        try {


            $about = About::firstwhere('id', 1);
            $phone = Phone::firstwhere('id', 1);

            $about->job_title = $request->job_title;
            $about->descripsion = $request->descripsion;
            $about->name = $request->name;
            $about->age = $request->age;
            $about->email = $request->email;
            $about->phone_id = $phone->id;
            $about->education = $request->education;
            $about->freelance = $request->freelance;

            //Insert Photo About
            if ($request->hasFile('photo')) {
                $this->deleteFilephoto($about->photo);
                $photo = $request->file('photo')->getClientOriginalName();
                $about->photo = $photo;
                $this->uploadFile($request, 'photo', 'About_Photo');
            }

            //Insert CV About
            if ($request->hasFile('cv')) {
                $this->deleteFile($about->cv );
                $FILE = $request->file('cv')->getClientOriginalName();
                $about->cv = $FILE;
                $this->uploadFile($request, 'cv', 'CV');
            }

            $about->save();
            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
