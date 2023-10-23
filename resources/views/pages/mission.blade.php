@foreach ($missions as $mission)
<section class="cta-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" id="mission">
    <div class="cta-one__bg jarallax-img" style="background-image: url({{asset('assets/about/'.$mission->image)}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-8 wow fadeInLeft" data-wow-delay="200ms">
                <div class="section-title">
                    <h2 class="section-title__title">{{$mission->title_mission}}</h2>
                </div><!-- section-title -->
            </div>
            @if($mission->title_vision)
            <div class="col-md-4 col-xl-4 text-end wow fadeInRight" data-wow-delay="300ms">
                <a href="#{{$mission->scrollTo}}" class="nisoz-btn">
                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                    <span class="nisoz-btn__text">{{$mission->title_vision}}</span>
                </a><!-- /.btn -->
            </div>
            @endif
        </div>
        <div class="cta-one__text wow fadeInUp" data-wow-delay="400ms">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <p>{!! $mission->text!!}</p>
        </div>
    </div>
</section>
<!-- Feature Start -->
<section class="feature-one">
    <div class="container">
        <div class="feature-one__wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">{{$mission->title1}}</h3>
                        <p class="feature-one__item__text">
                            {!! $mission->p1 !!}</p>
                    </div><!-- /.feature-box -->
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">{{$mission->title2}}</h3>
                        <p class="feature-one__item__text">
                            {!! $mission->p2 !!}</p>
                    </div><!-- /.feature-box -->
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">{{$mission->title3}}</h3>
                        <p class="feature-one__item__text">
                            {!! $mission->p3 !!}</p>
                    </div><!-- /.feature-box -->
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="feature-one__item">
                        <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                        <h3 class="feature-one__item__title">{{$mission->title4}}</h3>
                        <p class="feature-one__item__text">
                            {!! $mission->p4 !!}</p>
                    </div><!-- /.feature-box -->
                </div>
                @if($mission->btn_text)
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                        <a data-bs-toggle="modal" data-bs-target="#modal1" class="nisoz-btn d-flex justify-content-center">
                            <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__text">{{$mission->btn_text}}</span>
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>

@endforeach