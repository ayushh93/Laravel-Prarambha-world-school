<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsandevent;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class newsandeventController extends Controller
{
    //
    public function newsandevent()
    {
        $newsandevent = newsandevent::all();
        return view('admin.newsandevent.index',compact('newsandevent'));
    }
    public function createnewsandevent()
    {
        return view('admin.newsandevent.create');

    }
    public function storenewsandevent(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'grade' => 'required',  
            'description' => 'required',  
            'date' => 'required | date',  

         ]);
        $newsandevent = new newsandevent();
        $newsandevent->title = $data['title'];
        $newsandevent->grade = $data['grade'];
        $newsandevent->description = $data['description'];
        $newsandevent->date = $data['date'];

         //upload image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/newsandevent', $filename);
                 $newsandevent->image = $filename;
             }
         }
         
         $newsandevent->save();
         return redirect('/admin/newsandevent')->with('success','Newsandevent created succesfully');

    }
    public function editnewsandevent($id)
    {
     $newsandevent = newsandevent::findorfail($id);
     return view('admin.newsandevent.edit', compact('newsandevent'));
    
    }
    public function updatenewsandevent(Request $request, $id)
    {
        
        
        $newsandevent = newsandevent::findorfail($id);
        
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required',  
         ]);
         $newsandevent->title = $data['title'];
         $newsandevent->grade = $data['grade'];
         $newsandevent->description = $data['description'];
         $newsandevent->date = $data['date'];
         //upload newsandevent image
         $random = Str::random(10);
         if($request->hasFile('image')){
             $image_tmp = $request->file('image');
             if($image_tmp->isValid()){
                 $extension = $image_tmp->getClientOriginalExtension();
                 $filename = $random . '.' . $extension;
                 $image_tmp->move('uploads/newsandevent', $filename);
                 $newandevent->image = $filename;
             }
         }
         //delete old image
        $image_path = 'uploads/newsandevent/';

        if(!empty($newsandevent->image)){
            if(file_exists($image_path.$data['current_image'])){
                unlink($image_path.$data['current_image']);
            }
        }

         $newsandevent->save();
         return redirect('/admin/newsandevent')->with('success','Newsandevent updated succesfully');

    }
    public function deletenewsandevent($id)
    {
     $newsandevent = newsandevent::findorfail($id);
     //delete image
     $image_path = 'uploads/newsandevent/';

     if(!empty($newsandevent->image)){
         if(file_exists($image_path.$newsandevent->image)){
             unlink($image_path.$newsandevent->image);
         }
     }
     $newsandevent->delete();
     return back()->with('success','Newsandevent deleted succesfully');

    }
}
