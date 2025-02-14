<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <title>Ibn Sina Medical Group</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="{{asset('frontend/assets/img/logo_icon.png')}}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
      rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <!-- Libraries Stylesheet -->
  <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="eng">
                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Woreda Jinal, kebele 14, Harar, Ethiopia</small>
                <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 24 hours</small>
            </div>
            <div class="amh">
             
              <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>ጂናል ወረዳ, ቀበሌ 14, ሀረር, ኢትዮጵያ</small>
              
              <small class="me-3"><i class="fa fa-clock me-2"></i>ሰኞ - እሁድ 24 ሰአት</small>
          </div>
            <nav class="breadcrumb mb-0">
              <div class="language-select d-inline-block">
                  <span id="english-select" class="language-option active">English</span> | 
                  <span id="amharic-select" class="language-option">Amharic</span>
              </div>
          </nav>
        </div>
    </div>
  </div>
  <!-- Topbar End -->
  
  
  <!-- Brand Start -->
  <div class="container-fluid brand text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0 eng">Call Now</h5>
                    <h5 class="text-white mb-0 amh">አሁኑኑ ይደዉሉ</h5>
                    @foreach($settings as $setting)
                      <span>{{$setting->phone}}</span>
                    @endforeach   
                </div>
            </div>
  
            <img src="{{asset('frontend/assets/img/ibn_sina_log.png')}}" class="logo" alt="">
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0 eng">Mail Now</h5>
                    <h5 class="text-white mb-0 amh">መልዕክት ያስቀምጡ</h5>
                    @foreach($settings as $setting)
                    <span>{{$setting->email}}</span>
                  @endforeach   
                </div>
            </div>
        </div>
        
    </div>
  </div>
  <!-- Brand End -->
  
  
  <!-- Navbar Start -->
  <div class="container-fluid sticky-top eng">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light  py-lg-0 px-lg-3">
          <div class="navbar-brand d-lg-none">
              <img src="{{asset('frontend/assets/img/ibn_sina_log.png')}}" class="logo" alt="">
          </div>
          
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/aboutus" class="nav-item nav-link">About</a>
                    <a href="/services" class="nav-item nav-link">Services</a>
                    <a href="/#portfolio" class="nav-item nav-link active">News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="/#feat" class="dropdown-item">Features</a>
                            <a href="/#container-team" class="dropdown-item">Our Team</a>
                            <a href="/testimonials" class="dropdown-item">Testimonial</a>
                            <a href="/appointments" class="dropdown-item">Appoinment</a>
                        </div>
                    </div>
  
                    <a href="/#footer" class="nav-item nav-link">Contact</a>
                </div>
               
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
      
  
        </nav>
    </div>
  </div>
  
  <div class="container-fluid sticky-top amh">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light  py-lg-0 px-lg-3">
            <div class="navbar-brand d-lg-none">
                <img src="{{asset('frontend/assets/img/ibn_sina_log.png')}}" class="logo" alt="">
            </div>
            
              <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav">
                      <a href="/" class="nav-item nav-link">መግቢያ</a>
                      <a href="/aboutus" class="nav-item nav-link">ስለ እኛ</a>
                      <a href="/services" class="nav-item nav-link">አገልግሎቶች</a>
                      <a href="/#portfolio" class="nav-item nav-link active">ዜና</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ገጾች</a>
                          <div class="dropdown-menu bg-light m-0">
                              <a href="/#feat" class="dropdown-item">መገለጫዎች</a>
                              <a href="/#container-team" class="dropdown-item">ዶክቶሮች</a>
                              <a href="/testimonial" class="dropdown-item">ምስክርነት</a>
                              <a href="/appoinment" class="dropdown-item">ቀጠሮ ማስያዝ</a>
                          </div>
                      </div>
  
                      <a href="/#footer" class="nav-item nav-link">ያግኙን</a>
                  </div>
                 
                  <div class="ms-auto d-none d-lg-flex">
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                  </div>
              </div>
        
    
          </nav>
      </div>
    </div>
    
    
  <!-- Navbar End -->
  

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">{{$news->Heading}}</h1>

        </div>
    </div>
    <!-- Page Header End -->

    <div class="news-detail-item mx-lg-5 mx-sm-2 mb-3" >
        <div class=" mb-4">
 <!-- Dynamic Title -->
            <h1> {{ $newsdetail->sub_heading }} </h1>
            <div class="author-date">
                <span class="float-right">{{ $newsdetail->publish_date }}</span>
            </div>


            
            <div class=" gallery d-lg-flex align-items-center d-sm-flex-column mb-2">
                @if($newsdetail->photo1)
                    
                        <img src="{{ $newsdetail->photo1 }}" alt="Image" class="img-fluid">
                    
                @endif
            
                <p class="p-4 justify">{{ $newsdetail->detail }}</p>
            </div>

            <div class="blog-detail-header mb-0">
                <img src="{{ $newsdetail->headerphoto }}" alt="{{ $newsdetail->title }}" class="img-fluid">
            </div>
            <a href="{{ $newsdetail->video_link }}" target="_blank" class="float-right">{{ $newsdetail->sub_heading }}</a>
            

</div>

        </div>
    



    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row justify-content-center eng">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="/">Ibn Sina Medical Group Share Company</a>. All Rights Reserved.</p>
                </div>
               
                
            </div>
            <div class="row justify-content-center amh">
                
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="/">ኢብን ሲና ሜዲካል ግሩፕ አ.ማ</a>. ሙሉ መብቱ የተጠበቀ ነው።</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    @include('frontend.layouts.js')
</body>

</html>