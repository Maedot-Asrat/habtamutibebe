<div class="container-fluid container-service py-5 eng">
@foreach($categories as $category)
  <div class="container pt-5">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h1 class="display-6 mb-3">{{$category->title}}</h1>
          <p class="mb-5">{{$category->summary}}</p>
      </div>
      <div class="row g-4">
        @foreach($services->where('cat_id', $category->id)->where('class', 'eng')->take(8) as $service)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        @if($loop->index == 0)
                            <i class="bi bi-briefcase-fill text-dark"></i> <!-- Internal Medicne Icon -->
                        @elseif($loop->index == 1)
                            <i class="bi bi-bandaid text-dark"></i> <!-- Pediatrics -->
                        @elseif($loop->index == 2)
                            <i class="bi bi-gender-female text-dark"></i> <!-- gyncolo -->
                        @elseif($loop->index == 3)
                            <i class="bi bi-heart-pulse text-dark"></i> <!-- Internal and gastro -->
                        @elseif($loop->index == 4)
                            <i class="bi bi-scissors text-dark"></i> <!-- Surgeryn -->
                        @elseif($loop->index == 5)
                            <i class="bi bi-person-check text-dark"></i> <!-- Psychiatry-->
                        @elseif($loop->index == 6)
                            <i class="bi bi-house-door text-dark"></i> <!-- Dentistry Icon -->
                        @elseif($loop->index == 7)
                            <i class="bi bi-eyeglasses text-dark"></i> <!-- Allergy Tests Icon -->
                        @endif
                    </div>
                    <h5 class="mb-3">{{ $service->title }}</h5> <!-- Dynamic Title -->
                    <p class="mb-4">{{ Str::words($service->summary, 13, '...') }}</p> <!-- Dynamic Summary -->
                    <div data-url="{{ url('/servicedetail/' . $service->id) }}">
                        <a href="{{ url('/servicedetail/' . $service->id) }}" class="btn btn-light px-3">Read More<i class="bi bi-chevron-double-right ms-1"></i></a></div>
                    
                </div>
            </div>
        @endforeach
    </div>
    
  </div>
  @endforeach
</div>
<div class="container-fluid container-service py-5 amh">
    @foreach($categories as $category)
      <div class="container pt-5">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="display-6 mb-3">አጠቃላይ የላቦራቶሪ አገልግሎቶች</h1>
              <p class="mb-5">የተሟላ ህክምና በማቅረብ ጤናዎን ለመደገፍ ቆርጠን ተነስተናል።</p>
          </div>
          <div class="row g-4">
            @foreach($services->where('cat_id', $category->id)->where('class', 'amh')->take(8) as $service)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            @if($loop->index == 0)
                                <i class="bi bi-heart-pulse text-dark"></i> <!-- Pathology Testing Icon -->
                            @elseif($loop->index == 1)
                                <i class="bi bi-lungs text-dark"></i> <!-- Microbiology Tests Icon -->
                            @elseif($loop->index == 2)
                                <i class="bi bi-virus text-dark"></i> <!-- Biochemistry Tests Icon -->
                            @elseif($loop->index == 3)
                                <i class="bi bi-capsule-pill text-dark"></i> <!-- Histopathology Tests Icon -->
                            @elseif($loop->index == 4)
                                <i class="bi bi-capsule text-dark"></i> <!-- Urine Tests Icon -->
                            @elseif($loop->index == 5)
                                <i class="bi bi-prescription2 text-dark"></i> <!-- Blood Tests Icon -->
                            @elseif($loop->index == 6)
                                <i class="bi bi-clipboard2-pulse text-dark"></i> <!-- Fever Tests Icon -->
                            @elseif($loop->index == 7)
                                <i class="bi bi-file-medical text-dark"></i> <!-- Allergy Tests Icon -->
                            @endif
                        </div>
                        <h5 class="mb-3">{{ $service->title }}</h5> <!-- Dynamic Title -->
                        <p class="mb-4">{{ Str::words($service->summary, 13, '...') }}</p> <!-- Dynamic Summary -->
                        <div data-url="{{ url('/servicedetail/' . $service->id) }}">
                            <a href="{{ url('/servicedetail/' . $service->id) }}" class="btn btn-light px-3">Read More<i class="bi bi-chevron-double-right ms-1"></i></a></div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        
      </div>
      @endforeach
    </div>