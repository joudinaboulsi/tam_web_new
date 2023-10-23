@foreach ($about_section as $about)
<section class="about-one" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__thumb"><!-- about thumb start -->
                    <div class="about-one__thumb__one wow fadeInLeft" data-wow-delay="100ms">
                        <img  src="{{ asset('assets/about/'.$about->image1 ) }}" alt="{{ $about->alt_iamge1 }}">
                    </div>
                    <div class="about-one__thumb__two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 10, "speed": 700, "scale": 1 }'>
                        <img  src="{{ asset('assets/about/'.$about->image2 ) }}" alt="{{ $about->alt_iamge2 }}">
                    </div>
                </div><!-- about thumb end -->
            </div>
            <div class="col-xl-6">
                <div class="about-one__content"><!-- about content start-->
                    <div class="section-title">
                        <div class="section-title__triangle">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">{{$about->subtitle}}</h5>
                        <h2 class="section-title__title">{{$about->title}}</h2>
                    </div><!-- section-title -->
                    <p class="about-one__content__text">
                        {!!  strip_tags($about->text) !!}
                    </p>
                    <!-- /.skills-item -->
                    @if( $about->btn_text)
                        <a href="{{ asset('assets/about/'.$about->pdf) }}" class="nisoz-btn" download>
                            <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__text">{{$about->btn_text }}</span>
                        </a>
                    @endif
                    <!-- /.btn -->
                
                </div><!-- about content end-->
            </div>
        </div>
    </div>
</section>
@endforeach