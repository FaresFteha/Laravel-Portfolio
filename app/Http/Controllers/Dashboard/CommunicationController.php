<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use App\Models\Contact;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $collection = Communication::all();
        $Communications['Communications'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('page.backend.Contanct-Section.communication', $Communications);
    }


    public function update(Request $request)
    {
        try {
            $info = $request->except('_token', '_method');
            foreach ($info as $key => $value) {
                Communication::where('key', $key)->update(['value' => $value]);
            }

            toastr()->success('Done, Updating Sucssufly.');
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function Contact_render()
    {

        $Contact = Contact::paginate(10);
        return view('page.backend.Contanct-Section.index', compact('Contact'));
    }
}
