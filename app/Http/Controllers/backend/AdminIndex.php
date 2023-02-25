<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\AdminAuth;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Category;
use App\Models\NavBar;
use App\Models\Logo;
use App\Models\BookTableNav;
use App\Models\About;
use App\Models\AboutImage;
use App\Models\AboutDesc;
use App\Models\MenuTitle;
use App\Models\BookingSystem;
use App\Models\ChefsTitle;
use App\Models\Cafes;
use App\Models\ContactSetting;
use App\Models\FooterSettings;
use App\Models\Slider;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
class AdminIndex extends Controller
{

     public function indexView(){

        return view('admin.index');
    }

    public function RagestrationView(){

        return view('admin.ragestration');
            

    }

    public function LoginView(){
        if(Session::has('adminId')){

            return redirect()->route('admin.view');

        }
        return view('admin.login');
    }

    public function SignupStore(Request $request){

         $request->validate([

        'fullname' => 'required',
        'email' => 'required',
        'password' => 'required',
        'cpassword' => 'required',


      ]);




        $name = $request->fullname;
        $email = $request->email;
        $pass = $request->password;

        $emailchk = AdminAuth::where('email',$email)->count();

        if($emailchk > 0){
            $notification = [

                'msg'=>1

            ];
            return redirect()->back()->with($notification);
        }


        if($pass !=  $request->cpassword){
            $notification = [

                'mss'=>2

            ];
            return redirect()->back()->with($notification);
        }

       $auth =  AdminAuth::insert([

            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'password'=>Hash::make($pass),


        ]);

       if($auth){

        $notification = [

            'message' => 'Signup Sussfully',
            'type' => 'success'

        ];

        return redirect()->route('admin.login')->with($notification);


       }else{

        $notification = [

            'message' => 'Something Wrong',
            'type' => 'error'

        ];

        return redirect()->back()->with($notification);

       }

        

    }


    public function LoginCheck(Request $request){


        $request->validate([
        'email' => 'required',
        'password' => 'required',
      ]);

        
        $email = $request->email;
        $pass = $request->password;

       $loginchk =  AdminAuth::where('email',$email)->first();

        if($loginchk == null){

            $notification = [

                'message' => 'Email Dosnt Match',
                'type' => 'error',

            ];

            return redirect()->back()->with($notification);

        }else{

        if(password_verify($request->password, $loginchk->password)){

            Session::put('adminId',$loginchk->id);

            return redirect()->route('admin.view');

            }else{

                $notification = [

                'message' => 'Password Dosnt Match',
                'type' => 'error',

            ];

            return redirect()->back()->with($notification);


            }


        }


    }

    public function AdminLogout(){

        Session::forget('adminId');

        return redirect()->route('admin.login');

    }

    public function AdminOrders(){

        $orders = Order::orderBy('id','DESC')->get();

        return view('admin.order.order_view',compact('orders'));
    }

    public function AdminOrderDelete($id){

        Order::find($id)->delete();


            $notification = [

                'message' => 'Order Delete Sussfully',
                'type' => 'success',

            ];

            return redirect()->back()->with($notification);

    }

    public function AdminUserMessage(){


         $contacts = Contact::orderBy('id','DESC')->get();

         return view('admin.contact.contact_view',compact('contacts'));
    }

    public function AdminMessageDelete($id){


         Contact::find($id)->delete();


        $notification = [

                'message' => 'User Message Delete Sussfully',
                'type' => 'success',

            ];

            return redirect()->back()->with($notification);

    }
    public function MenuView(){

        $categorys = Category::latest()->get();

        $menus =  Menu::with('Category')->latest()->get();


        return view('admin.menu.menu_view',compact('menus','categorys'));
    }

    

    public function MenuStore(Request $request){


         $image_name = $request->img->getClientOriginalName();


         Image::make($request->img)->resize(80,80)->save('upload/menu/'.$image_name);

            $location = 'upload/menu/'.$image_name;


        Menu::insert([

            'category_id'=>$request->category_id,
            'img'=>$location,
            'name'=>$request->name,
            'price'=>$request->price,
            'short_description'=>$request->short_description,
        ]);

        $notification = [

                'message' => 'Menu Sussfully Add',
                'type' => 'success',

            ];

            return redirect()->back()->with($notification);
    }

    public function MenuUpdate($id){


        $categorys = Category::latest()->get();

        $menus =  Menu::find($id);


        return view('admin.menu.menu_update',compact('menus','categorys'));
    }


    public function MenuEdate($id,Request $request){


        if($request->img == null){

            Menu::where('id',$id)->update([

            'category_id'=>$request->category_id,
            
            'name'=>$request->name,
            'price'=>$request->price,
            'short_description'=>$request->short_description,
        ]);

        $notification = [

                'message' => 'Menu Sussfully Updated',
                'type' => 'success',

            ];

            return redirect()->route('admin.menu')->with($notification);
        }else{

            $image_name = $request->img->getClientOriginalName();


            Image::make($request->img)->resize(80,80)->save('upload/menu/'.$image_name);

            $location = 'upload/menu/'.$image_name;


            Menu::where('id',$id)->update([
            'category_id'=>$request->category_id,
            'img'=>$location,
            'name'=>$request->name,
            'price'=>$request->price,
            'short_description'=>$request->short_description,
        ]);

        $notification = [
                'message' => 'Menu Sussfully Updated',
                'type' => 'success',
            ];

            return redirect()->route('admin.menu')->with($notification);
        }

    }

     public function MenuDelete($id){
        Menu::find($id)->delete();
        $notification = [
                'message' => 'Menu Delete Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);
    }

    public function AdminNavberView(){

       $navbar =  NavBar::get();

        return view('admin.navbar.navbar',compact('navbar'));
    }


    public function AdminNavbarStore(Request $request){

        
         NavBar::insert([

            'navbar_name'=>$request->navbar_name,
            'navbar_href'=>$request->navbar_href,
            'created_at'=>Carbon::now(),
         
        ]);

         $notification = [
                'message' => 'Navbar Add Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);     

       
    }

    public function AdminNavbarUpdate($id){

        $navbar = NavBar::find($id);

        return view('admin.navbar.navbarEdate',compact('navbar'));

    }

    public function AdminNavbarEdate(Request $request,$id){

         NavBar::find($id)->update([

            'navbar_name'=>$request->navbar_name,
            'navbar_href'=>$request->navbar_href,
            'updated_at'=>Carbon::now(),
         
        ]);

         $notification = [
                'message' => 'Navbar Updated Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);    

    }

    public function AdminNavbarDelete($id){

        NavBar::find($id)->delete();

        $notification = [
                'message' => 'Navbar Delete Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification); 
    }


    public function AdminNavbarBooking(){

        $bookingnav = BookTableNav::first();

        return view('admin.navbar.navbar_booking',compact('bookingnav'));

    }

    public function AdminBookNavbarStore(Request $request){

         $count = BookTableNav::count();

        if($count > 0){


            $notification = [
            'message' => 'Only One Time You Can Upload',
            'type' => 'error',
        ];
        return redirect()->back()->with($notification); 

        }

        BookTableNav::insert([

            'bookmenu_name'=>$request->bookmenu_name,
            'bookmenu_href'=>$request->bookmenu_href,
           


        ]);

        $notification = [
            'message' => 'Sussfully Insert',
            'type' => 'error',
        ];
        return redirect()->back()->with($notification); 



    }

    public function AdminNavbarBookingUpdate($id){

        $book = BookTableNav::find($id);

        return view('admin.navbar.navbar_booking_edate',compact('book'));
    }

    public function AdminNavbarBookingEdate(Request $request,$id){

            BookTableNav::find($id)->update([

            'bookmenu_name'=>$request->bookmenu_name,
            'bookmenu_href'=>$request->bookmenu_href,                

            ]);

             $notification = [
            'message' => 'Sussfully Updated',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification); 
    }

    public function AdminNavbarBookingDelete($id){


         BookTableNav::find($id)->delete();

             $notification = [
            'message' => 'Sussfully Deleted',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification); 


    }

    public function AdminLogo(){

         $logo = Logo::get();
        return view('admin.logo.logo_view',compact('logo'));
    }

    public function AdminLogoStore(Request $request){

        $count = Logo::count();

        if($count > 0){


            $notification = [
            'message' => 'Only One Time You Can Upload',
            'type' => 'error',
        ];
        return redirect()->back()->with($notification); 

        }


        $id = $request->hid_id;
        
        $image = $request->file('image');


      if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(600,200)->save('upload/logo/'.$image_name);

        $location = 'upload/logo/'.$image_name;

         Logo::insert([
            'image'=>$location,
           

        ]);
       


      }elseif($request->logo_name != null || $request->logo_icon != null){


         Logo::insert([
            'image'=>null,
            'logo_name'=>$request->logo_name,
            'logo_icon'=>$request->logo_icon

        ]);

      }else{

        return redirect()->back();
      }


     

        $notification = [
            'message' => 'Logo Add Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);     


 
    }


    public function AdminLogoUpdate($id){

        $logo = Logo::find($id);

        return view('admin.logo.logo_edate',compact('logo'));

    }

    public function AdminLogoEdate(Request $request,$id){





        
        $image = $request->file('image');


      if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(1000,1000)->save('upload/logo/'.$image_name);

        $location = 'upload/logo/'.$image_name;

         Logo::find($id)->update([
            'image'=>$location,
            'logo_name'=>null,
            'logo_icon'=>null
           

        ]);


          $notification = [
            'message' => 'Logo Updated Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);    
       


      }elseif($request->logo_name != null || $request->logo_icon != null){


         Logo::find($id)->update([
            'image'=>null,
            'logo_name'=>$request->logo_name,
            'logo_icon'=>$request->logo_icon

        ]);

      }else{

        return redirect()->back();
      }


     

        $notification = [
            'message' => 'Logo Updated Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);    



    }


    public function AdminLogoDelete($id){

            $img = Logo::find($id); 

            @unlink($img->image); 
                 
         Logo::find($id)->delete();

         $notification = [
            'message' => 'Logo Delete Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification); 

    }


    public function AdminServiceView(){

        $about = About::get();

        return view('admin.service.service_view',compact('about'));
    }


    public function AdminServiceStore(Request $request){


        $about = About::count();


        

        About::insert([

            'icon'=>$request->icon,
            'title'=>$request->title,
            'shot_desc'=>$request->shot_desc,
            'created_at'=>Carbon::now(),


        ]);


         $notification = [
            'message' => 'About Insert Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);


    }


    public function AdminServiceDelete($id){


         About::find($id)->delete();

         $notification = [
            'message' => 'About Delete Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification); 

    }


    public function AdminServiceUpdate($id){

        $about = About::find($id);

        return view('admin.service.service_edate',compact('about'));
    }

    public function AdminAboutEdate(Request $request,$id){


         About::find($id)->update([

            'icon'=>$request->icon,
            'title'=>$request->title,
            'shot_desc'=>$request->shot_desc,
           


        ]);


         $notification = [
            'message' => 'About Updated Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);


    }


    public function AdminAboutSideImageView(){

        $about_image = AboutImage::latest()->get();

        return view('admin.about.aboutimage_view',compact('about_image'));
    }

    public function AdminAboutImageStore(Request $request){

        $request->validate([

            'image'=>'required',
            'image_animate_time'=>'required',

        ]);


        $id = $request->hid_id;
        
        $image = $request->file('image');


      if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(1000,1000)->save('upload/about/'.$image_name);

        $location = 'upload/about/'.$image_name;

         AboutImage::insert([
            'image'=>$location,
            'image_animate_time'=>$request->image_animate_time,

        ]);
       


      }else{

        return redirect()->back();
      }


     

        $notification = [
            'message' => 'About Image Add Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);   

    }

    public function AdminAboutImageupd($id){


        $about_img = AboutImage::find($id);

        
        return view('admin.about.aboutimage_edate',compact('about_img'));




    }

    public function AdminAboutImageEdt(Request $request,$id){

       $image = $request->file('image');

        if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(1000,1000)->save('upload/about/'.$image_name);

        $location = 'upload/about/'.$image_name;

         AboutImage::find($id)->update([
            'image'=>$location,
            'image_animate_time'=>$request->image_animate_time,

        ]);


        }

         AboutImage::find($id)->update([
   
            'image_animate_time'=>$request->image_animate_time,

        ]);


         $notification = [
            'message' => 'About Image Add Sussfully',
            'type' => 'success',
        ];
        return redirect()->route('adabout.image')->with($notification);   




    }


    public function AdminAboutImageDlt($id){

         AboutImage::find($id)->delete();


        $notification = [
            'message' => 'About Image Add Sussfully',
            'type' => 'success',
        ];
        return redirect()->route('adabout.image')->with($notification);


    }

    public function AboutDescription(){

        $aboutData = AboutDesc::get();

        return view('admin.about.about_view',compact('aboutData'));
    }


    public function AboutDescriptionStore(Request $request){


        $count = AboutDesc::count();

        if($count > 0){

             $notification = [
            'message' => 'Only One Time Insert About Description',
            'type' => 'error',
        ];

            return redirect()->back()->with($notification);
        }



         $request->validate([

            'mini_title'=>'required',
            'title'=>'required',
            'description'=>'required',
            'num1'=>'required',
            'num2'=>'required',
            'button_name'=>'required',

        ]);

        
         AboutDesc::insert([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,
            'description'=>$request->description,
            'num1'=>$request->num1,
            'num2'=>$request->num2,
            'button_name'=>$request->button_name,
            'created_at'=>Carbon::now(),
         
        ]);

         $notification = [
                'message' => 'About Description Add Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);     

       
    }


    public function AboutDescDlt($id){


         AboutDesc::find($id)->delete();


        $notification = [
            'message' => 'About Description Delete Sussfully',
            'type' => 'success',
        ];
        return redirect()->back()->with($notification);


    }


    public function AboutDescUpd($id){

    $aboutDesc = AboutDesc::find($id);


    return view('admin.about.aboutupdate',compact('aboutDesc'));


    }


        public function AboutDescriptionEdt($id,Request $request){


        
         AboutDesc::find($id)->update([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,
            'description'=>$request->description,
            'num1'=>$request->num1,
            'num2'=>$request->num2,
            'button_name'=>$request->button_name,
            'created_at'=>Carbon::now(),
         
        ]);

         $notification = [
                'message' => 'About Description Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->route('aboutdesc.view')->with($notification);     

       
    }


    public function FoodMenuTitle(){

        $title = MenuTitle::first();

        return view('admin.menu.menu_title',compact('title'));

    }


    public function MenuTitleEdate(Request $request,$id){


        MenuTitle::find($id)->update([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,

        ]);


         $notification = [
                'message' => 'Menu Title Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);  
      

    }


    public function OrderSettingsView(){

        $Order_setting = BookingSystem::first();

        return view('admin.order.order_setting',compact('Order_setting'));
        
    }


     public function OrderSettingsUpdate(Request $request,$id){


        $image = $request->file('image');

        if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(1000,1000)->save('upload/booking/'.$image_name);

        $location = 'upload/booking/'.$image_name;


        BookingSystem::find($id)->update([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,
            'image'=>$location,
            'youtube_link'=>$request->youtube_link,
            'button_name'=>$request->button_name

        ]);


        }




        BookingSystem::find($id)->update([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,
            'youtube_link'=>$request->youtube_link,
            'button_name'=>$request->button_name
            

        ]);


         $notification = [
                'message' => 'Order Settings Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);  
      

    }

    public function ChefView(){

        $chef_title = ChefsTitle::first();

        return view('admin.chef.chef_title',compact('chef_title'));
        
    }


    public function ChefUpdate(Request $request,$id){


         ChefsTitle::find($id)->update([

            'mini_title'=>$request->mini_title,
            'title'=>$request->title,

        ]);


         $notification = [
                'message' => 'Chef Title Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);  



    }


    public function ChefSettingView(){

        $chafe = Cafes::latest()->get();
        return view('admin.chef.chef_view',compact('chafe'));




    }


    public function ChefStore(Request $request){


        $request->validate([

            'image'=>'required',
            'name'=>'required',
            'post'=>'required',
            

        ]);


        $image = $request->file('image');



         $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(400,400)->save('upload/chef/'.$image_name);

        $location = 'upload/chef/'.$image_name;


        Cafes::insert([
            'image'=>$location,
            'name'=>$request->name,
            'post'=>$request->post,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,


        ]);


         $notification = [
                'message' => 'Chef  Add Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->back()->with($notification);  




    }


    public function ChefDelete($id){

          Cafes::find($id)->delete();

         $notification = [
                'message' => 'Chef Delete Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->back()->with($notification); 
    }

    public function ChefValUpdate($id){


        $chefs = Cafes::find($id);

        return view('admin.chef.chef_edate',compact('chefs'));



    }



        public function ChefEdate(Request $request,$id){


      

        $image = $request->file('image');

        if($image){

        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(400,400)->save('upload/chef/'.$image_name);

        $location = 'upload/chef/'.$image_name;


        Cafes::find($id)->update([
            'image'=>$location,
            'name'=>$request->name,
            'post'=>$request->post,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,


        ]);

        $notification = [
                'message' => 'Chef  Edate Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->route('admin.chef')->with($notification);  



        }



         


        Cafes::find($id)->update([
            
            'name'=>$request->name,
            'post'=>$request->post,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,


        ]);


         $notification = [
                'message' => 'Chef  Edate Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->route('admin.chef')->with($notification);  




    }


        public function ContactSetting(){

        $contact_setting = ContactSetting::first();

        return view('admin.contact.contact_settings',compact('contact_setting'));

    }


     public function ContactSettingEdate(Request $request,$id){


         ContactSetting::find($id)->update([
            'mini_title'=>$request->mini_title,
            'title'=>$request->title,
            'header_title_1'=>$request->header_title_1,
            'header_info_1'=>$request->header_info_1,
            'header_title_2'=>$request->header_title_2,
            'header_info_2'=>$request->header_info_2,
            'header_title_3'=>$request->header_title_3,
            'header_info_3'=>$request->header_info_3,
            'google_map'=>$request->google_map,
            'button_name'=>$request->button_name
        ]);


         $notification = [
                'message' => 'Contact Setting Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);  



    }


    public function FooterSetting(){

        $footer = FooterSettings::first();
        return view('admin.footer.footer_setting',compact('footer'));
    }



    public function FooterSettingEdate(Request $request,$id){


         FooterSettings::find($id)->update([

        
            'title_1'=>$request->title_1,
            'title_2'=>$request->title_2,
            'location'=>$request->location,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'linkin'=>$request->linkin,
            'instagram'=>$request->instagram,
            'title_3'=>$request->title_3,
            'opening_day'=>$request->opening_day,
            'opening_time'=>$request->opening_time,
            'special_opening_day'=>$request->special_opening_day,
            'special_opening_time'=>$request->special_opening_time,
            'title_4'=>$request->title_4,
            'newslatter_desc'=>$request->newslatter_desc,
            'newslatter_btn'=>$request->newslatter_btn,
            'copyright'=>$request->copyright,
            
            'other_link_1'=>$request->other_link_1,
            'href_1'=>$request->href_1,

            'other_link_2'=>$request->other_link_2,
            'href_2'=>$request->href_2,

            'other_link_3'=>$request->other_link_3,
            'href_3'=>$request->href_3,

            'other_link_4'=>$request->other_link_4,
            'href_4'=>$request->href_4,

            'other_link_5'=>$request->other_link_5,
            'href_5'=>$request->href_5,
        ]);


         $notification = [
                'message' => 'Footer Settings Update Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification);  



    }

    
    public function SliderView(){

        $slider = Slider::latest()->get();

        return view('admin.slider.slider_manage',compact('slider'));


    }


    public function SliderStore(Request $request){



        $request->validate([

            'title'=>'required',
            'details'=>'required',
           
            'button_name'=>'required',
            'button_link'=>'required',
            'bg_image'=>'required',
            'side_image'=>'required',

            

        ]);


        // for background image


        $image1 = $request->file('bg_image');


         $image_name1 = $image1->getClientOriginalName();


        Image::make($image1)->resize(1366,768)->save('upload/slider/'.$image_name1);

        $location1 = 'upload/slider/'.$image_name1;


        // for Side image

         $image2 = $request->file('side_image');


         $image_name2 = $image2->getClientOriginalName();


        Image::make($image2)->resize(800,800)->save('upload/slider/'.$image_name2);

        $location2 = 'upload/slider/'.$image_name2;

        

        Slider::insert([
            'title'=>$request->title,
            'details'=>$request->details,
            'button_name'=>$request->button_name,
            'button_link'=>$request->button_link,
            'bg_image'=>$location1,
            'side_image'=>$location2

        ]);


         $notification = [
                'message' => 'Slider Add Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->back()->with($notification); 


    }


    public function SliderDelete($id){

        Slider::find($id)->delete();


         $notification = [
                'message' => 'Slider Delete Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->back()->with($notification); 



    }


     public function SliderUpdate($id){

        $slider = Slider::find($id);

        return view('admin.slider.slider_edate',compact('slider'));


    }


    public function SliderEdate(Request $request,$id){


        if($request->file('bg_image') == true){


            $image1 = $request->file('bg_image');


         $image_name1 = $image1->getClientOriginalName();


        Image::make($image1)->resize(1366,768)->save('upload/slider/'.$image_name1);

        $location1 = 'upload/slider/'.$image_name1;



        }else{

            $location1 = $request->bg_image_hide;

        }


         if($request->file('side_image') == true){


            $image2 = $request->file('side_image');


         $image_name2 = $image2->getClientOriginalName();


        Image::make($image2)->resize(800,800)->save('upload/slider/'.$image_name2);

        $location2 = 'upload/slider/'.$image_name2;

            

        }else{

            $location2 = $request->side_image_hide;

        }



         Slider::find($id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
            'button_name'=>$request->button_name,
            'button_link'=>$request->button_link,
            'bg_image'=>$location1,
            'side_image'=>$location2

        ]);


         $notification = [
                'message' => 'Slider Edate Sussfully',
                'type' => 'success',
            ];
        
        return redirect()->route('slider.manage')->with($notification); 




    }




}
