
    <div class="container-fluid header-carousel px-0 mb-5">
      <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            
              @foreach ($banners as $banner)
              <div class="carousel-item @if ($loop->first) active @endif">
                  <img class="w-100" src="{{$banner->photo}}" alt="Image">
                  <div class="carousel-caption">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-7  text-center">
                                 
                                  <a href="/aboutus" class="btn btn-primary bg-dark py-3 px-5 animated @if ($loop->odd) slideInLeft @else slideInRight @endif">OUR PORTFOLIO</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
          </div>
          <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>

