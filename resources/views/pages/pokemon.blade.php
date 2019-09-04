@extends('pages.home')

@section('results')
    @if(!empty($pokemon))
        <div>
            <h3 class="text-center pokevel-title">
                {{strtoupper($pokemon['name'])}}
            </h3>
            <div id="pokemon-carousel" class="carousel slide align-items-center container pokevel-carousel" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{$pokemon['sprites']['front_default']}}" class="d-block w-75 pokevel-carousel-image">
                    </div>
                    @foreach($pokemon['sprites'] as $sprite)
                        <div class="carousel-item">
                            <img src="{{$sprite}}" class="d-block w-75 pokevel-carousel-image">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#pokemon-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pokemon-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="pokemon-types" class="text-center">
                Types:
                <ul>
                    @foreach($pokemon['types'] as $type)
                        <li style="list-style-type: none; padding: 0px">{{$type['type']['name']}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <div>
            <h3 class="text-center pokevel-title">
                Not found!
            </h3>
        </div>
    @endif
@endsection
