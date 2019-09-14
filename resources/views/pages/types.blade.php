@extends('layouts.menu')

@section('content')
    <div class="container" id="type-grid">
        <div class="row type-row">
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Bug.png')}}">
                <h5 class="type-name">BUG</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Dark.png')}}">
                <h5 class="type-name">DARK</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Dragon.png')}}">
                <h5 class="type-name">DRAGON</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Electric.png')}}">
                <h5 class="type-name">ELECTRIC</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Fairy.png')}}">
                <h5 class="type-name">FAIRY</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Fighting.png')}}">
                <h5 class="type-name">FIGHTING</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Fire.png')}}">
                <h5 class="type-name">FIRE</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Flying.png')}}">
                <h5 class="type-name">FLYING</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Ghost.png')}}">
                <h5 class="type-name">GHOST</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Grass.png')}}">
                <h5 class="type-name">GRASS</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Ground.png')}}">
                <h5 class="type-name">GROUND</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Ice.png')}}">
                <h5 class="type-name">ICE</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Normal.png')}}">
                <h5 class="type-name">NORMAL</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Poison.png')}}">
                <h5 class="type-name">POISON</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Psychic.png')}}">
                <h5 class="type-name">PSYCHIC</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Rock.png')}}">
                <h5 class="type-name">ROCK</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Steel.png')}}">
                <h5 class="type-name">STEEL</h5>
            </div>
            <div class="col-sm type-tile">
                <img src="{{url('/images/types/Water.png')}}">
                <h5 class="type-name">WATER</h5>
            </div>
        </div>
    </div>
@endsection
