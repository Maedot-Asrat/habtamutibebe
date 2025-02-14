<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')

<body class="body">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    @include('frontend.layouts.header')
    

    <!-- Carousel Start -->
    @include('frontend.layouts.home')
    <!-- Carousel End -->


    <!-- Team Start -->
    @include('frontend.layouts.team')
    @include('frontend.layouts.interview')
   
    <section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204732962 no-padding"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper ">			
        <!-- Element: OT Button --> 
                <a href="/contact" target="_self" class="btn btn-line-black btn-big  ">Contact us <i class="fa fa-arrow-right"></i></a>
            
    </div></div></div></div></section>
    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-white-50 py-4">
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    import Masonry from 'masonry-layout';

const grid = document.querySelector('.grid');
const masonry = new Masonry(grid, {
  itemSelector: '.grid-item',
  columnWidth: '.grid-item',
  percentPosition: true,
});

    </script>
     
  @include('frontend.layouts.js')

  
</body>

</html>