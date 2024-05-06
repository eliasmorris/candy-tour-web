<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\PagesController;
use App\Models\DestinationInfo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
                  //*******User Page Routes*****//
Route::get('/', [PagesController::class, 'homePage'])->name(('/'));
Route::get('about-us', [PagesController::class, 'aboutPage'])->name('pages.about');
Route::get('our-services',[PagesController::class, 'servicePage'])->name('pages.services');
Route::get('our-packages', [PagesController::class, 'packagePage'])->name('pages.package');
Route::get('team-members', [PagesController::class, 'teammemberPage'])->name('pages.teammember');
Route::get('our-testimonial', [PagesController::class, 'testimonialPage'])->name('pages.testimonial');
Route::get('faq', [PagesController::class, 'faqPage'])->name('pages.faq');
Route::get('contact-us', [PagesController::class, 'contactPage'])->name('pages.contact');
Route::get('packages/{id}', [PagesController::class, 'packageView'])->name('package.view');
Route::get('readmore/{id}', [PagesController::class, 'readmorepackage'])->name('readmore-package');
Route::post('booking-info',[PagesController::class, 'storebookinginfo'])->name('booking-info');
Route::get('sendmail',[PagesController::class, 'sendmail']);



/* ---Start Admin Panel Routes--- */

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-dashboard');

//Route for Logo Controller
Route::resource('admin-logo', LogoController::class);
Route::post('logo', [DashboardController::class, 'updatelogo'])->name('update-logo-info');
Route::post('logo-status', [DashboardController::class, 'updatelogostatus'])->name('update-logo-status');

//Routes for Slides controller
Route::resource('admin-slides', SlideController::class);
Route::post('image-slides', [DashboardController::class, 'updateslideimages'])->name('update-slide');
Route::post('slides-image-status', [DashboardController::class, 'updateslidestatus'])->name('slides_image.update.status');

//Routes for About us Controller
Route::resource('admin-about', AboutController::class);
Route::post('admin-about-us', [DashboardController::class, 'updateaboutus'])->name('about-page-update');
Route::post('about-status', [DashboardController::class, 'updateaboutstatus'])->name('update-about-status');

//Route for Services Page Controller
Route::resource('admin-services', ServiceController::class);
Route::post('admin-service-info',[DashboardController::class, 'updateserviceinfo'])->name('update-service-info');
Route::post('service-status',[DashboardController::class, 'updateservicestatus'])->name('update-service-status');

//Route for Package Controller
Route::resource('admin-package', PackageController::class);
Route::post('admin-package-info',[DashboardController::class, 'updatepackageinfo'])->name('update-package-info');
Route::post('package-status', [DashboardController::class, 'updatepackagestatus'])->name('update-package-status');

//Route for Team member controller
Route::resource('admin-member', MemberController::class);