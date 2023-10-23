<section class="main-slider" id="home">
    <div class="main-slider__one nisoz-owl__carousel owl-carousel">

        @foreach ($sliders as $slider)
        <div class="item"><!-- slider item start -->
            <div class="main-slider__item">
                <div class="main-slider__shape-1">
                    <img src="assets/images/shapes/slider-1-bg-1.png" alt="shape1">
                </div><!-- shape-one -->
                <div class="main-slider__shape-2">
                    <img src="assets/images/shapes/slider-1-shape-1.png" alt="shape2">
                </div><!-- shape-two -->
                <div class="main-slider__shape-3">
                    <img src="{{asset('assets/slider/'.$slider->image_slider)}}" alt="{{$slider->alt_image}}">
                </div><!-- shape-three -->
                <div class="main-slider__shape-4">
                    <img src="assets/images/shapes/slider-1-shape-2.png" alt="shape4">
                </div><!-- shape-four -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="main-slider__content">
                                <h1 class="main-slider__title" style="width:250px">{{$slider->title_main}}</h1>
                                <!-- slider-title -->
                                <p class="main-slider__text">{{$slider->text_main}}</p>
                                <!-- slider-text -->
                                <div class="main-slider__btn">
                                    <a href="#{{$slider->scrollTo}}" class="nisoz-btn">
                                        <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__text">{{$slider->text_btn}}</span>
                                    </a><!-- /.btn -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- slider item end -->
        @endforeach
      
       
    </div>
</section>