<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settingontroller extends Controller
{
    //
    public function index()
    {
        return view('page.backend.seeting.index');
    }

    public function store(Request $request)
    {
        setting($request->all())->save();
        toastr()->success('Data Insert Sucssesflly');
        return redirect()->back();
    }
}
