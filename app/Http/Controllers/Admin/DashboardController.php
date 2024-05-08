<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlideImage;
use App\Models\AboutInfo;
use App\Models\LogoInfo;
use App\Models\MemberInfo;
use App\Models\PackageInfo;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{

    //function to update logo info
    public function updatelogo(Request $request)
    {

        $logoInfos = LogoInfo::findOrFail($request->logoid);
        $logoInfos->logo_name = $request->input('logo_namee');
        $logoInfos->status = $request->input('logo_statuss');

        if ($request->hasFile('logo_imagee')) {
            $destination_path = 'storage/uploads/service_images/' . $logoInfos->logo_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('logo_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('logo_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/logo_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noIm
            age.jpg';
        }

        if ($request->hasFile('logo_imagee')) {

            $logoInfos->logo_image = $fileNamestoStore;
        }

        $logoInfos->update();

        if ($logoInfos) {
            return response()->json([
                'message' => 'successifully logo Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //function to upade logo status only
    public function updatelogostatus(Request $request)
    {
        $logoInfos = LogoInfo::findOrFail($request->logo_id);
        $logoInfos->status = $request->status;
        $logoInfos->save();
        if ($logoInfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //function to update image slide status only
    public function updateslidestatus(Request $request)
    {
        $slide_img = SlideImage::findOrFail($request->slideImg_Id);
        $slide_img->status = $request->status;
        $slide_img->save();
        if ($slide_img) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //function to update slides images
    public function updateslideimages(Request $request)
    {

        $slide_imgs = SlideImage::findOrFail($request->slideImageId);
        $slide_imgs->slide_name =  $request->input('slide_name');
        $slide_imgs->head_caption =  $request->input('head_caption');
        $slide_imgs->slide_caption =  $request->input('slide_caption');
        $slide_imgs->status =  $request->input('slide_status');

        if ($request->hasFile('slide_image')) {
            $destination_path = 'storage/uploads/slide_images/' . $slide_imgs->slide_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('slide_image');
            //Get filename with extension
            $filenameWithExt = $request->file('slide_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/slide_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.jpg';
        }

        if ($request->hasFile('slide_image')) {

            $slide_imgs->slide_image = $fileNamestoStore;
        }


        $slide_imgs->update();

        if ($slide_imgs) {
            return response()->json([
                'message' => 'successifully Updated slide image info',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to Update About page info
    public function updateaboutus(Request $request)
    {

        $aboutinfos = AboutInfo::findOrFail($request->aboutPageid);
        $aboutinfos->tittle =  $request->input('page_tittlee');
        $aboutinfos->description =  $request->input('about_descriptionn');
        $aboutinfos->status =  $request->input('about_statuss');

        if ($request->hasFile('about_imagee')) {
            $destination_path = 'storage/uploads/about_images/' . $aboutinfos->about_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('about_imagee');
            //Get filename with extension
            $filenameWithExt = $file->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/about_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.jpg';
        }

        if ($request->hasFile('about_imagee')) {

            $aboutinfos->about_image = $fileNamestoStore;
        }


        $aboutinfos->update();

        if ($aboutinfos) {
            return response()->json([
                'message' => 'successifully Updated slide image info',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update About status only
    public function updateaboutstatus(Request $request)
    {

        $aboutinfos = AboutInfo::findOrFail($request->aboutusid);
        $aboutinfos->status = $request->status;
        $aboutinfos->save();
        if ($aboutinfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update Service info
    public function updateserviceinfo(Request $request)
    {

        $serviceInfos = ServiceModel::findOrFail($request->serviceid);
        $serviceInfos->service_name = $request->input('service_namee');
        $serviceInfos->service_description = $request->input('service_descriptionn');
        $serviceInfos->status = $request->input('service_statuss');

        if ($request->hasFile('service_imagee')) {
            $destination_path = 'storage/uploads/service_images/' . $serviceInfos->service_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('service_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('service_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/service_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noIm
            age.jpg';
        }

        if ($request->hasFile('service_imagee')) {

            $serviceInfos->service_image = $fileNamestoStore;
        }

        $serviceInfos->update();

        if ($serviceInfos) {
            return response()->json([
                'message' => 'successifully service Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update Service status only
    public function updateservicestatus(Request $request)
    {

        $serviceInfos = ServiceModel::findOrFail($request->service_id);
        $serviceInfos->status = $request->status;
        $serviceInfos->save();
        if ($serviceInfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to Upadte Package info
    public function updatepackageinfo(Request $request)
    {

        $packageInfos = PackageInfo::findOrFail($request->packageid);
        $packageInfos->packagename = $request->input('package_namee');
        $packageInfos->packagetrip = $request->input('tripp');
        $packageInfos->packagecost = $request->input('package_costt');
        $packageInfos->description = $request->input('descriptionn');
        $packageInfos->status = $request->input('package_statuss');

        if ($request->hasFile('package_imagee')) {
            $destination_path = 'storage/uploads/package_images/' . $packageInfos->packageimage;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('package_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('package_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/package_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.jpg';
        }

        if ($request->hasFile('package_imagee')) {

            $packageInfos->packageimage = $fileNamestoStore;
        }

        $packageInfos->update();

        if ($packageInfos) {
            return response()->json([
                'message' => 'Successifully Package Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update package status only
    public function updatepackagestatus(Request $request)
    {
        $packageInfos = PackageInfo::findOrFail($request->package_id);
        $packageInfos->status = $request->status;
        $packageInfos->save();
        if ($packageInfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update team member info
    public function updatememberinfo(Request $request)
    {
        $memberInfos = MemberInfo::findOrFail($request->member_id);
        $memberInfos->fullname = $request->input('fullnamee');
        $memberInfos->phone = $request->input('phonenumberr');
        $memberInfos->email = $request->input('emaill');
        $memberInfos->designation = $request->input('designationn');
        $memberInfos->social_media = $request->input('socialmediaa');
        $memberInfos->social_media1 = $request->input('socialmedia11');
        $memberInfos->description = $request->input('descriptionn');
        $memberInfos->status = $request->input('member_statuss');

        if ($request->hasFile('member_imagee')) {
            $destination_path = 'storage/uploads/member_images/' .$memberInfos->member_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('member_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('member_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/member_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.jpg';
        }

        if ($request->hasFile('member_imagee')) {

            $memberInfos->member_image = $fileNamestoStore;
        }

        $memberInfos->update();

        if ($memberInfos) {
            return response()->json([
                'message' => 'Successifully member info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update team member status only.
    public function updatememberstatus(Request $request){
        $memberInfos = PackageInfo::findOrFail($request->member_id);
        $memberInfos->status = $request->status;
        $memberInfos->save();
        if ($memberInfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }
}
