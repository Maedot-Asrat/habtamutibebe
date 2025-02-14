
<div class="container-fluid brand text-white pt-4 pb-5 d-flex justify-content- ">
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


{{-- 
<header class="site-header smaller"> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo">
                    <a href="https://new.habtamutibebe.com/">
                        <img class="logo-static" src="http://new.habtamutibebe.com/wp-content/uploads/2023/12/H-Logo-png.png" alt="Habtamu Tibebe">
                                                        <img class="logo-scroll" src="http://new.habtamutibebe.com/wp-content/uploads/2023/12/H-Logo-png.png" alt="Habtamu Tibebe">
                                                </a>
                </div>
                <span id="menu-btn"></span>
                <!-- mainmenu begin -->
                <nav>
                                            <ul id="mainmenu"><li id="menu-item-1589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-966 current_page_item menu-item-1589 active"><a title="Home" href="https://new.habtamutibebe.com/" class="__mPS2id">Home</a></li>
<li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569"><a title="Biography" href="https://new.habtamutibebe.com/about/" class="__mPS2id">Biography</a></li>
<li id="menu-item-1568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1568 "><span class="arrow"></span><a title="Artworks" href="https://new.habtamutibebe.com/projects/" class="__mPS2id">Artworks </a>
<ul role="menu" class=" sub-menu">
<li id="menu-item-1587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1587"><a title="Abstract" href="https://new.habtamutibebe.com/abstract/" class="__mPS2id">Abstract</a></li>
<li id="menu-item-2119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2119"><a title="Fugurative Art" href="https://new.habtamutibebe.com/fugurativeart/" class="__mPS2id">Fugurative Art</a></li>
<li id="menu-item-2125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2125"><a title="Modern Art" href="https://new.habtamutibebe.com/modern-art/" class="__mPS2id">Modern Art</a></li>
<li id="menu-item-2259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2259"><a title="Commision Art Work" href="https://new.habtamutibebe.com/commision-art-work/" class="__mPS2id">Commision Art Work</a></li>
</ul>
</li>
<li id="menu-item-1570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1570"><a title="Blog" href="https://new.habtamutibebe.com/blog/" class="__mPS2id">Blog</a></li>
<li id="menu-item-1571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1571"><a title="Contact" href="https://new.habtamutibebe.com/contact/" class="__mPS2id">Contact</a></li>
</ul>                       
                </nav>
            </div>
            <!-- mainmenu close -->
        </div>
    </div>
</header>
 --}}






{{-- <header class="site-header "> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo">
                    <a href="https://new.habtamutibebe.com/">
                        <img class="logo-static" src="http://new.habtamutibebe.com/wp-content/uploads/2023/12/H-Logo-png.png" alt="Habtamu Tibebe">
                                                        <img class="logo-scroll" src="http://new.habtamutibebe.com/wp-content/uploads/2023/12/H-Logo-png.png" alt="Habtamu Tibebe">
                                                </a>
                </div>
                <span id="menu-btn"></span>
                <!-- mainmenu begin -->
                <nav>
                                            <ul id="mainmenu"><li id="menu-item-1589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-966 current_page_item menu-item-1589 active"><a title="Home" href="https://new.habtamutibebe.com/" class="__mPS2id">Home</a></li>
<li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569"><a title="Biography" href="https://new.habtamutibebe.com/about/" class="__mPS2id">Biography</a></li>
<li id="menu-item-1568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1568 "><span class="arrow"></span><a title="Artworks" href="https://new.habtamutibebe.com/projects/" class="__mPS2id">Artworks </a>
<ul role="menu" class=" sub-menu">
<li id="menu-item-1587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1587"><a title="Abstract" href="https://new.habtamutibebe.com/abstract/" class="__mPS2id">Abstract</a></li>
<li id="menu-item-2119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2119"><a title="Fugurative Art" href="https://new.habtamutibebe.com/fugurativeart/" class="__mPS2id">Fugurative Art</a></li>
<li id="menu-item-2125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2125"><a title="Modern Art" href="https://new.habtamutibebe.com/modern-art/" class="__mPS2id">Modern Art</a></li>
<li id="menu-item-2259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2259"><a title="Commision Art Work" href="https://new.habtamutibebe.com/commision-art-work/" class="__mPS2id">Commision Art Work</a></li>
</ul>
</li>
<li id="menu-item-1570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1570"><a title="Blog" href="https://new.habtamutibebe.com/blog/" class="__mPS2id">Blog</a></li>
<li id="menu-item-1571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1571"><a title="Contact" href="https://new.habtamutibebe.com/contact/" class="__mPS2id">Contact</a></li>
</ul>                       
                </nav>
            </div>
            <!-- mainmenu close -->
        </div>
    </div>
</header> --}}