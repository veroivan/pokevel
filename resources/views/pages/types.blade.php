@extends('layouts.menu')

@section('content')
    <div class="container" id="type-grid">
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/bug')}}">
                    <img src="{{url(env('BUG_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">BUG</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dark')}}">
                    <img src="{{url(env('DARK_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">DARK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dragon')}}">
                    <img src="{{url(env('DRAGON_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">DRAGON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/electric')}}">
                    <img src="{{url(env('ELECTRIC_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">ELECTRIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fairy')}}">
                    <img src="{{url(env('FAIRY_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">FAIRY</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fighting')}}">
                    <img src="{{url(env('FIGHTING_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">FIGHTING</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/fire')}}">
                    <img src="{{url(env('FIRE_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">FIRE</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/flying')}}">
                    <img src="{{url(env('FLYING_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">FLYING</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ghost')}}">
                    <img src="{{url(env('GHOST_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">GHOST</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/grass')}}">
                    <img src="{{url(env('GRASS_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">GRASS</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ground')}}">
                    <img src="{{url(env('GROUND_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">GROUND</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ice')}}">
                    <img src="{{url(env('ICE_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">ICE</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/normal')}}">
                    <img src="{{url(env('NORMAL_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">NORMAL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/poison')}}">
                    <img src="{{url(env('POISON_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">POISON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/psychic')}}">
                    <img src="{{url(env('PSYCHIC_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">PSYCHIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/rock')}}">
                    <img src="{{url(env('ROCK_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">ROCK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/steel')}}">
                    <img src="{{url(env('STEEL_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">STEEL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/water')}}">
                    <img src="{{url(env('WATER_TYPE_IMG'))}}">
                </a>
                <h5 class="type-name">WATER</h5>
            </div>
        </div>
    </div>
@endsection
