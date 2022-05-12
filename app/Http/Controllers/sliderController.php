<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class sliderController extends Controller
{
    //
    public function slider()
    {
        $slider = Slider::all();
        return view('admin.slider.index',compact('slider'));
    }
    public function createslider()
    {
        return view('admin.slider.create');

    }
    public function storeslider(Request $request)
    {
        $data = $request->all();

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',  
         ]);
        $slider = new slider();
        $slider->title = $data['title'];
        $slider->description = $data['description'];

         //upload slider image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/sliders', $filename);
                 $slider->image = $filename;
             }
         }
         $slider->save();
         return redirect('/admin/slider')->with('success','Slider created succesfully');

    }
    public function editslider($id)
    {
     $slider = slider::findorfail($id);
     return view('admin.slider.edit', compact('slider'));
    
    }
    public function updateslider(Request $request, $id)
    {
        
        
        $slider = slider::findorfail($id);
        
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',  
            'description' => 'required',  

         ]);
         $slider->title = $data['title'];
        $slider->description = $data['description'];

         //upload slider image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/sliders', $filename);
                 $slider->image = $filename;
             }
         }
         //delete old image
        $image_path = 'uploads/sliders/';

        if(!empty($slider->image)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }

         $slider->save();
         return redirect('/admin/slider')->with('success','Slider updated succesfully');

    }
    public function deleteslider($id)
    {
     $slider = slider::findorfail($id);
     //delete image
     $image_path = 'uploads/sliders/';

     if(!empty($slider->image)){
         if(file_exists($image_path.$slider->image)){
             unlink($image_path.$slider->image);
         }
     }
     $slider->delete();
     return back()->with('success','Slider deleted succesfully');

    }
}
