
<div class="client-carousel pt-5 mt-5" id="products">
    <div class="container">
        @foreach ($product_title as $title)
        <h5 class="client-carousel__tilte"><span>{{$title->title_product}}</span></h5>
        @endforeach

        <!-- section-title -->
        <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel">
            @foreach ($products as $product)
            <div class="client-carousel__one__item">
                <img src="{{asset('assets/product/'.$product->image)}}" alt="{{$product->alt_image}}">
            </div><!-- /.owl-slide-item-->
            <!-- /.owl-slide-item-->
            @endforeach
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div>
