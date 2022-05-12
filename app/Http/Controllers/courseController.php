<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class courseController extends Controller
{
    //
    public function courses()
    {
        $course = course::all();
        return view('admin.courses.index',compact('course'));
    }
    public function createcourses()
    {
        
        return view('admin.courses.create');
    }
    public function storecourses(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
         ]);
        $courses = new course();
        $courses->title = $data['title'];
        $courses->description = $data['description'];
        $courses->save();
        return back()->with('success','Course added succesfully');
    }
    public function editcourse($id)
    {
        $course = Course::findorfail($id);
        return view('admin.courses.edit',compact('course'));
    }
    public function updatecourse(Request $request, $id)
    {
        $courses = Course::findorfail($id);
        $data = $request->all();
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
         ]);
         $courses->title = $data['title'];
         $courses->description = $data['description'];
         $courses->save();
         return back()->with('success','Course updated succesfully');
        
    }
    public function deletecourse($id)
    {
        $course = course::findorfail($id);
        $course->delete();
        return back()->with('success','Course deleted succesfully');
    }
}
