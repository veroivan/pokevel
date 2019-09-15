@extends('layouts.menu')

@section('content')
    <div class="container" id="type-grid">
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/bug')}}">
                    <img src="{{url('/images/types/bug.png')}}">
                </a>
                <h5 class="type-name">BUG</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dark')}}">
                    <img src="{{url('/images/types/dark.png')}}">
                </a>
                <h5 class="type-name">DARK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dragon')}}">
                    <img src="{{url('/images/types/dragon.png')}}">
                </a>
                <h5 class="type-name">DRAGON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/electric')}}">
                    <img src="{{url('/images/types/electric.png')}}">
                </a>
                <h5 class="type-name">ELECTRIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fairy')}}">
                    <img src="{{url('/images/types/fairy.png')}}">
                </a>
                <h5 class="type-name">FAIRY</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fighting')}}">
                    <img src="{{url('/images/types/fighting.png')}}">
                </a>
                <h5 class="type-name">FIGHTING</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/fire')}}">
                    <img src="{{url('/images/types/fire.png')}}">
                </a>
                <h5 class="type-name">FIRE</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/flying')}}">
                    <img src="{{url('/images/types/flying.png')}}">
                </a>
                <h5 class="type-name">FLYING</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ghost')}}">
                    <img src="{{url('/images/types/ghost.png')}}">
                </a>
                <h5 class="type-name">GHOST</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/grass')}}">
                    <img src="{{url('/images/types/grass.png')}}">
                </a>
                <h5 class="type-name">GRASS</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ground')}}">
                    <img src="{{url('/images/types/ground.png')}}">
                </a>
                <h5 class="type-name">GROUND</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ice')}}">
                    <img src="{{url('/images/types/ice.png')}}">
                </a>
                <h5 class="type-name">ICE</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/normal')}}">
                    <img src="{{url('/images/types/normal.png')}}">
                </a>
                <h5 class="type-name">NORMAL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/poison')}}">
                    <img src="{{url('/images/types/poison.png')}}">
                </a>
                <h5 class="type-name">POISON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/psychic')}}">
                    <img src="{{url('/images/types/psychic.png')}}">
                </a>
                <h5 class="type-name">PSYCHIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/rock')}}">
                    <img src="{{url('/images/types/rock.png')}}">
                </a>
                <h5 class="type-name">ROCK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/steel')}}">
                    <img src="{{url('/images/types/steel.png')}}">
                </a>
                <h5 class="type-name">STEEL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/water')}}">
                    <img src="{{url('/images/types/water.png')}}">
                </a>
                <h5 class="type-name">WATER</h5>
            </div>
        </div>
    </div>
@endsection
