<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceInfos = ServiceModel::all();
        return view('admin.services.index', compact('serviceInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'service_name' => 'required',
            'service_description' => 'required',
            'service_image' => 'image|nullable|max:1999',
            'service_status' => 'required',
        ]);
        if (request()->hasFile('service_image')) {
            
            $request =request(); 
            $file = $request->file('service_image');
            //Get filename with extension
            $filenameWithExt = $request->file('service_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/service_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

            $serviceInfos = new ServiceModel;
            $serviceInfos->service_name = $request->input('service_name');
            $serviceInfos->service_description = $request->input('service_description');
            $serviceInfos->status = $request->input('service_status');
            $serviceInfos->service_image = $fileNamestoStore;
            
            $serviceInfos->save();

        if ($serviceInfos) {
            return response()->json([
                'message' => 'successifully guest info saved',
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
        $serviceInfos = ServiceModel::findOrFail($id);
     return response()->json([
        'service_infos'=> $serviceInfos
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
        $serviceInfos = ServiceModel::find($id);
        $serviceInfos->delete();

        if ($serviceInfos) {
            return response(redirect()->back()->with('message', 'successifully deleted service info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
