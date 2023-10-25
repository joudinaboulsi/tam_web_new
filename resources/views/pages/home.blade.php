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
<!--Testimonial Start-->

@include('pages.testimonial')
    

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