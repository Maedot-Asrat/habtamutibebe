
<section data-stellar-background-ratio="-.1" class="wpb_row vc_row-fluid vc_custom_1702902063349 vc_row-has-fill stellar-fixed" style="background-position: 0px 12.9917px;"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">	
    <div class="bg-none wpb_row vc_row-fluid vc_custom_1701775443191"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <!-- Element: OT Heading --> 	 
        <h1 class="ot_custom_heading  " style="text-align: center;">Previous Interviews</h1>	
        <!-- Element: OT Line solid --> 	 
        <div class=" separator separator-bold"><span><i class="fa fa-circle"></i></span></div>
        <div class="spacer-single"></div>	      
    </div></div></div></div></div></div>
	<!-- Element: OT Blog Slider -->
    <div class="clearfix"></div>			
    <ul class="blog-carousel blog-list blog-snippet wow fadeInUp owl-carousel owl-theme animated" data-visible="2" data-autoplay="false" data-speed="200" data-navspeed="800" data-rewinspeed="1000" style="opacity: 1; display: block; visibility: visible; animation-name: fadeInUp;">
    	        <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 2880px; left: 0px; display: block; transition: all; transform: translate3d(0px, 0px, 0px);">
                        @forEach($interviews as $interview)
                        <div class="owl-item" style="width: 360px;">
                            <li class="col-md-6 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="fluid-width-video-wrapper" style="padding-top: 56.2%;"><iframe loading="lazy" title="{{$interview->description}}" src="{{$interview->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" name="fitvid0"></iframe></div> 
                                               
                                                                                </div>
                                                        <div class="date-box">
                                            <div class="{{$interview->published_date}}">Jun</div>
                                        </div>
                                    
                                    <div class="post-text ">
                                        <h3><a href="{{$interview->link}}">{{$interview->description}}</a></h3>
                                        <p></p>
                                    </div>

                                                </div>
                            </li>
                        </div>
                        @endforeach
                    </div>
                </div>
               
               
               
           </ul>
    
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper "></div></div></div></div></div></section>