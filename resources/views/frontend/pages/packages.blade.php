<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')
@php
$firstBanner = $banners->last();
$fixedbackground=$settings->first();
@endphp
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
    width: 100%;
}

.body {
    background: url({{ $fixedbackground->photo }}) no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
}

.body::before {
    content: "";
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6);
    filter: brightness(60%);
    z-index: -1;
}

.body-overlay {
    padding-top: 0;
    margin-top: 0;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.0);
    z-index: 1;
}

.navbar {
    background-color: #F79630;
}

.navbar .nav-link {
    color: white;
    font-size: large;
    transition: color 0.3s;
}

@media (max-width: 768px) {
    .address-box {
        display: none;
    }
}

.card {
    background: rgba(255, 255, 255, 0.8);
    border: none;
    display: flex;
    flex-direction: column;
}

.card img {
    width: 100%;
    height: 30vh;
}

.card-body {
    background-color: #fff;
    color: black;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-title {
    font-size: 1.5em;
    font-weight: bold;
}

.card-text {
    font-size: 1em;
}

.btn-primary {
    background-color: #FFA500;
    border: none;
}

.btn-primary:hover {
    background-color: #76520e;
    border: none;
}

.button-book {
    background: #F79630;
    border-radius: 0.5em;
    color: #fff;
}

.featured-title-box {
    width: 35vw;
    height: 15vh;
    margin-left: 1em;
}

.featured-title {
    position: relative;
    display: inline-block;
    font-size: 2.5em;
    font-weight: bold;
    color: white;
    padding: 0.5em 1em;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.featured-title::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 300%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.6) 50%, rgba(255, 255, 255, 0.2) 100%);
    transition: left 0.8s ease;
}

.featured-title:hover::before {
    left: 100%;
}

.featured-title::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    width: 50px;
    height: 5px;
    background: rgb(255, 165, 0);
    transform: translateX(-50%);
    transition: width 0.4s ease;
}

.featured-title:hover::after {
    width: 100px;
}



.fh5co-section-gray {
  /* background-color: rgba(255,255,255,0.8); */
  position: relative;
  color: black;
  text-align: center;
  padding: 0px 0;
  display: flex;
  flex-direction: column;
  margin-top: 7vh;
  align-items: center;
  justify-content: center;
}

.fh5co-blog {
  margin-bottom: 60px;
}
.fh5co-blog a img {
  width: 25vw;
  height: 30vh;
}
.fh5co-blog .blog-text {
  margin-bottom: 30px;
  position: relative;
  background: #fff;
  width: 25vw;
  padding: 30px;
  float: right;
  margin-top: -5em;
  border-top-left-radius: 30px;
  border-bottom-right-radius: 30px;
  -webkit-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
  box-shadow: 0px 10px 20px -12px rgba(0, 0, 0, 0.18);
}
.fh5co-blog .blog-text span {
  display: inline-block;
  margin-bottom: 20px;
}
.fh5co-blog .blog-text span.posted_by {
  font-style: italic;
  color: rgba(0, 0, 0, 0.3);
  font-size: 18px;
}
.fh5co-blog .blog-text span.comment {
  float: right;
}
.fh5co-blog .blog-text span.comment a {
  color: rgba(0, 0, 0, 0.3);
}
.fh5co-blog .blog-text span.comment a i {
  color: #ff5722;
  padding-left: 7px;
}
.fh5co-blog .blog-text h3 {
  font-size: 20px;
  margin-bottom: 20px;
  font-weight: 300;
  line-height: 1.5;
}
.fh5co-blog .blog-text h3 a {
  color: rgba(0, 0, 0, 0.6);
}
@media(max-width: 992px) {
  .navbar .navbar-brand{
    display:none;
  }
  .fh5co-blog {
    width: 100%;
  }
  .address-box {
    display: none;
}
.features-packages {
    display: flex;
    padding: 0;
    align-items: center;
    justify-content: center;
    margin-top: 1em;
}
.packages {
    align-items: center;  
    justify-content: center;
    margin-top: 1em;
    width: 100%;
    height: 35vh;
    padding: 0;
    
}
.img-responsive {
    display: none;
}
.image {
    display: none;
}
.featured-title-box {
    width: 80vw;
    height: 20vh;
}

.fh5co-blog .blog-text {
  
  background: #fff;
  position: absolute;
  width: 80vw;
  margin: 2vh;
  padding: 10px;
  float: left;
  border-top-left-radius: 30px;
  border-bottom-right-radius: 30px;
}
.packages-body{
  justify-content: center;
}
}



</style>

<body class="body">
    <div class="body-overlay">
        <div class="navbar-area">
            <div class="topbar py-0">
                <div class="container d-flex justify-content-between align-items-center">
                  @foreach($settings as $setting)
                    <div class="d-flex align-items-center">
                      <a class="navbar-brand" href="/">
                       
                        <img src="{{ asset($setting->logo) }}" alt="logo" style="height: 70px; width:fit-content;">
                      
                      </a>
                    </div>
                    <div class="d-flex align-items-center">
                      <i class="fa fa-map-marker-alt mr-2"></i>
                      <span class="eng">{{ $setting->address }}</span>
                      <span class="amh">3ተኛ ፎቅ, ቢሮ ቁጥር. 304/4 - ቦሌ ፍሬንድሽፕ ህንጻ, ኢትዮጵያ</span>
                    </div>
                   
                    <div class="float-right eng">
                      <a href="/packages" class="btn button-book ml-auto">Book Now</a>
                    </div>
                    <div class="float-right amh">
                      <a href="/packages" class="btn button-book ml-auto">ያስመዝግቡ</a>
                    </div>
                  @endforeach
                  <div class="float-right">
                    <select id="language-select">
                        <option value="english">English</option>
                        <option value="amharic">አማርኛ</option>
                    </select>
                </div>
                </div>
              </div>
        
        <nav class="navbar navbar-expand-lg eng">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-right d-lg-none mx-2">
                <a href="tel:{{$setting->phone}}" style="text-decoration: none; color:white;">
                   Call Us
                </a>
           
              
                <select id="language-select-mobile-amharic">
                    <option value="english">Eng</option>
                    <option value="amharic">አም</option>
                </select>
              
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              
                <div class="navbar-center">
                    <ul class="navbar-nav">
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="/#home">Home</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="/aboutus">About</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="/#services">Services</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="/#blogs">Blogs</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="/#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right address-box">
                    @foreach($settings as $setting)
                    <i class="fas fa-phone-alt mr-2"></i>
                    <a href="tel:{{$setting->phone}}">
                        <span>{{$setting->phone}}</span>
                      </a>
                    @endforeach
                </div>
            </div>
        </nav>

        {{-- amharic --}}
        <nav class="navbar navbar-expand-lg amh">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-right d-lg-none mx-2">
                <a href="tel:{{$setting->phone}}" style="text-decoration: none; color:white;">
                   ይደውሉ
                </a>
           
              
                <select id="language-select-mobile-amharic">
                    <option value="english">Eng</option>
                    <option value="amharic">አም</option>
                </select>
              
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
             
                <div class="navbar-center">
                    <ul class="navbar-nav">
          
                        <li class="nav-item pr-4">
                          <a class="nav-link" href="/#home">መግቢያ</a>
                        </li>
                        <li class="nav-item pr-4">
                          <a class="nav-link" href="/aboutus">ስለ እኛ</a>
                        </li>
                        <li class="nav-item pr-4">
                          <a class="nav-link" href="/#services">አገልግሎቶች</a>
                        </li>
                        <li class="nav-item pr-4">
                          <a class="nav-link" href="/#blogs">ዜና</a>
                        </li>
                        {{-- <li class="nav-item pr-4">
                          <a class="nav-link" href="/#testimonials">Testimonials</a>
                        </li> --}}
                        <li class="nav-item pr-4">
                          <a class="nav-link" href="/#contact">ያግኙን</a>
                        </li>
                      
                        <div class="mobile-book">
                          <a href="/packages" class="btn button-book ml-auto">ያስመዝግቡ</a>
                        </div>
                      </ul>
                </div>
                <div class="navbar-right address-box">
                    @foreach($settings as $setting)
                    <i class="fas fa-phone-alt mr-2"></i>
                    <a href="tel:{{$setting->phone}}">
                        <span>{{$setting->phone}}</span>
                      </a>
                    @endforeach
                </div>
            </div>
        </nav>
    </div>



        <!-- Featured Packages Section -->
        <div id="fh5co-blog-section" class="fh5co-section-gray eng">
            <div class="row packages-body">
                <div class="featured-title-box pt-5 mt-4">
                    <h3 class="featured-title">Featured Packages</h3>
                </div>
                <div class="features-packages pt-5 row row-bottom-padded-md justify-content-evenly">
                  
                    @foreach ($packages->where('class', 'eng') as $key =>$package)
                    <div class="packages col-lg-4 col-md-12 col-sm-12">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="image"><img class="img-responsive"
                                    src="{{ $package->photo ? asset($package->photo) : asset('frontend/assets/img/default.jpg') }}"
                                    alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3>{{$package->title}}</h3>
                               
                                    <p>{{$package->summary}}</p>
                                   
                                    <p><a href="#" class="float-right" data-toggle="modal" data-target="#bookModal"
                                            data-package_id="{{ $package->id }}"
                                            data-package_name="{{ $package->title }}">Book</a></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="fh5co-blog-section" class="fh5co-section-gray amh">
            <div class="row packages-body">
                <div class="featured-title-box pt-5 mt-4">
                    <h3 class="featured-title">ልዩ ፓኬጆች</h3>
                </div>
                <div class="features-packages pt-5 row row-bottom-padded-md d-flex justify-content-evenly">
                    @foreach ($packages->where('class', 'amh') as $key =>$package)
                    <div class="packages col-lg-4 col-md-12 col-sm-12">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="image"><img class="img-responsive"
                                    src="{{ $package->photo ? asset($package->photo) : asset('frontend/assets/img/default.jpg') }}"
                                    alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3>{{$package->title}}</h3>
                                    <p>{{$package->summary}}</p>
                                    
                                 
                                    <p><a href="#" class="float-right" data-toggle="modal" data-target="#bookModal"
                                                data-package_id="{{ $package->id }}"
                                                data-package_name="{{ $package->title }}">ያስመዝግቡ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



        @include('frontend.layouts.footer')
    </div>
    <!-- Book Modal -->
    <div class="modal fade mt-5" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookModalLabel">Book Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="bookForm" method="POST" action="{{ route('frontend.storebooking') }}">
                        @csrf
                        <input type="hidden" name="package_id" id="package_id" value="">
                        <input type="hidden" name="package_name" id="package_title" value="">

                        <div class="form-group">
                            <label for="package_title_display">Package Title</label>
                            <input type="text" class="form-control" id="package_title_display" value="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <button type="submit" class="btn button-book">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    $('#bookModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var packageId = button.data('package_id');
        var packageTitle = button.data('package_name');

        var modal = $(this);
        modal.find('#package_id').val(packageId);
        modal.find('#package_id_display').val(packageId);
        modal.find('#package_title').val(packageTitle);
        modal.find('#package_title_display').val(packageTitle);
    });
        



    
    document.querySelectorAll('select[id^="language-select"]').forEach(select => {
    select.addEventListener('change', function() {
        var selectedLanguage = this.value;
        localStorage.setItem('selectedLanguage', selectedLanguage); 
        updateLanguageDisplay(selectedLanguage);
        updateLanguageSelectors(selectedLanguage); 
    });
});


function updateLanguageDisplay(language) {
    if (language === 'english') {
        document.querySelectorAll('.eng').forEach(el => el.style.display = 'block');
        document.querySelectorAll('.amh').forEach(el => el.style.display = 'none');
    } else if (language === 'amharic') {
        document.querySelectorAll('.eng').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.amh').forEach(el => el.style.display = 'block');
    }
}


function updateLanguageSelectors(language) {
    document.querySelectorAll('select[id^="language-select"]').forEach(select => {
        select.value = language;
    });
}


document.addEventListener('DOMContentLoaded', function() {
    var savedLanguage = localStorage.getItem('selectedLanguage') || 'english'; 
    updateLanguageDisplay(savedLanguage);
    updateLanguageSelectors(savedLanguage); 
});

    </script>

</body>
</html>
