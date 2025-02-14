<div class="container-fluid py-5 feat" id="feat">
    <div class="container eng">
        <div class="row g-0 feature-row ">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-award text-dark"></i>
                    </div>
                    <h5 class="mb-3">Award-Winning Care</h5>
                    <p class="mb-0">Our hospital is recognized for excellence in healthcare and patient safety</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people text-dark"></i>
                    </div>
                    <h5 class="mb-3">Expert Medical Team</h5>
                    <p class="mb-0">Highly skilled doctors with extensive experience across all medical specialties.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-cash-coin text-dark"></i>
                    </div>
                    <h5 class="mb-3">Affordable Healthcare</h5>
                    <p class="mb-0">Providing top-tier treatments and services at competitive and fair prices.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-headphones text-dark"></i>
                    </div>
                    <h5 class="mb-3">24/7 Emergency Support</h5>
                    <p class="mb-0">Around-the-clock medical assistance to handle any emergencies promptly and efficiently.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container amh">

        <div class="row g-0 feature-row ">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-award text-dark"></i>
                    </div>
                    <h5 class="mb-3">ወደር የለሽ እንክብካቤ</h5>
                    <p class="mb-0">ሆስፒታላችን በጤና አጠባበቅ እና በታካሚ ደህንነት የላቀ እውቅና አግኝቷል</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people text-dark"></i>
                    </div>
                    <h5 class="mb-3">ብቁ የጤና ባለሙያዎች</h5>
                    <p class="mb-0">በሁሉም የሕክምና ክፍሎች ልምድ ያላቸው እና ከፍተኛ ችሎታ ያላቸው ዶክተሮች።</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-cash-coin text-dark"></i>
                    </div>
                    <h5 class="mb-3">ተመጣጣኝ ዋጋ</h5>
                    <p class="mb-0">ከፍተኛ ሕክምናዎችን እና አገልግሎቶችን በተመጣጣኝ ዋጋ ማቅረብ።</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-headphones text-dark"></i>
                    </div>
                    <h5 class="mb-3">24 ሰአት አገልግሎት</h5>
                    <p class="mb-0">ማንኛውንም ድንገተኛ ህክማና በፍጥነት እና በብቃት ማስተናገድ።
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Features Start -->
    <div class="container-fluid feature my-5 wow fadeInUp eng" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="row align-items-center">
                    <div class="col-lg-6 pt-lg-5 px-0">
                        <div class="bg-white p-5 mt-lg-5">
                            <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">About Ibn Sina Medical Group</h1>
                            <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                                Ibn Sina Medical Group was founded with the vision of revolutionizing healthcare delivery in the eastern Ethiopia region.
                            </p>
                            <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                                Ibn Sina Medical Group is envisioned to be a leading healthcare organization committed to providing exceptional medical services and improving the well-being of our society. The project is one of the mega projects mainly planned to work on health investment to build a Health Village compound for better health service accessibility in the Eastern parts of the country.
                            </p>
                            <a class="btn btn-primary explore-btn py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="/aboutus">Explore More</a>
                        </div>
                    </div>
                
                    <!-- Video Section -->
                    <div class="col-lg-6 pt-lg-5 px-0">
                        @foreach($abouts->where('class','eng') as $about)
                        <div class="wow fadeIn mt-lg-5" data-wow-delay="0.3s">
                            <!-- Flexbox ensures equal height -->
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%; min-height: 300px;">
                                <video controls muted autoplay style="width: 100%; height: 67vh; object-fit: cover;">
                                    <source src="{{ asset($about->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
    <div class="container-fluid feature my-5 wow fadeInUp amh" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="row align-items-center">
                    <div class="col-lg-6 pt-lg-5 px-0">
                        <div class="bg-white p-5 mt-lg-5">
                            <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">ስለ ኢብን ሲና መዲካል ግሩፕ አ.ማ</h1>
                            <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                                ኢብን ሲና መዲካል ግሩፕ አ.ማ ታዋቂ እና በስራቸው ስኬታማ በሆኑ ከ 20 በላይ የህክማ ስፒሻሊስት ፤ ሰብ ስፔሻሊስት ዶክተሮች ፤ ጤና ባለሙያዎች ፤ ታዋቂ ሰዎች ፤ ባለሃብቶች አማካኝነት በምስራቁ ክፍል ግዙፍ የሆነ የጤና ተቋም ለመግባት የተቋቋመ አክሲዎን ማህበር ነው።
                            </p>
                            <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                               በዉስጡ ሆስፒታሎች ፤  የህክምና መድሃኒት እና ግብዐት ፤ ዲያግኖስቲክ ማዕከሎች ፤ የትምህርት ተቋማት ፤ ሆቴሎች እና ተያያዥ የሆኑ ስራዎች ላይ በመሰማራት ክልሉን ብሎም ሀገሪቱን የጤና ቱሪዝም ማዕከል ለማድረግ አልሞ የተመሰረተ አክሲዎን ማህበር ነው።
                            </p>
                            <a class="btn btn-primary explore-btn py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="/aboutus">ቀጥል...</a>
                        </div>
                    </div>
                
                    <!-- Video Section -->
                    <div class="col-lg-6 pt-lg-5 px-0">
                        @foreach($abouts->where('class','amh') as $about)
                        <div class="wow fadeIn mt-lg-5" data-wow-delay="0.3s">
                            <!-- Flexbox ensures equal height -->
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%; min-height: 300px;">
                                <video controls muted autoplay style="width: 100%; height: 67vh; object-fit: cover;">
                                    <source src="{{ asset($about->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
