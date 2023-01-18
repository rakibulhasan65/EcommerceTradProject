<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\SiteSetting;
use Image;
use File;
class SiteSettingController extends Controller
{

    public function index()
    {
        $settingData = SiteSetting::first();
        return view('backend/pages/siteSetting',compact('settingData'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return response()->json($request);


    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $siteSetting = SiteSetting::find($id);
        $siteSetting->siteTitle = $request->siteTitle;
        // Top Header Image  
            if($request->headLogo){
            $headLogo = $request->file('headLogo');
            $topHerderLogo = time().'-'.rand().'.'.$headLogo->getClientOriginalExtension();
            $location = public_path('images/siteImage/'.$topHerderLogo);
            Image::make($headLogo)->resize(183,51)->save($location);
                //  Delete File Directory For Image 
                if(File::exists(public_path('images/siteImage/'.$siteSetting->headLogo))){
                    File::delete(public_path('images/siteImage/'.$siteSetting->headLogo)); 
                    }
                $siteSetting->headLogo  = $topHerderLogo;
            }
            // Navbar Logo
            if($request->navLogo){
                $navLogo = $request->file('navLogo');
                $navCustomLogo = time().'-'.rand().'.'.$navLogo->getClientOriginalExtension();
                $location = public_path('images/siteImage/'.$navCustomLogo);
                Image::make($navLogo)->resize(150,150)->save($location);
                    //  Delete File Directory For Image 
                    if(File::exists(public_path('images/siteImage/'.$siteSetting->navLogo))){
                        File::delete(public_path('images/siteImage/'.$siteSetting->navLogo)); 
                        }
                    $siteSetting->navLogo  = $navCustomLogo;
                }
        $siteSetting->contact   = $request->contact;
        $siteSetting->email     = $request->email;
        $siteSetting->address   = $request->address;
        $siteSetting->update();
        return back();
    }
    public function destroy($id)
    {
        //
    }
}
