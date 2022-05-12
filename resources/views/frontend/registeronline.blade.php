@extends('frontend.layout.layout')

@section('body')
  <!--MAIN SECTION-->
  <section id="admission-form">
    <div class="container">
        <div class="admission-form-heading">
            <h2>ADMISSION FORM</h2>
        </div>
        <div class="about-admission">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur tempore mollitia
                esse iure illum repellat. Doloribus ad, corporis debitis, minima molestiae amet odit,
                dolorem quae consequuntur excepturi quas quod odio? Similique beatae veritatis praesentium
                nisi, eveniet eligendi eius ullam sequi facilis dolorum inventore impedit, rerum odio a
                quibusdam modi perspiciatis, sed assumenda? Provident blanditiis accusamus dolor quidem
                ipsum quae quaerat architecto pariatur possimus velit omnis harum dignissimos dolorum, sunt
                libero, inventore reiciendis exercitationem ducimus rem nihil quo ut. Soluta, necessitatibus
                aliquam iusto esse, fuga consectetur possimus corrupti expedita ipsum repellendus aliquid
                iure velit assumenda modi id earum deserunt voluptatibus.</p>
        </div>
        <div class="down-btn">
            <h5>Download Admission Form</h5>
            <a class="download-btn" href="#"><i class="fa-solid fa-arrow-down"></i> Admission Form
                Download</a>
        </div>
        <div class="option-form">
            <h2>OR</h2>
            <h4 class="online-form">ONLINE ADMISSION FORM</h4>
            <h5 class="online-form-section-heading">Student's Personal Info</h5>
            <form action="storeregister" method="post" class="top-form" enctype="multipart/form-data">
                @include('flash-message')
                @csrf
                <div class="upload-image py-3">
                    <input type="file" id="photo" name="student_image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="fullname">Student's Full Name</label>
                    <input type="text" class="form-control" name="student_name" id="fullname" aria-describedby="fname"
                        placeholder="Student's Full Name" value="{{old('student_name')}}">
                </div>
                <div class="row multiple-columns no-gutters">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" id="dob"
                                placeholder="Student's Date of Birth"  value="{{old('date_of_birth')}}">
                        </div>
                    </div>
                    <div class="col-lg-5 middle-column">
                        <div class="form-group">
                            <label for="birthplace">Place of Birth</label>
                            <input type="text"  name="birthplace" class="form-control" id="birthplace"
                                placeholder="Student's Birthplace"  value="{{old('birthplace')}}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="gender">Gender</label>
                        <div class="justify-content-start">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="gender" value="Male">
                                <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="inlineRadio2" value="Female">
                                <label class="form-check-label" for="gender">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row multiple-columns no-gutters">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality"  value="{{old('nationality')}}">
                        </div>
                    </div>
                    <div class="col-lg-4 middle-column">
                        <div class="form-group">
                            <label for="language">Mother Tounge</label>
                            <input type="text" class="form-control" id="mother_tongue" name="mother_tongue" placeholder="Mother Tounge"  value="{{old('mother_tongue')}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion"  value="{{old('religion')}}">
                        </div>
                    </div>
                </div>
                <div class="row multiple-columns no-gutters">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="grade">Grade Applied For</label>
                            <input type="number" name="grade" class="form-control" id="grade"
                                placeholder="Grade Applied For"  value="{{old('grade')}}">
                        </div>
                    </div>
                    <div class="col-lg-3 middle-column">
                        <div class="form-group">
                            <label for="year">Academic Year</label>
                            <input type="text" class="form-control" id="year" name="academic_year"
                                placeholder="Academic Year Applied For"  value="{{old('academic_year')}}">
                        </div>
                    </div>
                </div>
                <div class="row multiple-columns no-gutters">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="permanent_address">Permanent Address</label>
                            <input type="text" name="permanent_address" class="form-control" id="permanent_address" placeholder="Permanent Address"  value="{{old('permanent_address')}}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="current_address">Current Address</label>
                            <input type="text" class="form-control" id="current_address" name="current_address" placeholder="Current Address"  value="{{old('current_address')}}">
                        </div>
                    </div>
                </div>
                <h5 class="online-form-section-heading pb-3">Last Academic Info</h5>
                <textarea name="last_academic_info" id="lacademicinfo" rows="5"  value="{{old('last_academic_info')}}"></textarea>
                <h5 class="online-form-section-heading pb-3">Co-curricular Info</h5>
                <textarea name="curricular_info" id="co-curricular_info" rows="5"  value="{{old('curricular_info')}}"></textarea>

                <h5 class="online-form-section-heading">Student's Medical Info</h5>

                <div class="row multiple-columns no-gutters pt-3">
                    <div class="col-lg-4">
                        <div class="service-name">
                            <div class="form-group col-md-4">
                                <label for="blood_group">Blood Group</label>
                                <select name="blood_group" id="blood_group" class="form-control">
                                    <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 middle-column">
                        <div class="form-group">
                            <label for="height">Height</label>
                            <input type="text" name="height" class="form-control" id="height" placeholder="Student's Height in inches"  value="{{old('height')}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" name="weight" class="form-control" id="weight" placeholder="Student's Weight in kg"  value="{{old('weight')}}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="issue">Please mention if any medical isseues</label>
                            <input type="text" name="medical_issue" class="form-control" id="medical_issue"
                                placeholder="Please mention if any"  value="{{old('medical_issue')}}"> 
                        </div>
                    </div>
                </div>
                <h5 class="online-form-section-heading">Services Needed</h5>
                <div class="service-name">
                    <h6 class="pt-3">Hostel Service</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hostel_service" id="hostel_service"
                            value="1">
                        <label class="form-check-label" for="hostelyes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hostel_service" id="hostel_service"
                            value="0">
                        <label class="form-check-label" for="hostelno">No</label>
                    </div>
                </div>
                <div class="service-list">
                    <h6 class="pt-3">Transportation Service</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transport_service" id="transport_service"
                            value="1">
                        <label class="form-check-label" for="transportyes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transport_service" id="transport_service"
                            value="0">
                        <label class="form-check-label" for="transportno">No</label>
                    </div>
                    <input type="text" name="transport_pickup" class="form-control" id="pickuppoint" aria-describedby="pickuphelp"
                        placeholder="If yes, mention pickup point">
                </div>
                <div class="service-list">
                    <h6 class="pt-3">Lunch</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="lunch_service" id="inlineRadio1"
                            value="1">
                        <label class="form-check-label" for="lunchyes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="lunch_service" id="inlineRadio2"
                            value="0">
                        <label class="form-check-label" for="lunchno">No</label>
                    </div>
                    <input type="text" name="lunch_type" class="form-control" id="pickuppoint" aria-describedby="pickuphelp"
                        placeholder="If yes, mention veg or non-veg">
                </div>
                <div class="service-list">
                    <h6 class="pt-3">After School</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"  type="radio" name="program_kind" id="after_school"
                            value="1">
                        <label class="form-check-label" for="afteryes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="after_school" id="inlineRadio2"
                            value="0">
                        <label class="form-check-label" for="afterno">No</label>
                    </div>
                    <input name="program_kind" type="text" class="form-control" id="pickuppoint" aria-describedby="pickuphelp"
                        placeholder="If yes, mention what kind of program">
                </div>
                <h5 class="online-form-section-heading">Parents/Guardians Information</h5>
                <div class="row w-100 no-gutters pt-3">
                    <div class="col-lg-6 rightpadding">
                        <div class="form-group">
                            <label for="fathername">Father's Name</label>
                            <input type="text" class="form-control" id="fathername" name="father_name"
                                aria-describedby="fathernamehelp" placeholder="Enter Father's Name"  value="{{old('father_name')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 leftpadding">
                        <div class="form-group">
                            <label for="fathernumber">Father's Contact Number</label>
                            <input type="tel" class="form-control" id="fathernumber" name="father_contact"
                                aria-describedby="fathernumberhelp" placeholder="Enter Father's Contact Number"  value="{{old('father_contact')}}">
                        </div>
                    </div>
                </div>
                <div class="row w-100 no-gutters pt-3">
                    <div class="col-lg-6 rightpadding">
                        <div class="form-group">
                            <label for="mothername">Mother's Name</label>
                            <input type="text" name="mother_name" class="form-control" id="mothername"
                                aria-describedby="mothernamehelp" placeholder="Enter Mother's Name"  value="{{old('mother_name')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 leftpadding">
                        <div class="form-group">
                            <label for="mothernumber">Mother's Contact Number</label>
                            <input type="tel" name="mother_contact" class="form-control" id="mothernumber"
                                aria-describedby="mothernumberhelp" placeholder="Enter Mother's Contact Number"  value="{{old('mother_contact')}}">
                        </div>
                    </div>
                </div>
                <div class="row w-100 no-gutters pt-3">
                    <div class="col-lg-6 rightpadding">
                        <div class="form-group">
                            <label for="guardianname">Guardian's Name</label>
                            <input type="text" name="guardian_name" class="form-control" id="guardianname"
                                aria-describedby="mothernamehelp" placeholder="Enter Guardian's Name"  value="{{old('guardian_name')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 leftpadding">
                        <div class="form-group">
                            <label for="guardiannumber">Guardian's Contact Number</label>
                            <input type="tel" name="guardian_contact" class="form-control" id="guardiannumber"
                                aria-describedby="guardiannumberhelp"
                                placeholder="Enter Guardian's Contact Number"  value="{{old('guardian_contact')}}">
                        </div>
                    </div>
                </div>
                <h5 class="online-form-section-heading">Upload Your Document's Here(Upload it in a single
                    file)
                </h5>
                <div class="upload-documents py-3">
                    <input type="file" id="studentdocument" name="document">
                </div>
        
                <div class="form-section-headline">
                    <h5 class="online-form-section-heading pb-3">Declaration</h5>
                </div>
                <div class="form-bar"></div>
                <div class="declaration-statement">
                    I <input id="delarationInput" type="text" name="submitted_by"> the
                    <select id="declareRole" name="designation">
                        <option value="Parent">Parent</option>
                        <option value="Guardian">Guardian</option>
                        <option value="Student">Student</option>
                    </select> seeking admission in PWA School, solemnly declare that the above given
                    information is true to my knowledge and I will strictly abideby the rules and
                    regulations in force and that may be framed hereafter, and will not indulge in
                    any unsocial activities. I will avoid any act of indiscipline and breach of
                    rules. I further agree to reimburse any furniture, apparatus, etc. which may
                    cause by carelessness or wantonness on my part.
                </div>
                <div class="declaration-statement">
                    <li>
                        In case of medical emergency in school premises, respective class teacher or
                        medical supervisor will offer immediate first aid and/or take the student to
                        a nearby hospital and inform the parent/guardian as soon as possible. All
                        the medical expenses occured during should by borne by parents/guardian at
                        the time, which later may be claimed as per Group Personnel Accidental
                        Insurance policy for students.
                    </li>
                </div>
                <div class="declaration-statement">
                    <li>
                        School has the right to use student's photograph (candid or professional
                        shoot) in any of the school's collateral or promotional purpose. For any
                        objection to it, the administration can be furnished a letter at the time of
                        admission.
                    </li>
                </div>
                <div class="declaration-note">
                    (Only duly filled application along with the required documents will be accepted
                    by the school)
                </div>
                <div class="declaration-statement">
                    <label class="customcheck">
                        <input type="checkbox" name="declaration" id="declaration" value="1">
                        <span class="checkmark"></span>
                        I read the above statements and I strongly agree to them.( * Compulsary)
                    </label>
                </div>
            <button type="submit" class="form-submit">Submit Application</button>

            </form>
        </div>
    </div>
</section>
@endsection