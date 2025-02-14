{{-- <div class="container-fluid container-team py-5" id="container-team">
    <div class="container pb-5">
   
        <div class="row g-4">
            <h1 class="display-6 mb-3 text-center eng artwork-header">ART WORKS</h1>
            <div class=" separator separator-bold">
                <span><i class="fa fa-circle"></i></span>
            </div>

        </div>
        <div class="row row-bottom-padded-md pt-5 mx-3">
            <div class="col-md-12 col-lg-12">
              <ul id="fh5co-portfolio-list" class="list-unstyled d-flex flex-wrap justify-content-between">
                @foreach($arts->slice(0, 8) as $art)
                  @php
                  $artwork = $art->photo ? asset($art->photo) : asset('frontend/assets/img/homebg.png');
                  @endphp
                <a href="{{ $artwork }}" class="image-popup portfolio-item col-12 col-sm-6 col-md-4 mb-4 animate-box img-fluid">
                    <img src="{{ $artwork }}" alt="Image" class="img-fluid">
                    <div class="overlay">
                        <div class="case-studies-summary">
                          <h2 class="overlay-head">{{ $art->title }}</h2>
                        </div>
                      </div>
                </a>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="art-popup" class="popup">
        <div class="popup-content">
            <button class="close">&times;</button>
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
            <img id="popup-image" src="" alt="Artwork">
            <h2 id="popup-title"></h2>
            
        </div>
    </div> --}}
    <section class="wpb_row vc_row-fluid vc_custom_1701775443191"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <!-- Element: OT Heading --> 	 
        <h1 class="ot_custom_heading  " style="text-align: center;">Art Works</h1>	
        <!-- Element: OT Line solid --> 	 
        <div class=" separator separator-bold"><span><i class="fa fa-circle"></i></span></div>
        <div class="spacer-single"></div>	      
    </div></div></div></div></div></section>
    <section class="wpb_row vc_row-fluid no-padding"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper ">  

        <!-- Element: OT Portfolio Filter -->
        <div class="projects-grid-wrapper">
        
            <div class="projects-grid justify-content-center projects-load-ajax overlay_s1  pf_4_cols " style="display:flex; justify-content:center; margin: -4px 4px; position: relative; height: 784.708px;">
                {{-- <div class="project-item-sizer"></div> --}}
                             
                <!-- gallery item -->
                @forEach($arts as $art)
                <div class="project-item category-47 image-popup" style="padding: 4px; ">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <img loading="lazy" decoding="async" width="417" height="470" src={{$art->photo}} class="attachment-700x470 size-700x470 wp-post-image" alt="" 0="" srcset="{{$art->photo}} 1136w, {{$art->photo}} 266w, {{$art->photo}} 909w, {{$art->photo}} 768w" sizes="auto, (max-width: 417px) 100vw, 417px" title="182">					</div>							
                       
                            <span class="project-overlay">
                                <span class="project-name id-color">{{$art->title}}</span>	
                            </span>
                        
                    </div>
                </div>  
                @endforeach      
                <!-- close gallery item -->
                            
             
                        </div>
                        <div class="pagination w100 text-center">
                    <ul class="page-numbers">
        <li><span aria-current="page" class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/2/">2</a></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/3/">3</a></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/4/">4</a></li>
        <li><span class="page-numbers dots">…</span></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/23/">23</a></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/24/">24</a></li>
        <li><a class="page-numbers" href="https://new.habtamutibebe.com/page/25/">25</a></li>
        <li><a class="next page-numbers" href="https://new.habtamutibebe.com/page/2/"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
            
                </div>
        </div>
                     
    </div></div></div></div></section>
    <div id="art-popup" class="popup">
        <div class="popup-content">
            <button class="close">&times;</button>
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
            <img id="popup-image" src="" alt="Artwork">
            <h2 id="popup-title"></h2>
            
        </div>
    </div>
    <style>
    /* Popup container */
    .popup {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }
    
    /* Popup content */
    .popup-content {
        position: relative;
        background: #0E0A0A;
        padding: 20px;
        border-radius: 8px;
        max-width: 90%;
        text-align: center;
    }
    
    .popup-content img {
        max-width: 100%;
        max-height: 80vh;
        margin-bottom: 20px;
        border-radius: 8px;
    }
    
    .popup-content h2 {
        margin: 0;
        font-size: 18px;
        color: #FAB207;
    }
    
    /* Buttons */
    button {
        background: none;
        border: none;
        color: white;
        font-size: 30px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
    }
    
    .close {
        top: 10px;
        right: 10px;
        font-size: 40px;
        color: white;
    }
    
    .prev {
        left: -10px;
    }
    
    .next {
        right: -10px;
    }
   
    #fh5co-portfolio {
  padding: 10px 0;
  width: 100vw;
}

#fh5co-portfolio h2 {
  position: relative;
  color: #fff;
}

.portfolio-item {
  position: relative;
  background-size: cover;
  background-position: center;
  min-height: 40vh; /* Adjust height as needed */
  margin-bottom: 15px;
}

.portfolio-item a {
  display: block;
  height: 100%;
  width: 100%;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7); /* Dark transparent overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
 
}
.overlay-head{
    color: #FAB207;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    display: block;
}

.portfolio-item:hover .overlay {
  opacity: 1;
}

.case-studies-summary {
  color: white;
  text-align: center;
}

.video-wrapper {
  width: 100%;
  padding-top: 100%; /* 4:3 Aspect Ratio */
  position: relative;
}

.video-wrapper video,
.image-wrapper::after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.d-flex {
  display: flex;
 
}


.justify-content-between {
  justify-content: space-between;
}

/* Media Queries for Responsive Design */
@media (max-width: 768px) {
  .portfolio-item {
    width: calc(50% - 10px); /* Adjust width and gap for smaller screens */
  }
  .portfolio-item video{
    height: 40vh;
  }
}

@media (max-width: 576px) {
  .portfolio-item {
    width: calc(100% - 10px); /* Adjust width and gap for extra-small screens */
  }
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const arts = @json($arts->slice(0, 8)->toArray()); // Pass the first 8 artworks to JS
        let currentIndex = 0;
    
        const popup = document.getElementById('art-popup');
        const popupImage = document.getElementById('popup-image');
        const popupTitle = document.getElementById('popup-title');
        const closeButton = document.querySelector('.close');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
    
        // Function to open the popup
        function openPopup(index) {
            currentIndex = index;
            const art = arts[currentIndex];
            popupImage.src = art.photo ? art.photo : 'frontend/assets/img/homebg.png';
            popupTitle.textContent = art.title;
            popup.style.display = 'flex';
        }
    
        // Function to close the popup
        function closePopup() {
            popup.style.display = 'none';
        }
    
        // Function to go to the previous image
        function prevImage() {
            currentIndex = (currentIndex - 1 + arts.length) % arts.length;
            openPopup(currentIndex);
        }
    
        // Function to go to the next image
        function nextImage() {
            currentIndex = (currentIndex + 1) % arts.length;
            openPopup(currentIndex);
        }
    
        // Add event listeners to the buttons
        closeButton.addEventListener('click', closePopup);
        prevButton.addEventListener('click', prevImage);
        nextButton.addEventListener('click', nextImage);
    
        // Attach click events to the portfolio items
        document.querySelectorAll('.image-popup').forEach((item, index) => {
            item.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent the default link behavior
                openPopup(index);
            });
        });
    
        // Close the popup when clicking outside the content
        window.addEventListener('click', (e) => {
            if (e.target === popup) {
                closePopup();
            }
        });
    });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>