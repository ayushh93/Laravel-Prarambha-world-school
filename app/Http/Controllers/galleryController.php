<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class galleryController extends Controller
{
    //
    public function gallery()
    {
        $gallery = gallery::all();
        return view('admin.gallery.index' ,compact('gallery'));
    }
    public function creategallery()
    {
        return view('admin.gallery.create');
    }
    public function storegallery(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',  
         ]);
        $gallery = new gallery();
        $gallery->title = $data['title'];
         //upload gallery image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/gallery', $filename);
                 $gallery->image = $filename;
             }
         }
         $gallery->save();
         return redirect('/admin/gallery')->with('success','Gallery created succesfully');

    }
    public function editgallery($id)
    {
        $gallery= gallery::findorfail($id);
        return view('admin.gallery.edit',compact('gallery'));

    }
    public function updategallery(Request $request, $id)
    {
        $data = $request->all();
        $gallery =  gallery::findorfail($id);
        $gallery->title = $data['title'];
         //upload gallery image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/gallery', $filename);
                 $gallery->image = $filename;
             }
               //delete old image
        $image_path = 'uploads/gallery/';

        if(!empty($gallery->image)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }
         }
         $gallery->save();
         return redirect('/admin/gallery')->with('success','Gallery created succesfully');

    }
    public function deletegallery($id)
    {
     $gallery = gallery::findorfail($id);
     //delete image
     $image_path = 'uploads/gallery/';

     if(!empty($gallery->image)){
         if(file_exists($image_path.$gallery->image)){
             unlink($image_path.$gallery->image);
         }
     }
     $gallery->delete();
     return back()->with('success','Gallery deleted succesfully');

    }
    
}
