
<div class="client-carousel" id="clients">
    <div class="container">
        @foreach ($client_title as $title)
        <h5 class="client-carousel__tilte"><span>{{$title->title_client}}</span></h5>
        @endforeach
        <!-- section-title -->
        <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel">

            @foreach ($clients as $client)
            @if($client->image && $client->website)
 
                <div class="client-carousel__one__item">
                    <a href="{{$client->website}}" target="_blank"><img src="{{asset('assets/client/'.$client->image)}}" alt="{{$client->alt_image}}"></a>
                </div>
            @elseif ($client->image)
                <div class="client-carousel__one__item">
                    <img src="{{asset('assets/client/'.$client->image)}}" alt="{{$client->image}}">
                </div>
            @else
                <div class="client-carousel__one__item">
                    <h3>{{$client->client}}</h3>
                </div>
            @endif
            @endforeach
           

        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div>
