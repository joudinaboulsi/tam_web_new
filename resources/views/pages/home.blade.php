@extends('layouts.master')
@section('content')

<!--Main Slider Start-->
@include('pages.sliders')
@include('pages.about')
@include('pages.service')
@include('pages.products')
<!-- /.client-carousel -->
<!-- Call To Action Start -->
@include('pages.mission')
<!-- Feature End -->
<!-- Portfolio Start -->
@include('pages.projects')
@include('pages.client')
<!-- Choose Start -->
@include('pages.vision')
<!--Testimonial Start
<section class="testimonial-one">
    <div class="container">
        <div class="testimonial-one__carousel nisoz-owl__carousel owl-theme owl-carousel">-->
            <!-- Testimonial Item -->
          <!--  <div class="item">
                <div class="testimonial-one__item">
                    <div class="testimonial-one__author">
                        <img src="assets/images/resources/testimonial-1-1.jpg" alt="testimonial1">
                        <div class="testimonial-one__icon"><span class="icon-quote text-white"></span></div><!-- testimonial-quote-icon -->
                        <!--<div class="testimonial-one__border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290" viewBox="0 0 21 290">
                                <path class="cls-1" d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z" transform="translate(-741 -4387)" />
                            </svg>
                        </div>--><!-- svg-border -->
                 <!--   </div>--><!-- testimonial-author-thumb -->
                   <!--  <div class="testimonial-one__content">
                        <div class="testimonial-one__ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>--><!-- testimonial-ratings -->
                     <!--    <div class="testimonial-one__quote">
                            This is due to their excellent service, competitive pricing and customer support. It’s through refresing to get such a personal touch.
                            Duis aute irure dolor in reprehenderit esse simply free text available in the market.
                        </div>--><!-- testimonial-quote -->
                      <!--   <div class="testimonial-one__meta">
                            <h5 class="testimonial-one__title">aleesha michale</h5>
                            <span class="testimonial-one__designation">ceo & co founder</span>
                        </div>--><!-- testimonial-meta -->
                  <!--   </div>--><!-- testimonial-content -->
               <!--  </div>
            </div>
        </div>
    </div>
</section>-->
<!--Testimonial End-->
<!-- Contact Start -->
@include('pages.contact')
<!-- Contact End -->
<!--Google Map Start-->
<section class="google-map">
    <iframe src="{{app('contact')->map}}" class="google-map__one" allowfullscreen></iframe>
</section>
<!--Google Map End-->
@endsection