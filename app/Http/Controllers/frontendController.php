<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\sitedetail;
use App\Models\aboutus;
use App\Models\newsandevent;
use App\Models\course;
use App\Models\gallery;
use App\Models\contactus;
use App\Models\Accreditation;
use App\Models\Admission;

class frontendController extends Controller
{
    //home page
    public function index()
    {
        $slider = slider::all();
        $site_detail = sitedetail::all();
        $about_us = aboutus::first();
        $news = newsandevent::all();
        $gallery = gallery::all();
        $admission = Admission::all();
        $accreditation = Accreditation::all();
        $contact = contactus::first();
        
        return view('frontend.index',compact('slider','site_detail','about_us','contact','news','gallery','accreditation','admission'));
    }
    public function gallery()
    {
        $gallery = gallery::all();
        return view('frontend.gallery',compact('gallery'));
    }
    public function contact()
    {
        $contact = contactus::first();
        return view('frontend.contact',compact('contact'));
    }
    public function registeronline()
    {
        return view('frontend.registeronline');
    }

}
