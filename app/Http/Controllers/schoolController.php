<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;

class schoolController extends Controller
{
    //
    public function school()
    {
        $school = school::all();

        return view('admin.school.index',compact('school'));
    }
    public function createschool()
    {
        
        return view('admin.school.create');
    }
    public function storeschool(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
         ]);
        $school = new school();
        $school->title = $data['title'];
        $school->description = $data['description'];
        $school->save();
        return back()->with('success','school added succesfully');
    }
    public function editschool($id)
    {
        $school = school::findorfail($id);
        return view('admin.school.edit',compact('school'));
    }
    public function updateschool(Request $request, $id)
    {
        $school = school::findorfail($id);
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
         ]);
         $school->title = $data['title'];
         $school->description = $data['description'];
         $school->save();
         return back()->with('success','school updated succesfully');
        
    }
    public function deleteschool($id)
    {
        $school = school::findorfail($id);
        $school->delete();
        return back()->with('success','school deleted succesfully');
    }
}


