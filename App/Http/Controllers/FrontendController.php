<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Services;
use App\Models\Packages;
use App\Models\Gallary;
use App\Models\Charity;
use App\Models\CoursesModel;
use App\Models\TravelModel;
use App\Models\News;
use App\Models\NewsDetail;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Logo;
use App\Models\About;
use App\Models\Cart;
use App\Models\Brand;
use App\Models\Doctors;
use App\Models\Settings;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Utility;
use App\Models\Message;
use App\Models\Appointment;
use App\Models\Testimonials;
use App\Models\Destinations;
use App\Models\Experience;
use App\Models\DestinationInfo;
use App\Models\MedicalAid;
use App\Models\Vehicle;
use App\Models\TourGuide;
use App\Models\ShareApplication;
use App\Models\Branch;
use App\Models\Art;
use App\Models\Interview;
use App\Models\Artcategory;
use App\Models\Notification as NotificationModel;
use App\User;
use Auth;
use Session;
use Newsletter;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
   
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }

    public function home(){
        $posts=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $bookings=Booking::orderBy('id','ASC')->limit(10)->get();
        $destinations=Destinations::orderBy('id','ASC')->limit(10)->get();
        $messages=Message::orderBy('id','ASC')->limit(10)->get();
        $appointments=Appointment::orderBy('id','ASC')->limit(50)->get();
        $utilities=Utility::orderBy('id','ASC')->limit(10)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $abouts=About::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners=Banner::where('status','active')->limit(20)->orderBy('id','ASC')->get();
        // return $banner;
        $newsdetails=NewsDetail::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $news=News::where('status','active')->where('is_parent',1)->orderBy('heading','ASC')->get();
        $services=Services::where('status','active')->limit(30)->orderBy('id','ASC')->get();
        $blogs=Blog::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $packages=Packages::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $testimonials=Testimonials::limit(12)->orderBy('id','ASC')->get();
        $gallaries=Gallary::where('status','active')->limit(12)->orderBy('id','ASC')->get();

         $freeproducts=Product::where('condition','Free')->orderBy('id','ASC')->limit(20)->get();

         $paidproducts=Product::where('condition','Paid')->orderBy('id','ASC')->limit(20)->get();

         $soldproducts=Product::where('status','inactive')->orderBy('id','ASC')->limit(8)->get();

         $dealoftheday=Product::where('status','inactive')->orderBy('id','ASC')->limit(8)->get();

         $hotproduct=Product::where('condition','hot')->orderBy('id','ASC')->limit(8)->get();

         $travels=TravelModel::where('status','active')->orderBy('id','ASC')->limit(6)->get();
         
         $products=Product::orderBy('id','ASC')->limit(8)->get();
         $experiences=Experience::orderBy('id','ASC')->limit(8)->get();
         $categories=Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
         $blogcategories=Blogcategory::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
         $destination_infos=DestinationInfo::orderBy('id','ASC')->limit(30)->get();
         $medical_aids=MedicalAid::orderBy('id','ASC')->limit(30)->get();
         $tour_guides=TourGuide::orderBy('id','ASC')->limit(30)->get();
         $vehicles=Vehicle::orderBy('id','ASC')->limit(30)->get();
         $arts=Art::orderBy('id','ASC')->get();
         $artcategories=Artcategory::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
         $share_applications=ShareApplication::orderBy('id','ASC')->limit(30)->get();
         $branches=Branch::orderBy('id','ASC')->limit(30)->get();
         $interviews=Interview::orderBy('id','ASC')->limit(30)->get();
         $doctors = Doctors::where('status','active')->orderBy('id','ASC')->limit(15)->paginate(15);
        // return $category;
        return view('frontend.layouts.master')
                ->with('logos',$logos)
                ->with('posts',$posts)
                ->with('interviews',$interviews)
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('paid_product_lists',$paidproducts)
                ->with('free_product_lists',$freeproducts)
                ->with('product_lists_soldout',$soldproducts)
                ->with('product_lists_hotproduct',$hotproduct)
                ->with('dealoftheday_lists',$dealoftheday)
                ->with('news',$news)
                ->with('newsdetails',$newsdetails)
                ->with('travels_lists',$travels)
                ->with('categories',$categories)
                ->with('blogcategories',$blogcategories)
                ->with('services',$services)
                ->with('blogs',$blogs)
                ->with('doctors',$doctors)
                ->with('packages',$packages)
                ->with('gallary_list',$gallaries)
                ->with('abouts',$abouts)
                ->with('settings',$settings)
                ->with('utilities',$utilities)
                ->with('messages',$messages)
                ->with('appointments',$appointments)
                ->with('shareapplications',$share_applications)
                ->with('testimonials',$testimonials)
                ->with('destinations',$destinations)
                ->with('experiences',$experiences)
                ->with('destination_infos',$destination_infos)
                ->with('medical_aids',$medical_aids)
                ->with('tour_guides',$tour_guides)
                ->with('vehicles',$vehicles)
                ->with('arts',$arts)
                ->with('artcategories',$artcategories)
                ->with('branches',$branches);
    }   

    public function services(){
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $services=Services::orderBy('id','ASC')->limit(16)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.services')
              ->with('services',$services)
              ->with('logos',$logos)
              ->with('settings',$settings);
              
                   
    }
    public function interviews(){
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $interviews=Interview::orderBy('id','ASC')->limit(16)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.interviews')
              ->with('interviews',$interviews)
              ->with('logos',$logos)
              ->with('settings',$settings);
              
                   
    }
    
    public function appointments(){
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $appointments=Appointment::orderBy('id','ASC')->limit(16)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.appointment')
              ->with('appointments',$appointments)
              ->with('logos',$logos)
              ->with('settings',$settings);
              
                   
    }
    public function testimonials(){
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $testimonials=Testimonials::orderBy('id','ASC')->limit(16)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.testimonials')
              ->with('testimonials',$testimonials)
              ->with('logos',$logos)
              ->with('settings',$settings);
              
                   
    }
    public function showBranch(){

        $branches=Branch::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.aboutus')
              ->with('branches',$branches)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function showDestinationInfo(){

        $destination_infos=DestinationInfo::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.destinationInfo')
              ->with('destination_infos',$destination_infos)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function showMedicalAid(){

        $medical_aids=MedicalAid::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.medicalAid')
              ->with('medical_aids',$medical_aids)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function showTourGuide(){

        $tour_guides=TourGuide::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.tourGuide')
              ->with('tour_guides',$tour_guides)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function showVehicle(){

        $vehicles=Vehicle::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.vehicles')
              ->with('vehicles',$vehicles)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function packages(){
        $packages=Packages::orderBy('id','ASC')->limit(16)->get();
        $bookings=Booking::orderBy('id','ASC')->limit(10)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        $utilities=Utility::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.packages')
              ->with('packages',$packages)
              ->with('bookings',$bookings) 
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('utilities',$utilities)
              ->with('banners',$banners);
                   
    }
    public function aboutus(){
        
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        $abouts= About::all();
        $branches=Branch::orderBy('id','ASC')->limit(30)->get();
        $utilities=Utility::orderBy('id','ASC')->limit(10)->get();
        $doctors = Doctors::where('status','active')->orderBy('id','ASC')->limit(15)->paginate(15);
        
        return view('frontend.pages.aboutus')
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('doctors',$doctors)
              ->with('banners',$banners)
              ->with('utilities',$utilities)
              ->with('branches',$branches)
              ->with('abouts',$abouts);

                   
    }
    public function about(){
        
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        $abouts= About::all();
        $branches=Branch::orderBy('id','ASC')->limit(30)->get();
        $utilities=Utility::orderBy('id','ASC')->limit(10)->get();
        return view('frontend.layouts.about')
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners)
              ->with('utilities',$utilities)
              ->with('branches',$branches)
              ->with('abouts',$abouts);

                   
    }
    public function bookings(){
        $packages=Packages::orderBy('id','ASC')->limit(16)->get();
        $bookings=Booking::orderBy('id','ASC')->limit(10)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.packages')
              ->with('packages',$packages)
              ->with('bookings',$bookings) 
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function shareapplications(){
       $shareapplications=ShareApplication::orderBy('id','ASC')->limit(30)->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.applicationform')
                ->with('shareapplications',$shareapplications)
              ->with('settings',$settings)
              ->with('logos',$logos)
              ->with('banners',$banners);
                   
    }
    public function storebooking(Request $request)
    {
        $banners = Banner::all();
        
        $request->validate([
            'phone' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'package_id' => 'nullable|exists:packages,id',
            'package_name' => 'nullable|exists:packages,title',
            'child_package_id' => 'nullable|exists:packages,id',
        ]);

        $booking = new Booking([
            'phone' => $request->phone,
            'full_name' => $request->full_name,
            'package_id' => $request->package_id,
            'package_name' => $request->package_name,
        ]);

        $booking->save();

        // Create a new notification
        $notificationData = [
            'notifiable_id' => $booking->id,
            'notifiable_type' => Booking::class,
            'data' => json_encode('A new booking has been created.'),
        ];

        NotificationModel::create($notificationData);

        return redirect()->route('packages')->with('banners', $banners)->with('success', 'Booking created successfully');
    }

    public function storemessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'email|required',
            'message' => 'required|min:20|max:200',
            'subject' => 'string|nullable',
            'phone' => 'numeric|nullable'
        ]);
    
        // Get all request data
        $data = $request->all();
    
        // Set a default value for subject if it is not provided
        if (!isset($data['subject'])) {
            $data['subject'] = 'Message from User'; // Default value
        }
    
        // Create the message
        $status = Message::create($data);
    
        if ($status) {
            request()->session()->flash('success', 'Your Message successfully Delivered!');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
    
        return redirect()->route('home')->with('success', 'Message Sent');
    }
    
    public function storeappointment(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'email|nullable',
            'date' => 'string|nullable',
            'time' => 'string|nullable',
            'message' => 'nullable|min:10|max:200',
            'service' => 'string|nullable',
            'phone' => 'numeric|required'
        ]);
    
        // Get all request data
        $data = $request->all();
    
     
        $appointment = new Appointment([
            'phone' => $request->phone,
            'name' => $request->name,
            'email' => $request->email,
            'date'=> $request->date,
            'time'=> $request->time,
            'message' => $request->message,
            'service' => $request->service,
        ]);

        $appointment->save();
        $notificationData = [
            'notifiable_id' => $appointment->id,
            'notifiable_type' => Appointment::class,
            'data' => json_encode('A new appointment has been created.'),
        ];

        NotificationModel::create($notificationData);
    
        return redirect()->route('home')->with('success', 'Appointment Scheduled');
    }


    public function storeshareapp(Request $request) {
        $this->validate($request, [
            'name_to_grandmother' => 'string|nullable|min:2',
            'region' => 'string|nullable',
            'city' => 'string|nullable',
            'kebele' => 'string|nullable',
            'house_number' => 'string|nullable',
            'po_sa_number' => 'string|nullable',
            'mobile_phone' => 'string|nullable',
            'tax_id' => 'string|nullable',
            'id_number' => 'string|nullable',
            'number_of_shares' => 'integer|nullable',
            'total_price' => 'numeric|nullable',
            'source_of_info' => 'string|nullable',
            'buyer_signature' => 'string|nullable'
        ]);

        // Collect all request data
        $data = $request->all();

       

        // Create the application record
        $status = ShareApplication::create($data);

        if ($status) {
            request()->session()->flash('success', 'New Share Application successfully submitted!');
        } else {
            request()->session()->flash('error', 'Error occurred, please try again!');
        }

        return redirect()->route('home')->with('success', 'Share Application Submitted');
    }
    public function storeexperience(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'email|required',
            'place' => 'string|nullable',
            'phone' => 'numeric|nullable'
        ]);
    
        // Get all request data
        $data = $request->all();
        $experience = new Experience([
            'phone' => $request->phone,
            'name' => $request->name,
            'place' => $request->place,
            'email' => $request->email,
        ]);

        $experience->save();
       
        // Create the experience
        // $status = Experience::create($data);

    
        // if ($status) {
        //     request()->session()->flash('success', 'Your experience successfully Delivered!');
        // } else {
        //     request()->session()->flash('error', 'Error occurred, Please try again!');
        // }
        $notificationData = [
            'notifiable_id' => $experience->id,
            'notifiable_type' => Experience::class,
            'data' => json_encode('A person wants to share experience.'),
        ];

        NotificationModel::create($notificationData);

    
        return redirect()->route('home')->with('success', 'experience Sent');
    }
    


    public function blogdetails(){
        $blogs=Blog::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $blogcategories=Blogcategory::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.blogdetail')
              ->with('blogs',$blogs)
              ->with('blogcategories',$blogcategories)
              ->with('settings',$settings)
              ->with('logos',$logos);
                   
    }
    
    public function blogs(){
        $blogs=Blog::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $blogcategories=Blogcategory::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.blogs')
              ->with('blogs',$blogs)
              ->with('blogcategories',$blogcategories)
              ->with('settings',$settings)
              ->with('logos',$logos);
                   
    }
    public function servicedetail($service_id){
        $service = Services::find($service_id);
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        $banners= Banner::all();
        return view('frontend.pages.servicedetail')
             ->with('service',$service)
              ->with('settings',$settings)
              ->with('logos',$logos)

              ->with('banners',$banners);

    }

    public function newsdetails(){
        $newsdetails=NewsDetails::where('status','active')->limit(12)->orderBy('id','ASC')->get();
        $news=News::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        $settings=Settings::orderBy('id','ASC')->limit(10)->get();
        $logos=Logo::where('status','active')->orderBy('id','ASC')->limit(10)->get();
        return view('frontend.pages.newsdetail')
              ->with('newsdetails',$newsdetails)
              ->with('news',$news)
              ->with('settings',$settings)
              ->with('logos',$logos);
                   
    }
    public function showsettings(){
        $settings=Settings::all();
        return view('frontend.layouts.footer')->with('settings',$settings);
    }
    public function category(){
        $categorys = Category::where('status','active')->orderBy('id','ASC')->limit(8)->paginate(8);

        return view('frontend.pages.category')
                    ->with('category_lists',$categorys);
    }
    public function gallaries(){
        $products=Product::orderBy('id','ASC')->limit(16)->get();
        $gallaries = Gallary::where('status','active')->orderBy('id','ASC')->limit(15)->paginate(15);
        
        return view('frontend.pages.gallaries')
                    ->with('gallary_lists',$gallaries)
                    ->with('product_lists',$products);
    }
    public function doctors(){
        // $products=Product::orderBy('id','ASC')->limit(16)->get();
        $doctors = Doctors::where('status','active')->orderBy('id','ASC')->limit(15)->paginate(15);
        
        return view('frontend.layouts.team')
                    ->with('doctors',$doctors);
    }
    public function charity(){
        $charitys = Charity::where('status','active')->orderBy('id','ASC')->paginate(15);

        return view('frontend.pages.charity')
                    ->with('charitys_lists',$charitys);
    }
    // this is for cources
    public function courses(){
        $paid_product_lists = Product::where('condition','Paid')->orderBy('id','ASC')->limit(100)->paginate(20);

        return view('frontend.pages.courses')
                    ->with('paid_product_lists',$paid_product_lists);
    }
    public function projects(){
        return view('frontend.pages.projects');
    }

    public function contact(){
        $products=Product::orderBy('id','ASC')->limit(16)->get();

        return view('frontend.pages.contact')
                   ->with('product_lists',$products);
    }

    public function productDetail($slug){
        $product_detail= Product::getProductBySlug($slug);
        // dd($product_detail);
        $products=Product::orderBy('id','ASC')->limit(16)->get();
        return view('frontend.pages.product_detail')
               ->with('product_detail',$product_detail)
               ->with('product_lists',$products);
    }
     public function travelDetail($slug){
        $travel_detail= TravelModel::getTravelBySlug($slug);
        // dd($product_detail);
        return view('frontend.pages.travel_detail')->with('travel_detail',$travel_detail);
    }

    public function productGrids(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(16)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(9);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function travelGrids(){
        $travel=TravelModel::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $travel->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $travel=$travel->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $travel->whereBetween('price',$price);
        }

        $recent_products=TravelModel::where('status','active')->orderBy('id','ASC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $travel=$travel->where('status','active')->paginate($_GET['show']);
        }
        else{
            $travel=$travel->where('status','active')->paginate(3);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.travel-grids')->with('travel',$travel)->with('recent_products',$recent_products);
    }
    public function productLists(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids)->paginate;
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(16)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(16);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productFilter(Request $request){
            $data= $request->all();
            // return $data;
            $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

            $catURL="";
            if(!empty($data['category'])){
                foreach($data['category'] as $category){
                    if(empty($catURL)){
                        $catURL .='&category='.$category;
                    }
                    else{
                        $catURL .=','.$category;
                    }
                }
            }

            $brandURL="";
            if(!empty($data['brand'])){
                foreach($data['brand'] as $brand){
                    if(empty($brandURL)){
                        $brandURL .='&brand='.$brand;
                    }
                    else{
                        $brandURL .=','.$brand;
                    }
                }
            }
            // return $brandURL;

            $priceRangeURL="";
            if(!empty($data['price_range'])){
                $priceRangeURL .='&price='.$data['price_range'];
            }
            if(request()->is('e-shop.loc/product-grids')){
                return redirect()->route('product-grids',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
            else{
                return redirect()->route('product-lists',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('ASCription','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','ASC')
                    ->paginate('9');
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }

    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(3)->get();
        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productCat(Request $request){
        $products=Category::getProductByCat($request->slug);
        // return $request->slug;
        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productSubCat(Request $request){
        $products=Category::getProductBySubCat($request->sub_slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','ASC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }

    }

    // public function blog(){
    //     $post=Post::query();
        
    //     if(!empty($_GET['category'])){
    //         $slug=explode(',',$_GET['category']);
    //         // dd($slug);
    //         $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
    //         return $cat_ids;
    //         $post->whereIn('post_cat_id',$cat_ids);
    //         // return $post;
    //     }
    //     if(!empty($_GET['tag'])){
    //         $slug=explode(',',$_GET['tag']);
    //         // dd($slug);
    //         $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
    //         // return $tag_ids;
    //         $post->where('post_tag_id',$tag_ids);
    //         // return $post;
    //     }

    //     if(!empty($_GET['show'])){
    //         $post=$post->where('status','active')->orderBy('id','ASC')->paginate($_GET['show']);
    //     }
    //     else{
    //         $post=$post->where('status','active')->orderBy('id','ASC')->paginate(9);
    //     }
    //     // $post=Post::where('status','active')->paginate(8);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
    //     $products=Product::orderBy('id','ASC')->limit(16)->get();
    //     return view('frontend.pages.blog')->with('posts',$post)
    //     ->with('recent_posts',$rcnt_post)
    //     ->with('product_lists',$products);
    // }

    // public function blogDetail($slug){
    //     $post=Post::getPostBySlug($slug);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
    //     // return $post;
    //     $products=Product::orderBy('id','ASC')->limit(16)->get();
    //     return view('frontend.pages.blog-detail')
    //        ->with('post',$post)
    //        ->with('recent_posts',$rcnt_post)
    //        ->with('product_lists',$products);

    // }

    // public function blogSearch(Request $request){
    //     // return $request->all();
    //     $rcnt_post=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
    //     $posts=Post::orwhere('title','like','%'.$request->search.'%')
    //         ->orwhere('quote','like','%'.$request->search.'%')
    //         ->orwhere('summary','like','%'.$request->search.'%')
    //         ->orwhere('ASCription','like','%'.$request->search.'%')
    //         ->orwhere('slug','like','%'.$request->search.'%')
    //         ->orderBy('id','ASC')
    //         ->paginate(8);
    //     return view('frontend.pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    // }

    // public function blogFilter(Request $request){
    //     $data=$request->all();
    //     // return $data;
    //     $catURL="";
    //     if(!empty($data['category'])){
    //         foreach($data['category'] as $category){
    //             if(empty($catURL)){
    //                 $catURL .='&category='.$category;
    //             }
    //             else{
    //                 $catURL .=','.$category;
    //             }
    //         }
    //     }

    //     $tagURL="";
    //     if(!empty($data['tag'])){
    //         foreach($data['tag'] as $tag){
    //             if(empty($tagURL)){
    //                 $tagURL .='&tag='.$tag;
    //             }
    //             else{
    //                 $tagURL .=','.$tag;
    //             }
    //         }
    //     }
    //     // return $tagURL;
    //         // return $catURL;
    //     return redirect()->route('blog',$catURL.$tagURL);
    // }

    // public function blogByCategory(Request $request){
    //     $post=PostCategory::getBlogByCategory($request->slug);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
    //     return view('frontend.pages.blog')->with('posts',$post->post)->with('recent_posts',$rcnt_post);
    // }

    // public function blogByTag(Request $request){
    //     // dd($request->slug);
    //     $post=Post::getBlogByTag($request->slug);
    //     // return $post;
    //     $rcnt_post=Post::where('status','active')->orderBy('id','ASC')->limit(3)->get();
    //     return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    // }

    // Login
    public function login(){
        $products=Product::orderBy('id','ASC')->limit(16)->get();
        return view('frontend.pages.login')
        ->with('product_lists',$products);
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            return redirect()->route('user');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','You are Successfully registered Thank You!');
            return redirect()->route('login.form');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.old-reset');
    }

    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Please check your email');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Something went wrong! please try again');
                }
            }
            else{
                request()->session()->flash('error','Already Subscribed');
                return back();
            }
    }
    
}
