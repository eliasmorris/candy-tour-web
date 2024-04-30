<?php

namespace App\Http\Controllers\Admin;
use App\Models\SlideImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide_imgs = SlideImage::all();
        return view('admin.slides.index', compact('slide_imgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slide_name' => 'required',
            'slide_image' => 'image|nullable|max:1999',
            'head_caption' => 'nullable',
            'slide_caption' => 'nullable',
        ]);
        if (request()->hasFile('slide_image')) {
            
            $request =request(); 
            $file = $request->file('slide_image');
            //Get filename with extension
            $filenameWithExt = $request->file('slide_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/slide_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.jpg';
        }

        $slide_imgs = new SlideImage;
        $slide_imgs->slide_name = $request->input('slide_name');
        $slide_imgs->head_caption = $request->input('head_caption');
        $slide_imgs->slide_caption = $request->input('slide_caption');
        $slide_imgs->status = $request->input('slide_status');
        $slide_imgs->slide_image = $fileNamestoStore;
        
        $slide_imgs->save();

        if ($slide_imgs) {
            return response()->json([
                'message' => 'successifully Slide image info saved',
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
        $slide_imgs = SlideImage::findOrFail($id);
        return response()->json([
           'slide_image'=> $slide_imgs,
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
        $slide_imgs = SlideImage::find($id);
        $slide_imgs->delete();

        if ($slide_imgs) {
            return redirect()->back()->with('message', 'successifully deleted slide image info');
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }
}
