<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationInfo;
use App\Models\PackageInfo;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packageInfos = PackageInfo::all();
        //$packageInfos = DestinationInfo::find(1)->packageinfo;
        //$packageInfos = PackageInfo::find(1)->destination;
        return view('admin.packages.index', compact('packageInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'destionation' => 'required',
            'package_name' => 'required',
            'trip' => 'required',
            'package_cost' => 'required',
            'description' => 'required',
            'package_image' => 'image|nullable|max:1999',
            'package_status' => 'required',
        ]);
        if (request()->hasFile('package_image')) {
            
            $request =request(); 
            $file = $request->file('package_image');
            //Get filename with extension
            $filenameWithExt = $request->file('package_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/package_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

            $packageInfos = new PackageInfo;
            $packageInfos->destination_info_id = $request->input('destionation');
            $packageInfos->packagename = $request->input('package_name');
            $packageInfos->packagetrip = $request->input('trip');
            $packageInfos->packagecost = $request->input('package_cost');
            $packageInfos->description = $request->input('description');
            $packageInfos->status = $request->input('package_status');
            $packageInfos->packageimage = $fileNamestoStore;
            
            $packageInfos->save();

        if ($packageInfos) {
            return response()->json([
                'message' => 'Successifully Package info saved',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $packageInfos = PackageInfo::findOrFail($id);
     return response()->json([
        'packageinfo'=> $packageInfos
     ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $packageInfos = PackageInfo::find($id);
        $packageInfos->delete();

        if ($packageInfos) {
            return response(redirect()->back()->with('message', 'successifully deleted package info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
