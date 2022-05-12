@extends('frontend.layout.layout')

@section('body')
<!-- body -->
<div class="information">
                <div class="container-fluid p-0">
                    <div class="t-4 pt-4" style="padding: 20px;">
                        <div class="row">
                            <div class="col-lg-6 mb-4 border-right" style="padding-left: 1rem;">
                                <h2 class="left-border mb-3" style="font-size: 16px;">GET IN TOUCH</h2>
                                <h5 class="online-form-section-heading">Contact Information</h5>
                                <div class="contact-detail mt-4">
                                    <div class=" d-flex mb-4">
                                        <div class="mark mr-3 d-flex justify-content-center align-items-center"
                                            style="font-size: 25px;">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content mt-2">
                                            <h4 style="font-size: 18px;" class="font-weight-bold">Address</h4>
                                            <h5 style="font-size: 15px;">{{$contact->Address}}</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-4">
                                        <div class="mark mr-3 d-flex justify-content-center align-items-center font-weight-bold"
                                            style="font-size: 25px;">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="content phone mt-2">
                                            <h4 style="font-size: 18px;" class="font-weight-bold">Phone Number</h4>
                                            <h5 style="font-size: 15px;"><a href="tel:">{{$contact->phone_number}}</a></h5>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-4">
                                        <div class="mark mr-3 d-flex justify-content-center align-items-center"
                                            style="font-size: 25px;">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="content mail mt-2">
                                            <h4 style="font-size: 18px;" class="font-weight-bold">Mail Us At</h4>
                                            <h5 style="font-size: 15px;"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                @include('flash-message')
                                <form action="{{route('storecontactinfo')}}" method="POST" class="contact-form">
                                    @csrf
                                    <div class="row w-100">
                                        <div class="col-12 mb-3">
                                            <label style="color: var(--black-color);" class="font-weight-bold">Your
                                                Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label style="color: var(--black-color);" class="font-weight-bold">Your
                                                Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label style="color: var(--black-color);"
                                                class="font-weight-bold">Subject</label>
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label style="color: var(--black-color);" class="font-weight-bold">Your
                                                Messsage</label>
                                            <textarea placeholder="Message" name="message" class="form-control" name="msg" cols="5"
                                                rows="5"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="form-submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14127.923223405374!2d85.34020916977538!3d27.71787889999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bd94df04c5%3A0x3fafb5108dbd2dac!2sIT%20Arrow%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1650605895874!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
@endsection