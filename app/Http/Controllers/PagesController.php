<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\BookingInfo;
use App\Models\PackageInfo;
use App\Models\SlideImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function homePage(){

        $slideImages = SlideImage::all();
        $packages = PackageInfo::orderBy('id', 'desc')->paginate(3);
        return view('index', compact(['slideImages', 'packages']));

    }
    
    public function aboutPage(){
        return view('pages.about');
    }

    public function servicePage(){
        
        return view('pages.services');
    }
    public function packagePage(){

        return view('pages.package');
    }

    public function teammemberPage(){

        return view('pages.team_member');
    }

    public function testimonialPage(){

        return view('pages.testimonial');
    }

    public function faqPage(){

        return view('pages.faq');
    }

    public function blogPage(){

        return view('pages.blog');
    }

    public function contactPage(){

        return view('pages.contact');
    }

    public function packageView($id){
        
        $packageviewpictures = PackageInfo::orderBy('id', 'desc')->paginate(3);
        $packagescost = PackageInfo::where('id', $id)->get();
        return view('pages.packages.index', compact(['packagescost', 'packageviewpictures']));
    }

    public function storebookinginfo(Request $request){

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'mailfrom' => 'required|email',
            'phoneNumber' => 'required|digits:10|numeric',
            'startdate' => 'required',
            'enddate' => 'required',
            'packagecost' => 'required',
            'vistornumber' => 'required',
        ]);
    
        
        $input = $request->all();
    
        BookingInfo::create($input);
    
        //Send mail to admin
        if ($this->isOnline()) {
            $mail_data = [
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'mailfrom' => $request->mailfrom,
                'phoneNumber' => $request->phoneNumber,
                'startdate' => $request->startdate,
                'enddate' => $request->enddate,
                'packagecost' => $request->packagecost,
                'vistornumber' => $request->vistornumber,
                'mailto' => 'seventcentl@gmail.com',
            ];
    
            Mail::send('sendmail', $mail_data, function($msg) use($mail_data){
                $msg->to($mail_data['mailto']);
                $msg->from($mail_data['mailfrom']);
                $msg->subject($mail_data['packagecost']);
            } );
    
            return redirect()->back()->with(['status' => 'Thanks for booking with us!']);
    
        }else{
             
            return redirect()->back()->with(['status' => 'Not connected with internet']);
        } 
    }

    public function isOnline($site = "https://www.youtube.com/"){
        if (@fopen($site, 'r')) {
            return true;
        }else{
            return false;
        }
    }
}
