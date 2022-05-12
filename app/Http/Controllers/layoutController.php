<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use App\Models\sitedetail;
use App\Models\Admission;
use App\Models\aboutus;

use Illuminate\Support\Facades\DB;
class layoutController extends Controller
{
    //

    public function singlecourse($title)
    {
        $course = DB::table('courses')->select('*')->where('title',$title)->first();
        $image = sitedetail::first();
        return view('frontend.singlecourse',compact('course','image'));
    }
    public function singleschool($title)
    {
        $school = DB::table('schools')->select('*')->where('title',$title)->first();
        return view('frontend.singleschool',compact('school'));
        
    }
    public function singleadmission($title)
    {
       // $admission = DB::table('admissions')->select('*')->where('title',$title)->first();
        $admission = Admission::where('title',$title)->first();
        return view('frontend.singleadmission',compact('admission'));
        
    }
    public function singleabout($title)
    {
        $aboutus = aboutus::where('title',$title)->first();
        return view('frontend.singleabout',compact('aboutus'));
    }
}
