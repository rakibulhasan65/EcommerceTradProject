<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\BusinessPlan;
use Image;
use File;

class BusinessPlanController extends Controller
{
   
    public function index()
    {
        $businessPlan = BusinessPlan::all();
        return view('backend.pages.businessPlan',compact('businessPlan'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $businessPlan = new BusinessPlan;
        $businessPlan->planName         = $request->planName;
        if($request->planImage){
            $planImage = $request->file('planImage');
            $customPlanImage = time().'-'.rand().'.'.$planImage->getClientOriginalExtension();
            $location = public_path('images/BusinessPlan/'.$customPlanImage);
            Image::make($planImage)->resize(360,270)->save($location);
            $businessPlan->planImage        = $customPlanImage;
        }
        $businessPlan->planDescription  = $request->planDescription;
        $businessPlan->status           = $request->status;
        $businessPlan->save();
        $notification = array(
            'message' => 'Business Plan Added Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        

    }


    public function update(Request $request, $id)
    {
        $businessPlan = BusinessPlan::find($id);
        $businessPlan->planName = $request->planName;
        if($request->planImage){
            $planImage = $request->file('planImage');
            $customPlanImage = time().'-'.rand().'.'.$planImage->getClientOriginalExtension();
            $location = public_path('images/BusinessPlan/'.$customPlanImage);
            Image::make($planImage)->resize(360,270)->save($location);
            if(File::exists(public_path('images/BusinessPlan/'.$businessPlan->planImage))){
                File::delete(public_path('images/BusinessPlan/'.$businessPlan->planImage));
            }
            $businessPlan->planImage = $customPlanImage;
        }
        $businessPlan->planDescription  = $request->planDescription;
        $businessPlan->status           = $request->status;
        $businessPlan->update();
        $notification = array(
            'message' => 'Business Plan Update Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function destroy($id)
    {
        $businessPlanDelete = BusinessPlan::find($id);
        if(File::exists(public_path('images/BusinessPlan/'.$businessPlanDelete->planImage))){
            File::delete(public_path('images/BusinessPlan/'.$businessPlanDelete->planImage)); 
        }
        $businessPlanDelete->delete();
        $notification = array(
            'message' => 'Business Plan Successfully Deleted!',
            'alert-type' => 'danger',
        );
        return redirect()->back()->with($notification);
    }
}
