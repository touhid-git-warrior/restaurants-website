<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Category;
use App\Models\NavBar;
use App\Models\AboutImage;
use App\Models\AboutDesc;
use App\Models\MenuTitle;
use App\Models\BookingSystem;
use App\Models\ChefsTitle;
use App\Models\Cafes;
use App\Models\ContactSetting;
use App\Models\FooterSettings;
use App\Models\Seo;
use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\Slider;
use Illuminate\Http\Request;
class FrontController extends Controller
{
    public function Index(){

        $iplocation = $_SERVER['REMOTE_ADDR'];


        Visitor::insert([

            'ip_address'=>$iplocation,
            'created_at'=>Carbon::now(),


        ]);


        $about_image = AboutImage::get();
        $navbar = NavBar::get();
        $aboutdesc = AboutDesc::first();
        $menuTitle = MenuTitle::first();
        $menu_lunch = Category::find(1);
        $menu_dinner = Category::find(2);
        $lunchs = Menu::where('category_id',1)->get();
        $dinner = Menu::where('category_id',2)->get();
        $bookingSystem = BookingSystem::first();
        $chef_title =  ChefsTitle::first();
        $chef = Cafes::get();
        $contactSetting = ContactSetting::first();
        $footer = FooterSettings::first();
        $seo = Seo::first();
        $slider = Slider::get();

        return view('frontend.index',compact('lunchs','dinner','navbar','about_image','aboutdesc','menu_lunch','menu_dinner','menuTitle','bookingSystem','chef_title','chef','contactSetting','footer','seo','slider'));
    }

    public function UserContact(Request $request){
        Contact::insert([

            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'status'=>1,
        ]);

         $notification = [
            'message' => 'Message Sussfully Send',
            'type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
