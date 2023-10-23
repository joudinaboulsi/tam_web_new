@foreach ($service_section as $service)
<section class="service-three" id="services">
    <div class="service-three__bg" style="background-image: url(assets/images/shapes/service-bg-1.jpg);"></div>
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
            <div class="col-md-7">
                <div class="section-title">
                    <div class="section-title__triangle">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    <h5 class="section-title__tagline">{{$service->subtitle}}</h5>
                    <h2 class="section-title__title">{{$service->title}}</h2>
                </div><!-- section-title -->
            </div>
            <div class="col-md-5">
                <p class="service-three__text">
                   {!! strip_tags($service->text) !!}
                </p>
            </div>
        </div>
        <div class="row service-three__cus-row">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                <div class="gallery-page__single text-center">
                    <div class="service-three__item__icon">
                        <img src="{{asset('assets/service/'.$service->icon1)}}" alt="{{$service->alt_icon1}}">
                    </div>
                    <h3 class="service-three__item__title" style="width:150px">
                     {{$service->p1}}
                    </h3><!-- /.service-title --><!-- /.service-icon -->
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{asset('assets/service/'.$service->image1)}}" data-title="{{$service->alt_image1}}"><span class="icon-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                <div class="gallery-page__single text-center">
                    <div class="service-three__item__icon">
                        <img src="{{asset('assets/service/'.$service->icon2)}}" alt="{{$service->alt_icon2}}">
                    </div>
                    <h3 class="service-three__item__title" style="width:150px">
                        {{$service->p2}}
                    </h3><!-- /.service-title --><!-- /.service-icon -->
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{asset('assets/service/'.$service->image2)}}" data-title="{{$service->alt_image2}}"><span class="icon-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="450ms">
                <div class="gallery-page__single text-center">
                    <div class="service-three__item__icon">
                        <img src="{{asset('assets/service/'.$service->icon3)}}" alt="{{$service->alt_icon3}}">
                    </div>
                    <h3 class="service-three__item__title">
                        {{$service->p3}}
                    </h3><!-- /.service-title --><!-- /.service-icon -->
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{asset('assets/service/'.$service->image3)}}" data-title="{{$service->alt_image3}}"><span class="icon-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="450ms">
                <div class="gallery-page__single text-center">
                    <div class="service-three__item__icon">
                        <img src="{{asset('assets/service/'.$service->icon4)}}" alt="{{$service->alt_icon4}}">

                    </div>
                    <h3 class="service-three__item__title">
                        Software <br> Solution
                    </h3><!-- /.service-title --><!-- /.service-icon -->
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{asset('assets/service/'.$service->image4)}}" data-title="{{$service->alt_image4}}"><span class="icon-plus"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach