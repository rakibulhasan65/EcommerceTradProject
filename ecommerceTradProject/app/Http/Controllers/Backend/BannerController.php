<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('backend.pages.banners', compact('banners'));
    }


    public function create()
    {
    }

    public function store(Request $request)
    {
        if ($request->image) {
            $image = $request->file('image');
            $fileName = time() . '-' . rand() .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/Banner/' . $fileName);
            Image::make($image)->save($location);
        }
        $addBanner = new Banner;
        $addBanner->title = $request->title;
        $addBanner->themeBtn = $request->themeBtn;
        $addBanner->btnLink = $request->btnLink;
        $addBanner->image = $fileName;
        $addBanner->description = $request->description;
        $addBanner->status = $request->status;
        $addBanner->save();
        $notification = array(
            'message' => 'Banner Add Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $editBanner = Banner::find($id);
        $editBanner->title = $request->title;
        $editBanner->themeBtn = $request->themeBtn;
        $editBanner->btnLink = $request->btnLink;
        $editBanner->description = $request->description;
        $editBanner->status = $request->status;
        if ($request->image) {
            if (file_exists(public_path('images/Banner/' . $request->old_image))) {
                @unlink(public_path('images/Banner/' . $request->old_image));
            }
            $image = $request->file('image');
            $fileName = time() . '-' . rand() . '-' . $request->title . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/Banner/' . $fileName);
            Image::make($image)->save($location);
            $editBanner->image = $fileName;
        }
        $editBanner->update();
        $notification = array(
            'message' => 'Banner Successfully Update',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $delete = Banner::find($id);
        if (file_exists(public_path('images/Banner/' . $delete->image))) {
            @unlink(public_path('images/Banner/' . $delete->image));
        }
        $delete->delete();
        $notification = array(
            'message' => 'Completely Deleted Item !',
            'alert-type' => 'error',
        );
        return redirect()->back()->with($notification);
    }
}
