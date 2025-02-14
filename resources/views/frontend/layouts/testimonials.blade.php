<div class="container-fluid testimonial py-5 eng">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-4">What Clients Say About Ibn Sina Medical Group!</h1>
                <p class="text-white mb-5">Trusted by thousands of patients for their outstanding medical care, Ibn Sina Medical Group is committed to delivering compassionate, personalized, and high-quality healthcare services.</p>
                <a href="/testimonials" class="btn btn-primary py-3 px-5">More Testimonials</a>
            </div>
            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white p-5">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        @foreach($testimonials->where('class','eng') as $testimony)
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">{{$testimony->testimony}}</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src={{$testimony->photo}} alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">{{$testimony->full_name}}</h5>
                                        <span class="text-primary">{{$testimony->title}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>



<div class="container-fluid testimonial py-5 amh">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-4">ደንበኞቻችን ስለ ኢብን ሲና ሆስፒታል ምን ይላሉ</h1>
                <p class="text-white mb-5">ኢብን ሲና ሜዲካል ግሩፕ በሺህዎች በሚቆጠሩ ታካሚዎች በታላቅ እንክብካቤ አክሞ በቂ አገልግሎቶችን ለማቅረብ ቁርጠኛ ነው።</p>
                <a href="/testimonials" class="btn btn-primary py-3 px-5">ምስክርነት አሳይ</a>
            </div>
            <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white p-5">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        @foreach($testimonials->where('class','amh') as $testimony)
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">{{$testimony->testimony}}</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src={{$testimony->photo}} alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">{{$testimony->full_name}}</h5>
                                        <span class="text-primary">{{$testimony->title}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>