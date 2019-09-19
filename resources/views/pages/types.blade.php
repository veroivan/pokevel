@extends('layouts.menu')

@section('content')
    <div class="container" id="type-grid">
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/bug')}}">
                    <img src="/images/types/bug.png">
                </a>
                <h5 class="type-name">BUG</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dark')}}">
                    <img src="/images/types/dark.png">
                </a>
                <h5 class="type-name">DARK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/dragon')}}">
                    <img src="/images/types/dragon.png">
                </a>
                <h5 class="type-name">DRAGON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/electric')}}">
                    <img src="/images/types/electric.png">
                </a>
                <h5 class="type-name">ELECTRIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fairy')}}">
                    <img src="/images/types/fairy.png">
                </a>
                <h5 class="type-name">FAIRY</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/fighting')}}">
                    <img src="/images/types/fighting.png">
                </a>
                <h5 class="type-name">FIGHTING</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/fire')}}">
                    <img src="/images/types/fire.png">
                </a>
                <h5 class="type-name">FIRE</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/flying')}}">
                    <img src="/images/types/flying.png">
                </a>
                <h5 class="type-name">FLYING</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ghost')}}">
                    <img src="/images/types/ghost.png">
                </a>
                <h5 class="type-name">GHOST</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/grass')}}">
                    <img src="/images/types/grass.png">
                </a>
                <h5 class="type-name">GRASS</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ground')}}">
                    <img src="/images/types/ground.png">
                </a>
                <h5 class="type-name">GROUND</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/ice')}}">
                    <img src="/images/types/ice.png">
                </a>
                <h5 class="type-name">ICE</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <a href="{{url('/types/normal')}}">
                    <img src="/images/types/normal.png">
                </a>
                <h5 class="type-name">NORMAL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/poison')}}">
                    <img src="/images/types/poison.png">
                </a>
                <h5 class="type-name">POISON</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/psychic')}}">
                    <img src="/images/types/psychic.png">
                </a>
                <h5 class="type-name">PSYCHIC</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/rock')}}">
                    <img src="/images/types/rock.png">
                </a>
                <h5 class="type-name">ROCK</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/steel')}}">
                    <img src="/images/types/steel.png">
                </a>
                <h5 class="type-name">STEEL</h5>
            </div>
            <div class="col-sm type-tile">
                <a href="{{url('/types/water')}}">
                    <img src="/images/types/water.png">
                </a>
                <h5 class="type-name">WATER</h5>
            </div>
        </div>
    </div>
@endsection
