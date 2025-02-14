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
             
    
  
      </nav>
  </div>
  </div>
  <!-- Brand End -->


  <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-image: url(&quot;https://new.habtamutibebe.com/wp-content/uploads/2023/12/3-1.jpg&quot;); background-position: 50% 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="title-wrap">
                    <h1>Blog</h1>
                                        </div> 
                <ul id="breadcrumbs" class="crumb"><li><a href="https://new.habtamutibebe.com/">Home</a></li><li class="active">Blog</li></ul> 
            </div>
        </div>
    </div>
</section>
<div id="content">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <div class="blog-list">
                      
                    <article id="post-2247" class="wow fadeInUp post-2247 post type-post status-publish format-video hentry category-uncategorized post_format-post-format-video animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="post-content">
        <div class="post-image">
                            <div class="fluid-width-video-wrapper"><iframe title="&quot;ስራዎቼ በብዛት የሚያተኩሩት ታሪክ ፣ ውበት እና ተፈጥሮ ላይ ነው &quot;.. ሰዓሊ ሀብታሙ ጥበበ// በጥበብ ሰአት // በእሁድን በ ኢቢኤስ //" src="https://www.youtube.com/embed/ZGQc8-kNMx8?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" name="fitvid0"></iframe></div>                        
                    </div>
        <div class="entry-summary clearfix">
          <div class="date-box">
            <div class="day">19</div>
            <div class="month">Jun</div>
          </div>
          <div class="post-text">
            <h3 class="entry-title"><a href="https://new.habtamutibebe.com/2024/06/19/%e1%88%b5%e1%88%ab%e1%8b%8e%e1%89%bc-%e1%89%a0%e1%89%a5%e1%8b%9b%e1%89%b5-%e1%8b%a8%e1%88%9a%e1%8b%ab%e1%89%b0%e1%8a%a9%e1%88%a9%e1%89%b5-%e1%89%b3%e1%88%aa%e1%8a%ad-%e1%8d%a3-%e1%8b%8d%e1%89%a0/" rel="bookmark">“ስራዎቼ በብዛት የሚያተኩሩት ታሪክ ፣ ውበት እና ተፈጥሮ ላይ ነው “.. ሰዓሊ ሀብታሙ ጥበበ// በጥበብ ሰአት // በእሁድን በ ኢቢኤስ //</a></h3>            <p></p>
          </div>  
        </div><!-- .entry-content -->
        <a href="https://new.habtamutibebe.com/2024/06/19/%e1%88%b5%e1%88%ab%e1%8b%8e%e1%89%bc-%e1%89%a0%e1%89%a5%e1%8b%9b%e1%89%b5-%e1%8b%a8%e1%88%9a%e1%8b%ab%e1%89%b0%e1%8a%a9%e1%88%a9%e1%89%b5-%e1%89%b3%e1%88%aa%e1%8a%ad-%e1%8d%a3-%e1%8b%8d%e1%89%a0/" class="btn-more">Read More</a>
    </div>
</article> 
                    <article id="post-2244" class="wow fadeInUp post-2244 post type-post status-publish format-video hentry category-uncategorized post_format-post-format-video animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="post-content">
        <div class="post-image">
                            <div class="fluid-width-video-wrapper" ><iframe title="የልብ ወግ (YeLeb Weg) መማር አለባቸው እና ሀብታሙ ጥበበ  ክፍል 1 | Maya Media Presents" src="https://www.youtube.com/embed/tU-WrKbg5c4?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" name="fitvid1"></iframe></div>                        
                    </div>
        <div class="entry-summary clearfix">
          <div class="date-box">
            <div class="day">19</div>
            <div class="month">Jun</div>
          </div>
          <div class="post-text">
            <h3 class="entry-title"><a href="https://new.habtamutibebe.com/2024/06/19/%e1%8b%a8%e1%88%8d%e1%89%a5-%e1%8b%88%e1%8c%8d-yeleb-weg-%e1%88%98%e1%88%9b%e1%88%ad-%e1%8a%a0%e1%88%88%e1%89%a3%e1%89%b8%e1%8b%8d-%e1%8a%a5%e1%8a%93-%e1%88%80%e1%89%a5%e1%89%b3%e1%88%99-%e1%8c%a5/" rel="bookmark">የልብ ወግ (YeLeb Weg) መማር አለባቸው እና ሀብታሙ ጥበበ ክፍል 1 | Maya Media Presents</a></h3>            <p></p>
          </div>  
        </div><!-- .entry-content -->
        <a href="https://new.habtamutibebe.com/2024/06/19/%e1%8b%a8%e1%88%8d%e1%89%a5-%e1%8b%88%e1%8c%8d-yeleb-weg-%e1%88%98%e1%88%9b%e1%88%ad-%e1%8a%a0%e1%88%88%e1%89%a3%e1%89%b8%e1%8b%8d-%e1%8a%a5%e1%8a%93-%e1%88%80%e1%89%a5%e1%89%b3%e1%88%99-%e1%8c%a5/" class="btn-more">Read More</a>
    </div>
</article> 
                    <article id="post-2241" class="wow fadeInUp post-2241 post type-post status-publish format-video hentry category-uncategorized post_format-post-format-video animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="post-content">
        <div class="post-image">
                            <div class="fluid-width-video-wrapper"><iframe title="Ethiopian Painter : Habtamu Tibebe  on Kana TV's Masters at Work (KanaTV)" src="https://www.youtube.com/embed/MzprSdDdd3s?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" name="fitvid2"></iframe></div>                        
                    </div>
        <div class="entry-summary clearfix">
          <div class="date-box">
            <div class="day">19</div>
            <div class="month">Jun</div>
          </div>
          <div class="post-text">
            <h3 class="entry-title"><a href="https://new.habtamutibebe.com/2024/06/19/ethiopian-painter-habtamu-tibebe-on-kana-tvs-masters-at-work-kanatv/" rel="bookmark">Ethiopian Painter : Habtamu Tibebe on Kana TV’s Masters at Work (KanaTV)</a></h3>            <p></p>
          </div>  
        </div><!-- .entry-content -->
        <a href="https://new.habtamutibebe.com/2024/06/19/ethiopian-painter-habtamu-tibebe-on-kana-tvs-masters-at-work-kanatv/" class="btn-more">Read More</a>
    </div>
</article> 
                    <article id="post-32" class="wow fadeInUp post-32 post type-post status-publish format-image has-post-thumbnail hentry category-slider tag-css3 tag-html5 post_format-post-format-image animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="post-content">
        <div class="post-image">
                                                          
                                            
                        <a href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/" title="Yemi Alade">
                            <img src="https://new.habtamutibebe.com/wp-content/uploads/2015/08/1.jpg" width="1280" height="720" alt="" title="1">                        </a>
                                    
                                    </div>
        <div class="entry-summary clearfix">
          <div class="date-box">
            <div class="day">13</div>
            <div class="month">Aug</div>
          </div>
          <div class="post-text">
            <h3 class="entry-title"><a href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/" rel="bookmark">Yemi Alade</a></h3>            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mattis ligula pellentesque nisi tristique porta. Vestibulum eget nisi est. Vivamus pharetra mattis ornare. Vestibulum ante ipsum primis in faucibus...</p>
          </div>  
        </div><!-- .entry-content -->
        <a href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/" class="btn-more">Read More</a>
    </div>
</article> 
                     
        
                            
                </div>

                <div class="pagination text-center ">
                    <ul class="pagination">
                                            </ul>
                </div>
            </div> 

                            <div class="col-md-4">
                  	<div id="sidebar" class="sidebar">
	<div id="block-2" class="widget widget_block widget_search"><form role="search" method="get" action="https://new.habtamutibebe.com/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label class="wp-block-search__label" for="wp-block-search__input-1">Search</label><div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="" value="" type="search" name="s" required=""><button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button></div></form></div><div id="block-3" class="widget widget_block"><div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"><h2 class="wp-block-heading">Recent Posts</h2><ul class="wp-block-latest-posts__list wp-block-latest-posts"><li><a class="wp-block-latest-posts__post-title" href="https://new.habtamutibebe.com/2024/06/19/%e1%88%b5%e1%88%ab%e1%8b%8e%e1%89%bc-%e1%89%a0%e1%89%a5%e1%8b%9b%e1%89%b5-%e1%8b%a8%e1%88%9a%e1%8b%ab%e1%89%b0%e1%8a%a9%e1%88%a9%e1%89%b5-%e1%89%b3%e1%88%aa%e1%8a%ad-%e1%8d%a3-%e1%8b%8d%e1%89%a0/">“ስራዎቼ በብዛት የሚያተኩሩት ታሪክ ፣ ውበት እና ተፈጥሮ ላይ ነው “.. ሰዓሊ ሀብታሙ ጥበበ// በጥበብ ሰአት // በእሁድን በ ኢቢኤስ //</a></li>
<li><a class="wp-block-latest-posts__post-title" href="https://new.habtamutibebe.com/2024/06/19/%e1%8b%a8%e1%88%8d%e1%89%a5-%e1%8b%88%e1%8c%8d-yeleb-weg-%e1%88%98%e1%88%9b%e1%88%ad-%e1%8a%a0%e1%88%88%e1%89%a3%e1%89%b8%e1%8b%8d-%e1%8a%a5%e1%8a%93-%e1%88%80%e1%89%a5%e1%89%b3%e1%88%99-%e1%8c%a5/">የልብ ወግ (YeLeb Weg) መማር አለባቸው እና ሀብታሙ ጥበበ ክፍል 1 | Maya Media Presents</a></li>
<li><a class="wp-block-latest-posts__post-title" href="https://new.habtamutibebe.com/2024/06/19/ethiopian-painter-habtamu-tibebe-on-kana-tvs-masters-at-work-kanatv/">Ethiopian Painter : Habtamu Tibebe on Kana TV’s Masters at Work (KanaTV)</a></li>
<li><a class="wp-block-latest-posts__post-title" href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/">Yemi Alade</a></li>
</ul></div></div></div><div id="block-4" class="widget widget_block"><div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"><h2 class="wp-block-heading">Recent Comments</h2><ol class="wp-block-latest-comments"><li class="wp-block-latest-comments__comment"><article><footer class="wp-block-latest-comments__comment-meta"><span class="wp-block-latest-comments__comment-author">admin</span> on <a class="wp-block-latest-comments__comment-link" href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/#comment-9">Yemi Alade</a></footer></article></li><li class="wp-block-latest-comments__comment"><article><footer class="wp-block-latest-comments__comment-meta"><span class="wp-block-latest-comments__comment-author">admin</span> on <a class="wp-block-latest-comments__comment-link" href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/#comment-8">Yemi Alade</a></footer></article></li></ol></div></div></div><div id="block-5" class="widget widget_block"><div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"><h2 class="wp-block-heading">Archives</h2><ul class="wp-block-archives-list wp-block-archives">	<li><a href="https://new.habtamutibebe.com/2024/06/">June 2024</a></li>
	<li><a href="https://new.habtamutibebe.com/2015/08/">August 2015</a></li>
</ul></div></div></div><div id="block-6" class="widget widget_block"><div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"><h2 class="wp-block-heading">Categories</h2><ul class="wp-block-categories-list wp-block-categories">	<li class="cat-item cat-item-18"><a href="https://new.habtamutibebe.com/category/slider/">slider</a>
</li>
	<li class="cat-item cat-item-1"><a href="https://new.habtamutibebe.com/category/uncategorized/">Uncategorized</a>
</li>
</ul></div></div></div><div id="search-1" class="widget widget_search"><form role="search" method="get" action="https://new.habtamutibebe.com/">  
    	<input type="search" id="search" class="search-field form-control" value="" name="s" placeholder="type to search…">
    	<button id="btn-search" type="submit"></button>
        <div class="clearfix"></div>
    </form></div>
		<div id="recent-posts-1" class="widget widget_recent_entries">
		<h4>RECENT POSTS</h4><div class="small-border"></div>
		<ul>
											<li>
					<a href="https://new.habtamutibebe.com/2024/06/19/%e1%88%b5%e1%88%ab%e1%8b%8e%e1%89%bc-%e1%89%a0%e1%89%a5%e1%8b%9b%e1%89%b5-%e1%8b%a8%e1%88%9a%e1%8b%ab%e1%89%b0%e1%8a%a9%e1%88%a9%e1%89%b5-%e1%89%b3%e1%88%aa%e1%8a%ad-%e1%8d%a3-%e1%8b%8d%e1%89%a0/">“ስራዎቼ በብዛት የሚያተኩሩት ታሪክ ፣ ውበት እና ተፈጥሮ ላይ ነው “.. ሰዓሊ ሀብታሙ ጥበበ// በጥበብ ሰአት // በእሁድን በ ኢቢኤስ //</a>
									</li>
											<li>
					<a href="https://new.habtamutibebe.com/2024/06/19/%e1%8b%a8%e1%88%8d%e1%89%a5-%e1%8b%88%e1%8c%8d-yeleb-weg-%e1%88%98%e1%88%9b%e1%88%ad-%e1%8a%a0%e1%88%88%e1%89%a3%e1%89%b8%e1%8b%8d-%e1%8a%a5%e1%8a%93-%e1%88%80%e1%89%a5%e1%89%b3%e1%88%99-%e1%8c%a5/">የልብ ወግ (YeLeb Weg) መማር አለባቸው እና ሀብታሙ ጥበበ ክፍል 1 | Maya Media Presents</a>
									</li>
											<li>
					<a href="https://new.habtamutibebe.com/2024/06/19/ethiopian-painter-habtamu-tibebe-on-kana-tvs-masters-at-work-kanatv/">Ethiopian Painter : Habtamu Tibebe on Kana TV’s Masters at Work (KanaTV)</a>
									</li>
											<li>
					<a href="https://new.habtamutibebe.com/2015/08/13/the-5-secrets-to-pulling-off-simple-minimal-design/">Yemi Alade</a>
									</li>
					</ul>

		</div></div>
                </div>
                      

        </div>
    </div>

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