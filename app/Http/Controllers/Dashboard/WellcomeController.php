<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    //
    public function index(){
        return view('page.backend.index');
    }
}
