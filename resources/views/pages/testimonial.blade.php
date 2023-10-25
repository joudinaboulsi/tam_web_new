@if (count($testimonials) > 0)
    <section class="testimonial-one">

        <div class="container">
            <div class="testimonial-one__carousel nisoz-owl__carousel owl-theme owl-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__author">
                                <img src="{{ asset('assets//testimonial/' . $testimonial->image1) }}"
                                    alt="{{ $testimonial->alt_image1 }}">
                                <div class="testimonial-one__icon"><span class="icon-quote text-white"></span></div>
                                <div class="testimonial-one__border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290"
                                        viewBox="0 0 21 290">
                                        <path class="cls-1"
                                            d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z"
                                            transform="translate(-741 -4387)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="testimonial-one__content">
                                <div class="testimonial-one__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-one__quote">
                                    {!! $testimonial->text !!}
                                </div>
                                <div class="testimonial-one__meta">
                                    <h5 class="testimonial-one__title">{{ $testimonial->name }}</h5>
                                    <span class="testimonial-one__designation">{{ $testimonial->info }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>
@else
    <section class="testimonial-one" style="display:none!important">

        <div class="container">
            <div class="testimonial-one__carousel nisoz-owl__carousel owl-theme owl-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__author">
                                <img src="{{ asset('assets//testimonial/' . $testimonial->image1) }}"
                                    alt="{{ $testimonial->alt_image1 }}">
                                <div class="testimonial-one__icon"><span class="icon-quote text-white"></span></div>
                                <div class="testimonial-one__border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="290"
                                        viewBox="0 0 21 290">
                                        <path class="cls-1"
                                            d="M761,4387h1v76.34l-20,24.11,20,26.24V4677h-1V4513.68l-20-26.16,20-24.1V4387Z"
                                            transform="translate(-741 -4387)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="testimonial-one__content">
                                <div class="testimonial-one__ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-one__quote">
                                    {!! $testimonial->text !!}
                                </div>
                                <div class="testimonial-one__meta">
                                    <h5 class="testimonial-one__title">{{ $testimonial->name }}</h5>
                                    <span class="testimonial-one__designation">{{ $testimonial->info }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>
@endif
