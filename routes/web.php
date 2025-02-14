<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogcategoryController;
use App\Http\Controllers\ArtcategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDetailController;


Route::post('/booking/store', 'FrontendController@storebooking')->name('frontend.storebooking');
Route::post('/message/store', 'FrontendController@storemessage')->name('frontend.storemessage');
Route::post('/appointment/store', 'FrontendController@storeappointment')->name('frontend.storeappointment');
Route::post('/shareapplication/store', 'FrontendController@storeshareapp')->name('frontend.storeshareapp');
Route::post('/experience/store', 'FrontendController@storeexperience')->name('frontend.storeexperience');

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

Auth::routes(['register'=>false]);

Route::get('user/login','FrontendController@login')->name('login.form');
Route::post('user/login','FrontendController@loginSubmit')->name('login.submit');
Route::get('user/logout','FrontendController@logout')->name('user.logout');

Route::get('user/register','FrontendController@register')->name('register.form');
Route::post('user/register','FrontendController@registerSubmit')->name('register.submit');
// Reset password
Route::post('password-reset', 'FrontendController@showResetForm')->name('password.reset'); 
// Socialite 
Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');

Route::get('/','FrontendController@home')->name('home');

// Frontend Routes
Route::get('/home', 'FrontendController@index');
Route::get('/logo', 'FrontendController@index');
Route::get('/about-us','FrontendController@aboutUs')->name('about-us');
Route::get('/aboutus','FrontendController@showBranch')->name('showBranch');
Route::get('/utilities','FrontendController@about')->name('about');
Route::get('/services','FrontendController@services')->name('services');
Route::get('/appointments','FrontendController@appointments')->name('appointments');
Route::get('/shareapplications','FrontendController@shareapplications')->name('shareapplications');
Route::get('/servicedetail/{service_id}','FrontendController@servicedetail')->name('servicedetail');
Route::get('/packages','FrontendController@packages')->name('packages');
Route::get('/destinationInfo','FrontendController@showDestinationInfo')->name('showDestinationInfo');
Route::get('/medicalAid','FrontendController@showMedicalAid')->name('showMedicalAid');
Route::get('/tourGuide','FrontendController@showTourGuide')->name('showTourGuide');
Route::get('/vehicle','FrontendController@showVehicle')->name('showVehicle');
Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');
Route::get('/bookings','FrontendController@bookings')->name('bookings');
Route::get('/blogdetails','FrontendController@blogdetails')->name('blogdetails');
Route::get('/blogs','FrontendController@blogs')->name('blogs');
Route::get('/interviews','FrontendController@interviews')->name('interviews');
Route::get('/newsdetails','FrontendController@newsdetails')->name('newsdetails');
Route::get('/news','FrontendController@news')->name('news');
Route::get('/testimonials','FrontendController@testimonials')->name('testimonials');
Route::get('/category','FrontendController@category')->name('category');
Route::get('/charity','FrontendController@charity')->name('charity');
Route::get('/gallaries','FrontendController@gallaries')->name('gallaries');
Route::get('/doctors','FrontendController@doctors')->name('doctors');
Route::get('/projects','FrontendController@projects')->name('projects');
Route::get('/courses','FrontendController@courses')->name('courses');
Route::get('/contacts','FrontendController@contact')->name('contacts');
Route::get('/blogdetails/{blogcategory_id}/{blog_id}', [BlogController::class, 'showBlogDetails']);
Route::get('/artdetails/{artcategory_id}/{art_id}', [ArtController::class, 'showArtDetails']);
Route::get('/newsdetails/{news_id}/{newsdetail_id}', [NewsDetailController::class, 'showNewsDetails']);

// Route::get('/contact','FrontendController@contact')->name('contact');
// Route::post('/contact/message','MessageController@store')->name('contact.store');
 // Contact
Route::resource('/contact','MessageController');
Route::resource('/appointment','AppointmentController');
// end contact


// NewsLetter
Route::post('/subscribe','FrontendController@subscribe')->name('subscribe');

// Backend section start

Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/file-manager',function(){
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users','UsersController');
    Route::resource('booking','BookingController');
    Route::get('/bookings', [BookingController::class, 'showBookings'])->name('bookings');
   

    // Banner
    

Route::get('/banners', [BannerController::class, 'showBanners'])->name('banners');
// Route::get('/packages', [PackageController::class, 'showPackages'])->name('packages');
Route::get('/packages', [PackageController::class, 'adminPackages'])->name('admin.packages');
    Route::resource('banner','BannerController');


    // logo
    Route::resource('logo','LogoController');  
    Route::get('/logos', [LogoController::class, 'showLogos'])->name('logos');
    // booking

    
    Route::resource('/news','NewsController');
        
    Route::resource('/shareapp','ShareApplicationController');
    // about us
    Route::resource('aboutus','AboutusController');
    Route::get('/about', [AboutusController::class, 'showAboutus'])->name('about');
    // Utility
    Route::resource('utility','UtilityController');
    Route::get('/utilities', [UtilityController::class, 'showUtility'])->name('utilities');
    // Brand
    Route::resource('brand','BrandController');
    // Profile
    Route::get('/profile','AdminController@profile')->name('admin-profile');
    Route::post('/profile/{id}','AdminController@profileUpdate')->name('profile-update');


    // blog
    Route::resource('/blogcategory','BlogcategoryController');
    Route::resource('/blog','BlogController');

    // artwork
    Route::resource('/artcategory','ArtcategoryController');
    Route::resource('/art','ArtController');
    Route::resource('/interview','InterviewController');
    // Category
    Route::resource('/category','CategoryController');
    // Product
    Route::resource('/product','ProductController');
     // services
    Route::resource('/service','ServiceController');
    // blogs
    Route::resource('/blog','BlogController');
    Route::resource('/blogcategory','BlogcategoryController');

    // packages
// notification
Route::resource('/notification','NotificationController');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
    Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('notification.show');
    Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
    Route::get('/notification/five','NotificationController@notificationFive')->name('notifications.five');

    // Route::resource('/package', PackageController::class);
    Route::resource('/message',MessageController::class);
    Route::resource('/appointment',AppointmentController::class);
    Route::resource('/shareapp',ShareApplicationController::class);
    Route::resource('/experience',ExperienceController::class);
    Route::resource('/package','PackageController');
    // testimonials
    Route::resource('/testimony', TestimonyController::class);
    Route::resource('/testimony','TestimonyController');

// Branches
Route::resource('/branch', BranchController::class);
     Route::resource('/branch','BranchController');



     // destinations
     Route::resource('/destination', DestinationController::class);
     Route::resource('/destination','DestinationController');
    //  destination info
     Route::resource('/destinationInfo', DestinationInfoController::class);
     Route::resource('/destinationInfo','DestinationInfoController');

        //  medical aid
        Route::resource('/medicalAid', MedicalAidController::class);
        Route::resource('/medicalAid','MedicalAidController');
         //  tour guides
         Route::resource('/tourGuide', TourGuideController::class);
         Route::resource('/tourGuide','TourGuideController');
          //  tour guides
          Route::resource('/vehicle', VehicleController::class);
          Route::resource('/vehicle','VehicleController');
     // courses
     Route::resource('/courses','CoursesController');
    Route::resource('/gallary','GallaryController');
    Route::resource('/doctor','DoctorController');
    Route::resource('/charity','CharityController');
   //  news
   Route::resource('/news', NewsController::class);
   Route::resource('/news','NewsController');
       // news details
       Route::resource('/newsdetail', NewsDetailController::class);
       Route::resource('/newsdetail','NewsDetailController');
      //travel package
    Route::resource('/travel','TravelController');
    // Ajax for sub category
    Route::post('/category/{id}/child','CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category','PostCategoryController');
    // Post tag
    Route::resource('/post-tag','PostTagController');
    // Post
    Route::resource('/post','PostController');
    // Message
    Route::resource('/message','MessageController');
    Route::get('/message/five','MessageController@messageFive')->name('messages.five');
    // Appointment
    Route::resource('/appointment','AppointmentController');
    Route::get('/appointment/five','AppointmentController@appointmentFive')->name('appointments.five');
// experience
Route::resource('/experience','ExperienceController');

    // Order
    Route::resource('/order','OrderController');
    // Shipping
    Route::resource('/shipping','ShippingController');
    // Coupon
    Route::resource('/coupon','CouponController');
    // Settings
    Route::get('settings','AdminController@settings')->name('settings');
    Route::post('setting/update','AdminController@settingsUpdate')->name('settings.update');

    // Notification
    Route::get('/notification/{id}','NotificationController@show')->name('admin.notification');
    Route::get('/notifications','NotificationController@index')->name('all.notification');
    Route::delete('/notification/{id}','NotificationController@delete')->name('notification.delete');
    // Password Change
    Route::get('change-password', 'AdminController@changePassword')->name('change.password.form');
    Route::post('change-password', 'AdminController@changPasswordStore')->name('change.password');
    //booking route

    
});










// User section start
Route::group(['prefix'=>'/user','middleware'=>['user']],function(){
    Route::get('/','HomeController@index')->name('user');
     // Profile
     Route::get('/profile','HomeController@profile')->name('user-profile');
     Route::post('/profile/{id}','HomeController@profileUpdate')->name('user-profile-update');
    //  Order
    Route::get('/order',"HomeController@orderIndex")->name('user.order.index');
    Route::get('/order/show/{id}',"HomeController@orderShow")->name('user.order.show');
    Route::delete('/order/delete/{id}','HomeController@userOrderDelete')->name('user.order.delete');
    // Product Review
    Route::get('/user-review','HomeController@productReviewIndex')->name('user.productreview.index');
    Route::delete('/user-review/delete/{id}','HomeController@productReviewDelete')->name('user.productreview.delete');
    Route::get('/user-review/edit/{id}','HomeController@productReviewEdit')->name('user.productreview.edit');
    Route::patch('/user-review/update/{id}','HomeController@productReviewUpdate')->name('user.productreview.update');
    
    // Post comment
    Route::get('user-post/comment','HomeController@userComment')->name('user.post-comment.index');
    Route::delete('user-post/comment/delete/{id}','HomeController@userCommentDelete')->name('user.post-comment.delete');
    Route::get('user-post/comment/edit/{id}','HomeController@userCommentEdit')->name('user.post-comment.edit');
    Route::patch('user-post/comment/udpate/{id}','HomeController@userCommentUpdate')->name('user.post-comment.update');
    
    // Password Change
    Route::get('change-password', 'HomeController@changePassword')->name('user.change.password.form');
    Route::post('change-password', 'HomeController@changPasswordStore')->name('user.change.password');
  //booking route
    
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});