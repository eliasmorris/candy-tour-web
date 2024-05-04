<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogoInfo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logoInfos = LogoInfo::all();
        return view('admin.logo.index', compact('logoInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'logo_name' => 'required',
            'logo_image' => 'image|nullable|max:1999',
            'logo_status' => 'required',
        ]);
        if (request()->hasFile('logo_image')) {
            
            $request =request(); 
            $file = $request->file('logo_image');
            //Get filename with extension
            $filenameWithExt = $request->file('logo_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/logo_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

            $logoInfos = new LogoInfo;
            $logoInfos->logo_name = $request->input('logo_name');
            $logoInfos->status = $request->input('logo_status');
            $logoInfos->logo_image = $fileNamestoStore;
            
            $logoInfos->save();

        if ($logoInfos) {
            return response()->json([
                'message' => 'successifully logo info saved',
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
        $logoInfos = LogoInfo::findOrFail($id);
     return response()->json([
        'logo_Infos'=> $logoInfos
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
        $logoInfos = LogoInfo::find($id);
        $logoInfos->delete();

        if ($logoInfos) {
            return response(redirect()->back()->with('message', 'successifully deleted logo info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
