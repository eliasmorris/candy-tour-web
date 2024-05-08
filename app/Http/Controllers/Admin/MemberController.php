<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberInfo;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberInfos = MemberInfo::all();
        return view('admin.members.index', compact('memberInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'socialmedia' => 'required',
            'description' => 'required',
            'member_image' => 'image|nullable|max:1999',
            'member_status' => 'required',
        ]);
        if (request()->hasFile('member_image')) {
            
            $request =request(); 
            $file = $request->file('member_image');
            //Get filename with extension
            $filenameWithExt = $request->file('member_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/member_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

            $memberInfos = new MemberInfo;
            $memberInfos->fullname = $request->input('fullname');
            $memberInfos->phone = $request->input('phonenumber');
            $memberInfos->email = $request->input('email');
            $memberInfos->designation = $request->input('designation');
            $memberInfos->social_media = $request->input('socialmedia');
            $memberInfos->social_media1 = $request->input('socialmedia1');
            $memberInfos->description = $request->input('description');
            $memberInfos->status = $request->input('member_status');
            $memberInfos->member_image = $fileNamestoStore;
            
            $memberInfos->save();

        if ($memberInfos) {
            return response()->json([
                'message' => 'successifully team member info saved',
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
        $memberInfos = MemberInfo::findOrFail($id);
        return response()->json([
        'memberinfo'=> $memberInfos
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
        $memberInfos = MemberInfo::find($id);
        $memberInfos->delete();

        if ($memberInfos) {
            return response(redirect()->back()->with('message', 'successifully deleted member info'));
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
