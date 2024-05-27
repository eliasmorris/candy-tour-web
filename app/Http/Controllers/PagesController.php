<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\AboutInfo;
use App\Models\BookingInfo;
use App\Models\LogoInfo;
use App\Models\MemberInfo;
use App\Models\PackageInfo;
use App\Models\ServiceModel;
use App\Models\SlideImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function homePage(){

        $logoInfos = LogoInfo::where('status', 1)->get();
        $slideImages = SlideImage::where('status', 1)->get();
        $packages = PackageInfo::where('status', 1)->get();
        $serviceinfos = ServiceModel::where('status', 1)->get();
        $memberInfos = MemberInfo::where('status', 1)->get();
        return view('index', compact(['logoInfos','slideImages', 'packages','serviceinfos','memberInfos']));

    }

    public function readmorepackage($id){
        $logoInfos = LogoInfo::where('status', 1)->get();
        $package = PackageInfo::find($id);
        $slideImages = SlideImage::all();
        $serviceinfos = ServiceModel::where('status', 1)->get();
        return view('readmore', compact(['logoInfos','slideImages', 'package','serviceinfos']));
    }

    public function viewmember($id){
        
        $logoInfos = LogoInfo::where('status', 1)->get();
        $memberInfos = MemberInfo::find($id);
        return view('pages.members.index', compact(['memberInfos', 'logoInfos']));
    }
    
    public function aboutPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        $aboutusInfos = AboutInfo::where('status', 1)->get();
        return view('pages.about', compact(['logoInfos', 'aboutusInfos']));
    }

    public function servicePage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        $serviceinfos = ServiceModel::where('status', 1)->get();
        return view('pages.services', compact('logoInfos','serviceinfos'));
    }
    public function packagePage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        $packages = PackageInfo::where('status', 1)->get();
        return view('pages.package', compact('logoInfos','packages'));
    }

    public function teammemberPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        return view('pages.team_member', compact('logoInfos'));
    }

    public function testimonialPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        return view('pages.testimonial', compact('logoInfos'));
    }

    public function faqPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        return view('pages.faq',compact('logoInfos'));
    }

    public function blogPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        return view('pages.blog', compact('logoInfos'));
    }

    public function contactPage(){
        $logoInfos = LogoInfo::where('status', 1)->get();
        return view('pages.contact', compact('logoInfos'));
    }

    public function packageView($id){
        $logoInfos = LogoInfo::where('status', 1)->get();
        $packageviewpictures = PackageInfo::where('id', $id)->orderBy('id', 'desc')->paginate(3);
        $packagescost = PackageInfo::where('id', $id)->get();
        return view('pages.packages.index', compact(['logoInfos','packagescost', 'packageviewpictures']));
    }

    public function storebookinginfo(Request $request){

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'mailfrom' => 'required|email',
            'phoneNumber' => 'required|digits:10|numeric',
            'startdate' => 'required',
            'enddate' => 'required',
            'packagename' => 'required',
            'packagecost' => 'required',
            'vistornumber' => 'required',
            'totalcost' => 'required'
            
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
                'packagename' => $request->packagename,
                'packagecost' => $request->packagecost,
                'vistornumber' => $request->vistornumber,
                'totalcost' => $request->totalcost,
                'mailto' => 'seventcentl@gmail.com',
            ];
    
            Mail::send('sendmail', $mail_data, function($msg) use($mail_data){
                $msg->to($mail_data['mailto']);
                $msg->from($mail_data['mailfrom']);
                $msg->subject($mail_data['packagename']);
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
