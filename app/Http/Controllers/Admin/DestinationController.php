<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationInfo;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinationInfos = DestinationInfo::all();
        return view('admin.destination.index', compact('destinationInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinatio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'destination_name' => 'required',
            'tittle' => 'required',
            'description' => 'required',
            'destination_image' => 'image|nullable|max:1999',
            'destination_status' => 'required',
        ]);
        if (request()->hasFile('destination_image')) {
            
            $request =request(); 
            $file = $request->file('destination_image');
            //Get filename with extension
            $filenameWithExt = $request->file('destination_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/destination_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

            $destinationInfos = new DestinationInfo;
            $destinationInfos->destination_name = $request->input('destination_name');
            $destinationInfos->tittle = $request->input('tittle');
            $destinationInfos->description = $request->input('description');
            $destinationInfos->status = $request->input('destination_status');
            $destinationInfos->destination_image = $fileNamestoStore;
            
            $destinationInfos->save();

        if ($destinationInfos) {
            return response()->json([
                'message' => 'successifully destination info saved',
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
        $destinationInfos = DestinationInfo::findOrFail($id);
     return response()->json([
        'destinationinfo'=> $destinationInfos
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
        $destinationInfos = DestinationInfo::find($id);
        $destinationInfos->delete();

        if ($destinationInfos) {
            return response(redirect()->back()->with('message', 'successifully deleted destination info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
