<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sitedetail;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class adminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.index');
    }
    //site settings
    public function sitedetail()
    {
        $sitedetail= sitedetail::first();
        return view('admin.sitedetail',compact('sitedetail'));
        
    }
    public function updatesitedetail(Request $request, $id)
    {
         $sitedetail = sitedetail::findorfail($id);
          
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
         ]);
        $sitedetail->title = $data['title'];
        //upload logo
        $random = Str::random(10);
        if($request->hasFile('logo')){
            $logo_tmp = $request->file('logo');
            if($request->file('logo')){
            $file= $request->file('logo');
            $filename= $random . '.'.$file->getClientOriginalName();
            
            $logo_tmp->move('uploads/site_setting', $filename);
            $sitedetail->logo= $filename;
        }
         //delete old logo
         $image_path = 'uploads/site_setting/';

         if(!empty($sitedetail->logo)){
             if(file_exists($image_path.$data['current_logo'])){
                 unlink($image_path.$data['current_logo']);
             }
         }
        }
        //upload image
        $random = Str::random(10);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
               
                $image_tmp->move('uploads/site_setting', $filename);
                $sitedetail->image = $filename;
            }
            //delete old image
        $image_path = 'uploads/site_setting/';

        if(!empty($sitedetail->logo)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }
        }
       
        
        $sitedetail->save();
        return back()->with('success','Site detail updated succesfully');
    }
}
