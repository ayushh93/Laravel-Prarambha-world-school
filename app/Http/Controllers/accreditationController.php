<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accreditation;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class accreditationController extends Controller
{
     public function accreditation()
    {
        $accreditation = accreditation::all();
        return view('admin.accreditation.index',compact('accreditation'));
    }
    
    public function createaccreditation()
    {
        return view('admin.accreditation.create');

    }
    public function storeaccreditation(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',  
         ]);
        $accreditation = new accreditation();
        $accreditation->title = $data['title'];
         //upload accreditation image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/accreditations', $filename);
                 $accreditation->image = $filename;
             }
         }
         $accreditation->save();
         return redirect('/admin/accreditation')->with('success','accreditation created succesfully');

    }
    public function editaccreditation($id)
    {
     $accreditation = accreditation::findorfail($id);
     return view('admin.accreditation.edit', compact('accreditation'));
    
    }
    public function updateaccreditation(Request $request, $id)
    {
        
        
        $accreditation = accreditation::findorfail($id);
        
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',  
         ]);
         $accreditation->title = $data['title'];
         //upload accreditation image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/accreditations', $filename);
                 $accreditation->image = $filename;
             }
         }
         //delete old image
        $image_path = 'uploads/accreditations/';

        if(!empty($accreditation->image)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }

         $accreditation->save();
         return redirect('/admin/accreditation')->with('success','accreditation updated succesfully');

    }
    public function deleteaccreditation($id)
    {
     $accreditation = accreditation::findorfail($id);
     //delete image
     $image_path = 'uploads/accreditations/';

     if(!empty($accreditation->image)){
         if(file_exists($image_path.$accreditation->image)){
             unlink($image_path.$accreditation->image);
         }
     }
     $accreditation->delete();
     return back()->with('success','accreditation deleted succesfully');

    }
}
