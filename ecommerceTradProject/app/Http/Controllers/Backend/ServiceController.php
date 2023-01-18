<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Service;
use Image;
use File;

class ServiceController extends Controller
{

    public function index()
    {
        $servicesData = Service::all();
        return view('backend.pages.service', compact('servicesData'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return response()->json($request);
        $serviceStore = new Service;
        $serviceStore->ServiceName     = $request->ServiceName;
        $serviceStore->serviceIcon     = $request->serviceIcon;
        $serviceStore->SortDescription = $request->SortDescription;
        $serviceStore->LongDescription = $request->LongDescription;
        $serviceStore->status          = $request->status;
        $serviceStore->save();
        $notification = array(
            'message' => 'Services Successfully Added',
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
        //
    }

    public function update(Request $request, $id)
    {
        $serviceUpdate = Service::find($id);
        $serviceUpdate->ServiceName     = $request->ServiceName;
        $serviceUpdate->serviceIcon     = $request->serviceIcon;
        $serviceUpdate->SortDescription = $request->SortDescription;
        $serviceUpdate->LongDescription = $request->LongDescription;
        $serviceUpdate->status          = $request->status;
        $serviceUpdate->update();
        $notification = array(
            'message' => 'Services Successfully Update',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $serviceDelete = Service::find($id);
        $serviceDelete->delete();
        $notification = array(
            'message' => 'Services Successfully Deleted!',
            'alert-type' => 'danger',
        );
        return redirect()->back()->with($notification);
    }
}
