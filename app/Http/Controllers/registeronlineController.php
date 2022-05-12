<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registeronline;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class registeronlineController extends Controller
{
    //
    public function storeregister(Request $request)
    {
        $data = $request->all();
        
        // $validatedata = $request->validate([
        //     'student_image'=> 'required',
        //     'student_name'=> 'required',
        //     'date_of_birth'=> 'required|date',
        //     'birthplace'=> 'required',
        //     'gender'=> 'required',
        //     'nationality'=> 'required',
        //     'mother_tongue'=> 'required',
        //     'religion'=> 'required',
        //     'grade'=> 'required',
        //     'academic_year'=> 'required|min:4|numeric',
        //     'permanent_address'=> 'required',
        //     'current_address'=> 'required',
        //     'last_academic_info'=> 'required',
        //     'curricular_info'=> 'required',
        //     'blood_group'=> 'required',
        //     'height'=> 'required|numeric',
        //     'weight'=> 'required|numeric',
        //     'hostel_service'=> 'required',
        //     'transport_service'=> 'required',
        //     'lunch_service'=> 'required',
        //     'after_school'=> 'required',
        //     'father_name'=> 'required',
        //     'father_contact'=> 'required|numeric|min:6|max:10',
        //     'mother_name'=> 'required',
        //     'mother_contact'=> 'required|numeric|min:6|max:10',
        //     'guardian_name'=> 'required',
        //     'guardian_contact'=> 'required|numeric|min:6|max:10',
        //     'submitted_by'=> 'required',
        //     'designation'=> 'required',
        // ]);
        $register = new registeronline();
        //upload student image
        $random = Str::random(10);
        if($request->hasFile('student_image')){
            $image_tmp = $request->file('student_image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $image_tmp->move('uploads/students', $filename);
                $register->student_image = $filename;
            }
        }
        //data
        $register->student_name = $data['student_name'];
        $register->date_of_birth = $data['date_of_birth'];
        $register->birthplace = $data['birthplace'];
        $register->gender = $data['gender'];
        $register->nationality = $data['nationality'];
        $register->mother_tongue = $data['mother_tongue'];
        $register->religion = $data['religion'];
        $register->grade = $data['grade'];
        $register->academic_year = $data['academic_year'];
        $register->permanent_address = $data['permanent_address'];
        $register->current_address = $data['current_address'];
        $register->last_academic_info = $data['last_academic_info'];
        $register->curricular_info = $data['curricular_info'];
        $register->blood_group = $data['blood_group'];
        $register->height = $data['height'];
        $register->weight = $data['weight'];
        $register->medical_issue = $data['medical_issue'];
        $register->hostel_service = $data['hostel_service'];
        $register->transport_service = $data['transport_service'];
        $register->transport_pickup = $data['transport_pickup'];
        $register->lunch_service = $data['lunch_service'];
        $register->lunch_type = $data['lunch_type'];
        $register->after_school = $data['after_school'];
        $register->program_kind = $data['program_kind'];
        $register->father_name = $data['father_name'];
        $register->father_contact = $data['father_contact'];
        $register->mother_name = $data['mother_name'];
        $register->mother_contact = $data['mother_contact'];
        $register->guardian_name = $data['guardian_name'];
        $register->guardian_contact = $data['guardian_contact'];
        $register->submitted_by = $data['submitted_by'];
        $register->designation = $data['designation'];
       //file uploads
       //upload student image
       $random = Str::random(10);
       if($request->hasFile('document')){
           $doc_tmp = $request->file('document');
           if($doc_tmp->isValid()){
               $extension = $doc_tmp->getClientOriginalExtension();
               $filename = $random . '.' . $extension;
               $doc_tmp->move('uploads/students/files', $filename);
               $register->document = $filename;
           }
       }
       $register->save();
       return back()->with('success','Form submitted succesfully');

    }
}
