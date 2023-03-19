<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function index()
    {
        $collection = Skill::all();
        $SkillSection['SkillSection'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.About.skills' , $SkillSection);
    }

    //Skill-Section-updating 
    public function SkillSection_updating(Request $request)
    {
        try {
            $Skill = $request->except('_token', '_method');
            foreach ($Skill as $key => $value) {
                Skill::where('key', $key)->update(['value' => $value]);
            }

            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    } //end Skill-Section-updating 
}
