<section class="portfolio-one" id="projects">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <div class="section-title__triangle">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    @foreach ($project_title as $title)
                        <h5 class="section-title__tagline">{{ $title->subtitle_project }}</h5>
                        <h2 class="section-title__title">{{ $title->title_project }}</h2>
                    @endforeach
                </div><!-- section-title -->
            </div>
        </div>
        <div class="portfolio-one__slider nisoz-owl__carousel owl-carousel">
            @foreach ($projects as $project)
                @if ($project->image)
                    <div class="item"><!-- slider-item-start -->
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <img src="{{asset('assets/project/'.$project->image)}}" alt="{{$project->alt_image}}">
                            </div>
                        </div><!-- folio-item -->
                    </div><!-- slider-item-end -->
                @else
                    <div class="item"><!-- slider-item-start -->
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__thumb">
                                <video controls muted autoplay class="video-size">
                                    <source src="{{asset('assets/project/'.$project->video)}}" type="video/mp4">
                                </video>
                            </div>
                        </div><!-- folio-item -->
                    </div><!-- slider-item-end -->
                @endif
            @endforeach
        </div><!-- slider-item-end -->
    </div><!-- slider-end -->
</section>
