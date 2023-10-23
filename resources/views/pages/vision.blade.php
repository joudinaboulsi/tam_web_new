@foreach ($vision_section as $vision)
<section class="choose-one" id="vision">
    <div class="choose-one__bg wow slideInLeft" data-wow-delay="200ms">
        <div class="choose-one__bg__one"></div>
        <div class="choose-one__bg__two"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="choose-one__content wow fadeInUp" data-wow-delay="500ms">
                    <div class="section-title">
                        <div class="section-title__triangle">
                            <span class="section-title__triangle-left"></span>
                            <span class="section-title__triangle-right"></span>
                        </div>
                        <h5 class="section-title__tagline">{{$vision->subtitle}}</h5>
                        <h2 class="section-title__title">{{$vision->title}}</h2>
                    </div><!-- section-title -->
                    <p class="choose-one__content__text">
                      {!! strip_tags($vision->text) !!}
                    </p>
                </div>
                <div class="choose-one__fact">
                    <div class="choose-one__fact__icon"><span class="icon-project-management"></span></div><!-- /.choose-fact__icon -->
                    <div class="choose-one__fact__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="{{$vision->counter1}}" data-speed="1500"></span>
                        </span>+
                    </div><!-- /.choose-fact__count -->
                    <h3 class="choose-one__fact__title">{{$vision->p1}}</h3><!-- /.choose-fact__title -->
                </div><!-- /.choose-fact -->
            </div>
            <div class="col-lg-7">
                <div class="nisoz-stretch-element-inside-column">
                    <div class="nisoz-stretch__image wow slideInRight" data-wow-delay="400ms">
                        <img src="{{asset('assets/about/'.$vision->image)}}" alt="{{$vision->alt_image}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Start -->
<section class="fact-one">
    <div class="fact-one__bg" style="background-image: url(assets/images/shapes/funfact-bg-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="100ms">
                <div class="fact-one__item text-center">
                    <div class="fact-one__item__icon"><span class="icon-campaign"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="{{$vision->counter2}}" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">{{$vision->p2}}</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
                <div class="fact-one__item text-center">
                    <div class="fact-one__item__icon"><span class="icon-recommend"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="{{$vision->counter3}}" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">{{$vision->p3}}</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="300ms">
                <div class="fact-one__item text-center">
                    <div class="fact-one__item__icon"><span class="icon-increment"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="{{$vision->counter4}}" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">{{$vision->p4}}</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="fact-one__item text-center">
                    <div class="fact-one__item__icon"><span class="icon-consulting"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="{{$vision->counter5}}" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">{{$vision->p5}}</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
        </div>
    </div>
</section>
@endforeach