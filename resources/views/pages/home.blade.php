@extends('layouts.menu')

@section('content')
    <form action="{{url()->action('PokemonController@searchPokemon')}}" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Cerca...">
            <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    @yield('results')
@endsection
