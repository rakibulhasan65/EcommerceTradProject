<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Backend\SiteSetting;
use App\Models\Backend\BusinessPlan;
use App\Models\Backend\Service;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $banner = Banner::where('status', 1)->get();
        $businessPlan = BusinessPlan::where('status', 1)->get();
        $servicesData = Service::where('status', 1)->get();
        return view('frontend.pages.index', compact('banner', 'businessPlan', 'servicesData'));
    }
    
    public function about(){
        return view('frontend.pages.about');
    }

    public function service(){
        return view('frontend.pages.service');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }
    
    public function contact(){
        return view('frontend.pages.contact');
    }
}
