<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HeroIcon;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Communication;
use App\Models\HeroToolTech;
use App\Models\Intro;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Work;

class HeroSectionController extends Controller
{
    //
    public function getData()
    {
        $collection = HeroSection::all();
        $data['HeroSection'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $collection = HeroIcon::all();
        $data['HeroIcon'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $collection = HeroToolTech::all();
        $data['ToolTech'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $data['Intro'] = Intro::all()
        ->take(6);

        $data['About']= About::firstwhere('id' , 1);
        

        $collection = Skill::all();
        $data['Skill'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $data['Portfolio']= Portfolio::all();

        $data['Service']= Service::all();

        $collection = Work::all();

        $data['Work'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $data['Testimonial']= Testimonial::all();

        $data['Blog1']= Blog::firstwhere('id' , 1);
        $data['Blogs']= Blog::where('id' , '!=' , 1)->get()->take(4);


        $collection = Communication::all();
        $data['Communication'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        
        return view('layouts.frontend.master', $data);
    }


    public function download($filename)
    {
        return response()->download(public_path('Attachments/CV/'.$filename));
    }
}

