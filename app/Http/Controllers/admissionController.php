<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admission;

class admissionController extends Controller
{
    //
    public function admission()
    {
        $admission = admission::all();

        return view('admin.admission.index',compact('admission'));
    }
    public function createadmission()
    {
        
        return view('admin.admission.create');
    }
    public function storeadmission(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
         ]);
        $admission = new admission();
        $admission->title = $data['title'];
        $admission->description = $data['description'];
        $admission->save();
        return back()->with('success','admission added succesfully');
    }
    public function editadmission($id)
    {
        $admission = admission::findorfail($id);
        return view('admin.admission.edit',compact('admission'));
    }
    public function updateadmission(Request $request, $id)
    {
        $admission = admission::findorfail($id);
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
         ]);
         $admission->title = $data['title'];
         $admission->description = $data['description'];
         $admission->save();
         return back()->with('success','admission updated succesfully');
        
    }
    public function deleteadmission($id)
    {
        $admission = admission::findorfail($id);
        $admission->delete();
        return back()->with('success','admission deleted succesfully');
    }
}
