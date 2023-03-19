<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    //return one column in database
    public function index()
    {
        $phone = Phone::firstwhere('id', 1);
        // dd( $phone);
        return view('page.backend.About.phone', compact('phone'));
    } //end return one column in database

    //Update one column in database
    public function update(Request $request)
    {
        $phone = Phone::firstwhere('id', 1);
        $phone->update($request->all());
        toastr()->success('Done, Insert Sucssufly.');
        return redirect()->route('Phone');
    } //end Update one column in database
}
