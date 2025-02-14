<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <title>About - Habtamu Tibebe</title>
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
  <link href="{{asset('frontend/assets/css/style_main.css')}}" rel="stylesheet">
  <style>
    body{
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: 500;
    color: #ddd;
    line-height: 1.8em;

    }
    #subheader {
    background-image: url(http://new.habtamutibebe.com/wp-content/uploads/2023/12/4-1.jpg);
    background-color: #222222;
}
#subheader {
    background-position: top;
    background-attachment: fixed;
}
section, #subheader {
    -webkit-background-size: 100% !important;
    -moz-background-size: 100% !important;
    -o-background-size: 100% !important;
    background-size: 100% !important;
}
#subheader {
    padding-bottom: 70px;
    padding-top: 90px;
    background: #222;
}
.wpb-content-wrapper {
    margin: 0;
    padding: 0;
    border: none;
    overflow: unset;
    display: block;
}
.vc_custom_1701760778391 {
    background-position: 0 0 !important;
    background-repeat: no-repeat !important;
}
.no-padding {
    padding: 0;
}
.inner-padding{
    padding: 90px 0 90px 0;
}
.inner-padding h1,h3{
    font-family: "Dosis", Arial, Helvetica, sans-serif;
}
.inner-padding h3{
    margin-top: 0;
    font-size: 18px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #fff;
}
#subheader h1, #subheader h4, #subheader .crumb {
    color: #ECEFF3;
}
#subheader .crumb {
    font-size: 10px;
    letter-spacing: 3px;
    margin-top: 85px;
    color: #fff;
    text-transform: uppercase;
}
/* .side-bg {
    position: relative;
}
.side-bg .image-container {
    height: 100%;
    overflow: hidden;
    padding: 0;
    position: absolute;
    top: 0;
} */
  </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

<!-- Brand Start -->
<div class="container-fluid brand text-white pt-4 pb-5 d-flex justify-content-even ">
    <div class="container pb-2 d-none d-lg-flex">
        <div class="d-flex align-items-center justify-content-center">
            @foreach($logos as $logo)
              <img src={{$logo->logo}} class="logo" alt="">
            @endforeach
            
        </div>
        
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light  py-lg-0 px-lg-3">
        <div class="navbar-brand navbar-phone d-lg-none">
            @foreach($logos as $logo)
            <img src={{$logo->logo}} class="logo" alt="">
            @endforeach
        </div>
        
          <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav">
                  <a href="/" class="nav-item nav-link active">HOME</a>
                  <a href="/aboutus" class="nav-item nav-link">BIOGRAPHY</a>
                  <a href="/services" class="nav-item nav-link">BLOG</a>
                  <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ARTWORKS</a>
                      <div class="dropdown-menu bg-light m-0">
                          <a href="/#feat" class="dropdown-item">Abstract</a>
                          <a href="/#container-team" class="dropdown-item">Figurative Art</a>
                          <a href="/testimonials" class="dropdown-item">Modern Art</a>
                          <a href="/appointments" class="dropdown-item">Comission Art</a>
                      </div>
                  </div>
  
                  <a href="/testimonials" class="nav-item nav-link">CONTACT</a>
              </div>
             
              {{-- <div class="ms-auto d-none d-lg-flex">
                  <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                  <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
              </div> --}}
          </div>
    
  
      </nav>
  </div>
  </div>
  <!-- Brand End -->



     <section id="subheader" data-speed="8" data-type="background" style="background-image: url(&quot;https://new.habtamutibebe.com/wp-content/uploads/2023/12/1-1.jpg&quot;); background-position: 50% -59.9167px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <h1>About</h1>
                                            </div>               
                    <ul id="breadcrumbs" class="crumb"><li><a href="https://new.habtamutibebe.com/">Home</a></li><li class="active">About</li></ul> 
                </div>
            </div>
        </div>
    </section>
     <div class="wpb-content-wrapper"><section class="wpb_row vc_row-fluid side-bg no-padding vc_custom_1701760778391 vc_row-has-fill no-padding"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper ">	<!-- Element: OT Quick Office -->
        <div class="row">
            {{-- <div class="row"> --}}
                <div class=" col-lg-5 image-container hidden-xs pull-left col-md-5" style="background-image: url({{asset('frontend/assets/img/habtamu.jpg')}}); height: 606.479px;" data-delay="0"></div>
        
            
                <div class="container col-lg-7">
                    <div class="row">
                        <div class="inner-padding px-5">
                            <div class=" wow fadeInRight animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                <h2>About the Artist</h2><br>
                                <p></p>
                                <h3>Habtamu Tibebe, a talented young artist hailing from, is known for his passion in creating art inspired by the ancient world. Drawing from themes of history, nature, and beauty, his work seeks to highlight the golden age of antiquity while bridging it with the present. Through his pieces, he showcases the wisdom, culture, and civilizations of bygone eras, drawing parallels to our contemporary way of life. Tibebe’s unique use of color, expressive figures, and compositional style seamlessly blend the modern world with the past, offering a fresh perspective that inspires hope, energy, and positive thinking in our day-to-day actions.</h3>
                                <p>                    </p></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        {{-- </div> --}}
        </div>
    
    <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper "></div></div></div></div>
        <!-- Element: OT Heading --> 	 
        <h1 class="ot_custom_heading  " style="text-align: center;">About Me</h1>	
        <!-- Element: OT Line solid --> 	 
        <div class=" separator separator-bold"><span><i class="fa fa-circle"></i></span></div>
        <div class="spacer-single"></div>	      
        <!-- Element: OT Featured Boxes --> 
           <div class="display-table text-light">
                   <div class="col-md-4 text-middle wow fadeInRight animated" data-wow-delay="1s" data-bgimage="url()" style="background-image: url(&quot;&quot;); visibility: visible; animation-delay: 1s; animation-name: fadeInRight;">
                <div class="mask-overlay"></div>
                <div class="padding60 z-index-2">
                                    <p></p><h1><strong>Name:</strong> Habtamu Tibebe Belihu <br>
    <strong>Date of birth:</strong> 30 November 1990<br>
    <strong>Location:</strong> Ethiopia</h1><p></p>                            </div>
             </div>
                   <div class="col-md-4 text-middle wow fadeInRight animated" data-wow-delay="2s" data-bgimage="url()" style="background-image: url(&quot;&quot;); visibility: visible; animation-delay: 2s; animation-name: fadeInRight;">
                <div class="mask-overlay"></div>
                <div class="padding60 z-index-2">
                                    <p></p><h3>He graduated in 2013 from Addis Ababa University's ALLE School of Fine Art and Design, majoring in Visual Communication (Graphic Arts) with a Bachelor of Fine Arts. His four years of study in graphic art and design have equipped him with the skills to bring his ideas to life. Drawing inspiration from history and nature, he immerses himself in antique objects and historical narratives, envisioning the past and blending it with the present in his artwork. His creative process is driven by the desire for freedom of expression, unbounded by limitations. He believes that art transcends barriers like racism, politics, and geography, creating connections that resonate universally.</h3><p></p>                            </div>
             </div>
                   <div class="col-md-4 text-middle wow fadeInRight animated" data-wow-delay="3s" data-bgimage="url()" style="background-image: url(&quot;&quot;); visibility: visible; animation-delay: 3s; animation-name: fadeInRight;">
                <div class="mask-overlay"></div>
                <div class="padding60 z-index-2">
                                    <p></p><h1><strong>Exhibitions:</strong><br>
    Ethiopia: Arts of Ethiopia Sheraton Addis<br>
    Washington DC: Arts for charity<br>
    Sweden: African Fashion Show<br>
    Italy: Imago Mundi Collection<br>
    France: International Art Symposium<br>
    Eygpt: Award winner of  Oscar for African Creativity</h1><p></p>                            </div>
             </div>
             </div>
    
    </div></div></div></div></section><section class="wpb_row vc_row-fluid vc_custom_1440408697407 vc_row-has-fill"><div class="container"><div class="row"><div class="container-4 wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <!-- Element: OT Heading --> 	 
        <h1 class="ot_custom_heading  " style="text-align: center;">Contact Us</h1>	
        <!-- Element: OT Line solid --> 	 
        <div class=" separator separator-bold"><span><i class="fa fa-circle"></i></span></div>
        <div class="spacer-single"></div>	      
        
    
        <div class="info-box padding20 ">
            <i class=" id-color"></i>
            <div class="info-box_text">
                                    </div>
        </div>      
    
    
        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
                <address>
    <div><strong>Phone:+251 913625178 /&nbsp;</strong></div>
    <div><strong>Phone : +251 941139613</strong></div>
    <div><strong>Email:<a href="mailto:info@habtamutibebe.com">info@habtamutibebe.com</a> /&nbsp;</strong></div>
    <div><strong>Email :<a href="mailto:Habtamutibebe4@gmail.com">Habtamutibebe4@gmail.com</a></strong></div>
    <div></div>
    </address>
    
            </div>
        </div>
    </div></div></div></div></div></section><section class="wpb_row vc_row-fluid bg-fixed vc_custom_1702906237449 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper "></div></div></div></div></div></section><section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204650520 no-padding"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper ">			
        <!-- Element: OT Button --> 
                <a href="http://demo.archiwp.com/contact/" target="_self" class="btn btn-line-black btn-big  ">Talk With Us</a>
            
    </div></div></div></div></section>
    </div>



    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->


    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row justify-content-center eng">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="/">Habtamu Tibebe</a>. All Rights Reserved.</p>
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