<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\HeroIcon;
use App\Models\HeroSection;
use App\Models\HeroToolTech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;

class HeroSectionController extends Controller
{
    //Trait for Attachment Files
    use AttachFilesTrait;

    //Hero-Section 
    public function HeroSection()
    {
        $collection = HeroSection::all();
        $HeroSection['HeroSection'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.Hero-Section.Hero-Section', $HeroSection);
    } //end Hero-Section

    //Hero-Section-updating 
    public function HeroSection_updating(Request $request)
    {

        try {
            $info = $request->except('_token', '_method', 'photo');
            foreach ($info as $key => $value) {
                HeroSection::where('key', $key)->update(['value' => $value]);
            }

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo')->getClientOriginalName();
                HeroSection::where('key', 'photo')->update(['value' => $photo]);
                $this->uploadFile($request, 'photo', 'Personal_Photo');
            }
            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    } //endHero-Section-updating 

    //---------------------------------------------------

    //Hero-Icon-Section
    public function HeroIconSection()
    {
        $collection = HeroIcon::all();
        $HeroIcon['HeroIcon'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.Hero-Section.Hero-Icon-Section', $HeroIcon);
    } //end Hero-Icon-Section

    //Hero-Icon-Section-updating
    public function HeroIconSection_updating(Request $request)
    {
        try {
            $info = $request->except('_token', '_method');
            foreach ($info as $key => $value) {
                HeroIcon::where('key', $key)->update(['value' => $value]);
            }

            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    } //end Hero-Icon-Section-updating 
    //---------------------------------------------------

    //Hero-Tool-Tech-Section
    public function HeroToolTechSection()
    {
        $collection = HeroToolTech::all();
        $ToolTech['ToolTech'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.Hero-Section.Hero-Tool-Tech-Section', $ToolTech);
    } //end Hero-Tool-Tech-Section

    //Hero-Tool-Tech-Section-updating 
    public function HeroToolTechSection_updating(Request $request)
    {
        try {
            $info = $request->except('_token', '_method');
            foreach ($info as $key => $value) {
                HeroToolTech::where('key', $key)->update(['value' => $value]);
            }

            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    } //end Hero-Tool-Tech-Section-updating 
}
