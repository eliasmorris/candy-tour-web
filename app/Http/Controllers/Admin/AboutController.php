<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutInfo;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutinfos = AboutInfo::all();
        return view('admin.about.index', compact('aboutinfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'page_tittle' => 'required',
            'about_description' => 'required',
            'about_image' =>'required',
            'about_image.*' =>'image|mimes:png,jpg,gif,jpeg'
        ]);

        if($request->hasFile('about_image')){
            foreach($request->about_image as $image)
            {
                //Get filename with extension
                $imageName = $image->getClientOriginalName();
                //Get file name
                $filename = pathinfo($imageName, PATHINFO_FILENAME);
                //File Extension
                $imageExte = $image->getClientOriginalExtension();
                
                $fileNamestoStore = $filename. '_'. time() . '.' . $imageExte;
                // $newName = uniqid("",true).".".$imageExte;
                $image->move("storage/uploads/about_images",$fileNamestoStore);
            }
        }

        $aboutinfos = new AboutInfo;
        $aboutinfos->tittle = $request->input('page_tittle');
        $aboutinfos->description = $request->input('about_description');
        $aboutinfos->status = $request->input('about_status');
        $aboutinfos->about_image = $fileNamestoStore;
        
        $aboutinfos->save();

        if ($aboutinfos) {
            return response()->json([
                'message' => 'successifully About page info saved',
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
        $aboutinfos = AboutInfo::findOrFail($id);
        return response()->json([
           'aboutinfo'=> $aboutinfos,
           ]
        );
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
        $aboutinfos = AboutInfo::find($id);
        $aboutinfos->delete();

        if ($aboutinfos) {
            return response(redirect()->back()->with('message', 'successifully deleted About info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
