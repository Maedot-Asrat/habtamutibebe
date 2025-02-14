<div class="container-fluid py-5 eng">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about">
                    <div class="col-6 ">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/sina_grand.jpg')}}">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/sthetoscope.jpeg')}}">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/banner.jpg')}}">
                    </div>
                    <div class="col-6">
                        <div class="experience-box w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-light">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            @foreach($utilities as $utility)
                            <h1 class="display-1 text-white mb-0" data-toggle="counter-up">{{$utility->experience}}</h1>
                            @endforeach
                            <small class="fs-5 text-white">Years Experience</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Trusted Lab Experts and Latest Lab Technologies</h1>
                <p class="mb-4">At Ibn Sina Medical Group, we are committed to delivering exceptional healthcare services by combining our team's expertise with the latest advancements in medical technology. Our state-of-the-art facilities and highly skilled professionals ensure accurate diagnostics and treatment, enhancing the well-being of the communities we serve. With a focus on innovation and patient-centered care, we strive to set new standards in healthcare excellence in the eastern Ethiopia region.</p>
                <div class="row g-4 g-sm-5 justify-content-center">
                    @foreach($utilities as $utility)
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle award-circle  ms-sm-auto">
                            <p class="text-white mb-0">Doctors</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->doctors}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle case-circle  me-sm-auto">
                            <p class="text-white mb-0">Departments</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->departments}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column client-circle rounded-circle mx-sm-auto">
                            <p class="text-white mb-0">Happy Clients</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->clients}}</h1>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5 amh">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about">
                    <div class="col-6 ">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/sina_grand.jpg')}}">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/sthetoscope.jpeg')}}">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid img" src="{{asset('frontend/assets/img/banner.jpg')}}">
                    </div>
                    <div class="col-6">
                        <div class="experience-box w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-light">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            @foreach($utilities as $utility)
                            <h1 class="display-1 text-white mb-0" data-toggle="counter-up">{{$utility->experience}}</h1>
                            @endforeach
                            <small class="fs-5 text-white">አመት ቆይታ</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">የሚተማመኑባቸው የላብራቶሪ ባለሙያዎች እና ቴክኖሎጂዎች</h1>
                <p class="mb-4">
                    በኢብን ሲና የህክምና ቡድን የባለሙያዎቻችንን እውቀት ከዘመናዊ የህክምና ቴክኖሎጂ እድገቶች ጋር በማጣመር ልዩ የጤና አጠባበቅ አገልግሎቶችን ለማቅረብ ቆርጠናል ። የእኛ ዘመናዊ ፋሲሊቲዎች እና ከፍተኛ ችሎታ ያላቸው ባለሙያዎች ትክክለኛ ምርመራዎችን እና ህክምናን ያረጋግጣሉ, የምናገለግላቸው ማህበረሰቦችን ደህንነት ያሳድጋል. በፈጠራ እና ታካሚ ላይ ያማከለ እንክብካቤ ላይ በማተኮር፣ በምስራቅ ኢትዮጵያ ክልል የጤና አጠባበቅ ልቀት ላይ አዲስ ደረጃዎችን ለማውጣት እንጥራለን።</p>
                <div class="row g-4 g-sm-5 justify-content-center">
                    @foreach($utilities as $utility)
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle award-circle  ms-sm-auto">
                            <p class="text-white mb-0">የጤና ባለሙያዎች</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->doctors}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle case-circle  me-sm-auto">
                            <p class="text-white mb-0">ዲፓርትመንቶች</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->departments}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column client-circle rounded-circle mx-sm-auto">
                            <p class="text-white mb-0">ደስተኛ ደንበኞች</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$utility->clients}}</h1>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>