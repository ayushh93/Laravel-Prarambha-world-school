<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutus;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class aboutusController extends Controller
{
    //
    public function aboutus()
    {
        $aboutus = aboutus::get();
        return view ('admin.aboutus.index' ,compact('aboutus'));
    }
    public function createaboutus()
    {
        return view('admin.aboutus.create');
    }
    public function storeaboutus(Request $request)
    {
        $aboutus = new aboutus;
          
        $data = $request->all();
        // $validateData = $request->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        //  ]);

        $aboutus->title = $data['title'];
        $aboutus->description = $data['description'];
        //upload image
        $random = Str::random(10);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($request->file('image')){
            $file= $request->file('image');
            $filename= $random . '.'.$file->getClientOriginalName();
            
            $image_tmp->move('uploads/aboutus', $filename);
            $aboutus->image= $filename;
        }
        }
       
        $aboutus->save();
        return redirect('/admin/aboutus')->with('success','About us created succesfully');
    }
    public function editaboutus($id)
    {
        $aboutus = aboutus::findorfail($id);
        return view('admin.aboutus.edit',compact('aboutus'));
    }
    public function updateaboutus(Request $request,$id)
    {
        $aboutus = aboutus::findorfail($id);
          
        $data = $request->all();
        // $validateData = $request->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        //  ]);

        $aboutus->title = $data['title'];
        $aboutus->description = $data['description'];
        //upload image
        $random = Str::random(10);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($request->file('image')){
            $file= $request->file('image');
            $filename= $random . '.'.$file->getClientOriginalName();
            
            $image_tmp->move('uploads/aboutus', $filename);
            $aboutus->image= $filename;
        }
        //delete old image
        $image_path = 'uploads/aboutus/';

        if(!empty($aboutus->image)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }
         
        }
       
        $aboutus->save();
        return redirect('/admin/aboutus')->with('success','About us updated succesfully');
    }

    public function deleteaboutus($id)
    {
        $aboutus = aboutus::findorfail($id);
        $image_path = 'uploads/aboutus/';

        if(!empty($aboutus->image)){
            if(file_exists($image_path.$aboutus->image)){
                unlink($image_path.$aboutus->image);
            }
        }
        $aboutus->delete();
     return back()->with('success','Aboutus deleted succesfully');

    }
    
}
