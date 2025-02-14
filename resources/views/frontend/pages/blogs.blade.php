{{-- <h2 class="text-center pt-5 mb-2 display-4 eng">
  <span class="line-with-circles line-with-circles-left"></span>
  Blogs
  <span class="line-with-circles line-with-circles-right"></span>
</h2>
<h2 class="text-center pt-5 mb-2 display-4 amh">
  <span class="line-with-circles line-with-circles-left"></span>
  ዜና
  <span class="line-with-circles line-with-circles-right"></span>
</h2>
<div class="row justify-content-center px-3 ml-5 mr-5 eng">
  @php
    $totalBlogs = $blogs->count();
  @endphp
  @foreach($blogcategories->where('class', 'eng') as $blogcategory)
    @foreach($blogs->where('blogcat_id', $blogcategory->id) as $index => $blog)
      @php
        $isSingleBlog = $totalBlogs == 1;
      @endphp
      <div class="col-lg-5 mx-3 col-md-6 mb-4">
        <div class="blog-card h-100 p-0 d-flex flex-column justify-content-between blog-container" data-url="{{ url('/blogdetails/' . $blogcategory->id . '/' . $blog->id) }}">
          <div class="blog-thumb--style">
            <img src="{{ $blogcategory->thumbnail }}" class="blog-image" alt="image">
          </div>
          <div class="blog-content--style p-4 d-flex flex-column justify-content-between flex-grow-1">
            <h3 class="title blog-title">{{ $blogcategory->title }}</h3>
            <p>{{ $blogcategory->summary }}</p>
            <div class="meta-post d-flex flex-wrap justify-content-between mt-auto">
              <span class="meta-user"></span>
              <span class="meta-user">{{ $blog->publish_date }}</span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach
</div>
<div class="row justify-content-center px-3 ml-5 mr-5 amh">
  @php
    $totalBlogs = $blogs->count();
  @endphp
  @foreach($blogcategories->where('class', 'amh') as $blogcategory)
    @foreach($blogs->where('blogcat_id', $blogcategory->id) as $index => $blog)
      @php
        $isSingleBlog = $totalBlogs == 1;
      @endphp
      <div class="col-lg-5 mx-3 col-md-6 mb-4">
        <div class="blog-card h-100 p-0 d-flex flex-column justify-content-between blog-container" data-url="{{ url('/blogdetails/' . $blogcategory->id . '/' . $blog->id) }}">
          <div class="blog-thumb--style">
            <img src="{{ $blogcategory->thumbnail }}" class="blog-image" alt="image">
          </div>
          <div class="blog-content--style p-4 d-flex flex-column justify-content-between flex-grow-1">
            <h3 class="title blog-title">{{ $blogcategory->title }}</h3>
            <p>{{ $blogcategory->summary }}</p>
            <div class="meta-post d-flex flex-wrap justify-content-between mt-auto">
              <span class="meta-user"></span>
              <span class="meta-user">{{ $blog->publish_date }}</span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach
</div>
<script>
  $(document).ready(function() {
    $('.blog-container').click(function() {
      window.location = $(this).data('url');
    });
  });
</script>

<style>
  .blog-card {
    background-color: #fff;
    box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.2);
    margin: 1rem;
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  .blog-content--style {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }
  .experience {
    background-color: #f79730e7;
    height: 50vh;
  }
  .blog {
    background-color: rgba(255, 255, 255, 0.8);
    min-height: 100vh;
    position: relative;
    color: black;
    text-align: center;
    padding: 30px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .blog-thumb--style {
    width: 100%;
    height: 300px;
    overflow: hidden;
  }
  .blog-thumb--style img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .header-image {
    background-color: rgb(223, 105, 81);
  }
  .blog-content {
    padding: 15px;
    text-align: justify;
  }
  .blog-content .btn {
    color: #000;
    text-align: center;
    font-weight: 900;
    text-transform: capitalize;
  }
  .blog-content--style .title {
    text-align: center;
  }
  .blog-content--style .title a {
    font-weight: bold;
    font-size: x-large;
    color: #000;
  }
  .blog-title {
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: normal;
  }
  @media (max-width: 768px) {
    .blog-card {
      width: 70vw;
      justify-content: center;
      align-items: center;
    }
  }
</style> --}}

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


<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-image: url(&quot;https://demo.archiwp.com/wp-content/uploads/2015/07/subheader-4.jpg&quot;); background-position: 50% -5.5px;">
  <div class="container">
      <div class="row">
          <div class="col-md-12">       
    <div class="title-wrap">
                  <h1>Blog</h1>
                                      </div>
              <ul class="crumb"><li><a rel="v:url" property="v:title" href="https://demo.archiwp.com/">Home</a></li> <b>/</b> <li class="active">Blog</li></ul>                </div>
      </div>
  </div>
</section>
<div id="content">
  <div class="container">
      <div class="row">
          
          <div class="col-md-8">
              <ul class="blog-list">
                    
                  <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; opacity: 0;">
  <div class="post-content">
      <div class="post-image">
                                                        
                                                                  <img src="https://demo.archiwp.com/wp-content/uploads/2015/07/pic-blog-4.jpg" alt="">
                                  
                                  </div>
      <div class="date-box">
          <div class="day">13</div>
          <div class="month">Aug</div>
      </div>
      <div class="post-text">
          <h3><a href="https://demo.archiwp.com/the-5-secrets-to-pulling-off-simple-minimal-design/">The 5 Secrets to Pulling Off Simple, Minimal Design</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mattis ligula pellentesque nisi tristique porta. Vestibulum eget nisi est. Vivamus pharetra mattis ornare. Vestibulum ante ipsum primis in faucibus...</p>
      </div>
      <a href="https://demo.archiwp.com/the-5-secrets-to-pulling-off-simple-minimal-design/" class="btn-more">Read More</a>
  </div>
</li>

                  <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
  <div class="post-content">
      <div class="post-image">
        <div id="owl-demo-28" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                                              
                                                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3000px; left: 0px; display: block; transition: 800ms; transform: translate3d(-750px, 0px, 0px);"><div class="owl-item" style="width: 750px;"><div class="item"><img src="https://demo.archiwp.com/wp-content/uploads/2015/07/pic-blog-2.jpg" alt=""></div></div><div class="owl-item" style="width: 750px;"><div class="item"><img src="https://demo.archiwp.com/wp-content/uploads/2015/07/pic-blog-3.jpg" alt=""></div></div></div></div> 
                                                             
                                                       
                                      <div class="owl-controls"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div></div></div>
      </div>
      <div class="date-box">
          <div class="day">12</div>
          <div class="month">Aug</div>
      </div>
      <div class="post-text">
          <h3><a href="https://demo.archiwp.com/9-unique-and-unusual-ways-to-display-your-tv/">9 Unique and Unusual Ways to Display Your TV</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mattis ligula pellentesque nisi tristique porta. Vestibulum eget nisi est. Vivamus pharetra mattis ornare. Vestibulum ante ipsum primis in faucibus...</p>
      </div>
      <a href="https://demo.archiwp.com/9-unique-and-unusual-ways-to-display-your-tv/" class="btn-more">Read More</a>
  </div>
</li>
<script type="text/javascript">
(function($){
"use strict";
$(document).ready(function() {
    $("#owl-demo-28").owlCarousel({        
      items : 1,
      autoPlay: true,
      slideSpeed : 200,
      paginationSpeed : 800,
      rewindSpeed : 1000,
      singleItem:true,
      transitionStyle : false,
    });
  });
})(this.jQuery);
</script> 
                  <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
  <div class="post-content">
      <div class="post-image">
                                                        
                                                                  <img src="https://demo.archiwp.com/wp-content/uploads/2015/07/pic-blog-1.jpg" alt="">
                                  
                                  </div>
      <div class="date-box">
          <div class="day">11</div>
          <div class="month">Aug</div>
      </div>
      <div class="post-text">
          <h3><a href="https://demo.archiwp.com/5-things-that-take-a-room-from-good-to-great/">5 Things That Take a Room from Good to Great</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mattis ligula pellentesque nisi tristique porta. Vestibulum eget nisi est. Vivamus pharetra mattis ornare. Vestibulum ante ipsum primis in faucibus...</p>
      </div>
      <a href="https://demo.archiwp.com/5-things-that-take-a-room-from-good-to-great/" class="btn-more">Read More</a>
  </div>
</li>

                   
      
                          
              </ul>

              <div class="pagination text-center ">
                  <ul class="pagination">
                      
<li><span aria-current="page" class="page-numbers current">1</span></li>
<li><a class="page-numbers" href="https://demo.archiwp.com/blog/page/2/">2</a></li>
<li><a class="next page-numbers" href="https://demo.archiwp.com/blog/page/2/"><i class="fa fa-angle-double-right"></i></a></li>
</ul>
                  
              </div>
          </div> 

                          <div class="col-md-4">
                  <div id="sidebar" class="sidebar">
<div id="search-2" class="widget widget_search"><form role="search" method="get" action="https://demo.archiwp.com/">  
    <input type="search" id="search" class="search-field form-control" value="" name="s" placeholder="type to search…">
    <button id="btn-search" type="submit"></button>
      <div class="clearfix"></div>
  </form></div>





  <div id="recent-posts-3" class="widget widget_recent_entries">
  <h4>RECENT BLOGS</h4><div class="small-border"></div>
  <ul>
                    <li>
        <a href="https://demo.archiwp.com/the-5-secrets-to-pulling-off-simple-minimal-design/">The 5 Secrets to Pulling Off Simple, Minimal Design</a>
                </li>
                    <li>
        <a href="https://demo.archiwp.com/9-unique-and-unusual-ways-to-display-your-tv/">9 Unique and Unusual Ways to Display Your TV</a>
                </li>
                    <li>
        <a href="https://demo.archiwp.com/5-things-that-take-a-room-from-good-to-great/">5 Things That Take a Room from Good to Great</a>
                </li>
                    <li>
        <a href="https://demo.archiwp.com/our-favorite-home-decor-trends-of-the-year/">Our Favorite Home Decor Trends of the Year</a>
                </li>
                    <li>
        <a href="https://demo.archiwp.com/how-to-make-a-huge-impact-with-multiples/">How to Make a Huge Impact With Multiples</a>
                </li>
        </ul>

  </div>
   </div>
              </div>
                    

      </div>
  </div>

</div>
@include('frontend.layouts.footer')

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