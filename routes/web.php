<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

//front
Route::get('/', [App\Http\Controllers\frontendController::class, 'index'])->name('index');

//admin 
Route::get('/admin/index', [App\Http\Controllers\adminController::class, 'dashboard'])->name('dashboard');
//site settings
Route::get('/admin/sitedetail', [App\Http\Controllers\adminController::class, 'sitedetail'])->name('sitedetail');
Route::post('/admin/updatesitedetail/{id}', [App\Http\Controllers\adminController::class, 'updatesitedetail'])->name('updatesitedetail');

//courses
Route::get('/admin/courses', [App\Http\Controllers\courseController::class, 'courses'])->name('courses');
Route::get('/admin/courses-create', [App\Http\Controllers\courseController::class, 'createcourses'])->name('createcourses');
Route::post('/admin/courses-store', [App\Http\Controllers\courseController::class, 'storecourses'])->name('storecourses');
Route::get('/admin/course-edit/{id}', [App\Http\Controllers\courseController::class, 'editcourse'])->name('editcourse');
Route::post('/admin/course-update/{id}', [App\Http\Controllers\courseController::class, 'updatecourse'])->name('updatecourse');
Route::get('/admin/course-delete/{id}', [App\Http\Controllers\courseController::class, 'deletecourse'])->name('deletecourse');

//sliders
Route::get('/admin/slider', [App\Http\Controllers\sliderController::class, 'slider'])->name('slider');
Route::get('/admin/slider-create', [App\Http\Controllers\sliderController::class, 'createslider'])->name('createslider');
Route::post('/admin/slider-store', [App\Http\Controllers\sliderController::class, 'storeslider'])->name('storeslider');
Route::get('/admin/slider-edit/{id}', [App\Http\Controllers\sliderController::class, 'editslider'])->name('editslider');
Route::post('/admin/slider-update/{id}', [App\Http\Controllers\sliderController::class, 'updateslider'])->name('updateslider');
Route::get('/admin/slider-delete/{id}', [App\Http\Controllers\sliderController::class, 'deleteslider'])->name('deleteslider');

//school
Route::get('/admin/school', [App\Http\Controllers\schoolController::class, 'school'])->name('school');
Route::get('/admin/school-create', [App\Http\Controllers\schoolController::class, 'createschool'])->name('createschool');
Route::post('/admin/school-store', [App\Http\Controllers\schoolController::class, 'storeschool'])->name('storeschool');
Route::get('/admin/school-edit/{id}', [App\Http\Controllers\schoolController::class, 'editschool'])->name('editschool');
Route::post('/admin/school-update/{id}', [App\Http\Controllers\schoolController::class, 'updateschool'])->name('updateschool');
Route::get('/admin/school-delete/{id}', [App\Http\Controllers\schoolController::class, 'deleteschool'])->name('deleteschool');

//admission
Route::get('/admin/admission', [App\Http\Controllers\admissionController::class, 'admission'])->name('admission');
Route::get('/admin/admission-create', [App\Http\Controllers\admissionController::class, 'createadmission'])->name('createadmission');
Route::post('/admin/admission-store', [App\Http\Controllers\admissionController::class, 'storeadmission'])->name('storeadmission');
Route::get('/admin/admission-edit/{id}', [App\Http\Controllers\admissionController::class, 'editadmission'])->name('editadmission');
Route::post('/admin/admission-update/{id}', [App\Http\Controllers\admissionController::class, 'updateadmission'])->name('updateadmission');
Route::get('/admin/admission-delete/{id}', [App\Http\Controllers\admissionController::class, 'deleteadmission'])->name('deleteadmission');

//accreditation
Route::get('/admin/accreditation', [App\Http\Controllers\accreditationController::class, 'accreditation'])->name('accreditation');
Route::get('/admin/accreditation-create', [App\Http\Controllers\accreditationController::class, 'createaccreditation'])->name('createaccreditation');
Route::post('/admin/accreditation-store', [App\Http\Controllers\accreditationController::class, 'storeaccreditation'])->name('storeaccreditation');
Route::get('/admin/accreditation-edit/{id}', [App\Http\Controllers\accreditationController::class, 'editaccreditation'])->name('editaccreditation');
Route::post('/admin/accreditation-update/{id}', [App\Http\Controllers\accreditationController::class, 'updateaccreditation'])->name('updateaccreditation');
Route::get('/admin/accreditation-delete/{id}', [App\Http\Controllers\accreditationController::class, 'deleteaccreditation'])->name('deleteaccreditation');

//contact us
Route::get('/admin/contactus', [App\Http\Controllers\contactusController::class, 'contactus'])->name('contactus');
Route::post('/admin/contact-update/{id}', [App\Http\Controllers\contactusController::class, 'updatecontact'])->name('updatecontact');

//about us
Route::get('/admin/aboutus', [App\Http\Controllers\aboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/admin/aboutus-create', [App\Http\Controllers\aboutusController::class, 'createaboutus'])->name('createaboutus');
Route::post('/admin/aboutus-store', [App\Http\Controllers\aboutusController::class, 'storeaboutus'])->name('storeaboutus');
Route::get('/admin/aboutus-edit/{id}', [App\Http\Controllers\aboutusController::class, 'editaboutus'])->name('editaboutus');
Route::post('/admin/aboutus-update/{id}', [App\Http\Controllers\aboutusController::class, 'updateaboutus'])->name('updateaboutus');
Route::get('/admin/aboutus-delete/{id}', [App\Http\Controllers\aboutusController::class, 'deleteaboutus'])->name('deleteaboutus');


//newsandevent
Route::get('/admin/newsandevent', [App\Http\Controllers\newsandeventController::class, 'newsandevent'])->name('newsandevent');
Route::get('/admin/newsandevent-create', [App\Http\Controllers\newsandeventController::class, 'createnewsandevent'])->name('createnewsandevent');
Route::post('/admin/newsandevent-store', [App\Http\Controllers\newsandeventController::class, 'storenewsandevent'])->name('storenewsandevent');
Route::get('/admin/newsandevent-edit/{id}', [App\Http\Controllers\newsandeventController::class, 'editnewsandevent'])->name('editnewsandevent');
Route::post('/admin/newsandevent-update/{id}', [App\Http\Controllers\newsandeventController::class, 'updatenewsandevent'])->name('updatenewsandevent');
Route::get('/admin/newsandevent-delete/{id}', [App\Http\Controllers\newsandeventController::class, 'deletenewsandevent'])->name('deletenewsandevent');


//gallery
Route::get('/admin/gallery', [App\Http\Controllers\galleryController::class, 'gallery'])->name('gallery');
Route::get('/admin/gallery-create', [App\Http\Controllers\galleryController::class, 'creategallery'])->name('creategallery');
Route::post('/admin/gallery-store', [App\Http\Controllers\galleryController::class, 'storegallery'])->name('storegallery');
Route::get('/admin/gallery-edit/{id}', [App\Http\Controllers\galleryController::class, 'editgallery'])->name('editgallery');
Route::post('/admin/gallery-update/{id}', [App\Http\Controllers\galleryController::class, 'updategallery'])->name('updategallery');
Route::get('/admin/gallery-delete/{id}', [App\Http\Controllers\galleryController::class, 'deletegallery'])->name('deletegallery');



//frontend
Route::get('/course/{title}', [App\Http\Controllers\layoutController::class, 'singlecourse'])->name('singlecourse');
Route::get('/school/{title}', [App\Http\Controllers\layoutController::class, 'singleschool'])->name('singleschool');
Route::get('/admission/{title}', [App\Http\Controllers\layoutController::class, 'singleadmission'])->name('singleadmission');
Route::get('/about/{title}', [App\Http\Controllers\layoutController::class, 'singleabout'])->name('singleabout');
Route::get('/gallery', [App\Http\Controllers\frontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [App\Http\Controllers\frontendController::class, 'contact'])->name('contact');
Route::get('/registeronline', [App\Http\Controllers\frontendController::class, 'registeronline'])->name('registeronline');
Route::post('/storeregister', [App\Http\Controllers\registeronlineController::class, 'storeregister'])->name('storeregister');
Route::post('/storecontact', [App\Http\Controllers\contactinfoController::class, 'storecontactinfo'])->name('storecontactinfo');






























//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
