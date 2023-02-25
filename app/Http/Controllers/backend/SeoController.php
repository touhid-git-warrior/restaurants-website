<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;
use Image;



class SeoController extends Controller
{

    public function SeoAdminView(){

        $seo = Seo::first();

        return view('admin.seo.seo_view',compact('seo'));

    }


    public function SeoAdminEdate(Request $request,$id){


        $image = $request->file('fav_icon');

        if($image){


        $image_name = $image->getClientOriginalName();


        Image::make($image)->resize(16,16)->save('upload/seo/'.$image_name);

        $location = 'upload/seo/'.$image_name;


        Seo::find($id)->update([

            'fav_icon'=>$location,
            'title'=>$request->title,
            'seo_description'=>$request->seo_description,
            'keywords'=>$request->keywords,
           

        ]);


        }




        Seo::find($id)->update([

          
            'title'=>$request->title,
            'seo_description'=>$request->seo_description,
            'keywords'=>$request->keywords,
            

        ]);


         $notification = [
                'message' => 'Seo Add Sussfully',
                'type' => 'success',
            ];
            return redirect()->back()->with($notification); 

    }
    

}
