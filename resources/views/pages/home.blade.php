@extends('layouts.menu')

@section('content')
    <div class="container">
        <form action="{{url()->action('PokemonController@searchPokemon')}}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control form-control-lg" name="search" placeholder="Find pokemon...">
                <span class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
            </div>
        </form>
    </div>
    @yield('results')
@endsection
