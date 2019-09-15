@extends('layouts.menu')

@section('content')
    <div class="container type-details">
        <div class="row type-row">
            <div class="col align-self-center">
                <img src="{{url('/images/types/'.$typeName.'.png')}}"/>
                <h5 class="type-name">{{strtoupper($typeName)}}</h5>
            </div>
        </div>
        <div class="row type-row">
            <div class="col align-self-center align-items-start">
                2x DAMAGE TO:
                @foreach($doubleDamageTo as $ddt)
                    <li class="type-list {{'type-list-'.$ddt['name']}}">
                        {{strtoupper($ddt['name'])}}
                    </li>
                @endforeach
            </div>
            <div class="col align-self-center align-items-start">
                1/2 DAMAGE TO:
                @foreach($halfDamageTo as $hdt)
                    <li class="type-list {{'type-list-'.$hdt['name']}}">
                        {{strtoupper($hdt['name'])}}
                    </li>
                @endforeach
            </div>
            <div class="col align-self-center align-items-start">
                NO DAMAGE TO:
                @foreach($noDamageTo as $ndt)
                    <li class="type-list {{'type-list-'.$ndt['name']}}">
                        {{strtoupper($ndt['name'])}}
                    </li>
                @endforeach
            </div>
        </div>
        <div class="row type-row">
            <div class="col align-self-center align-items-start">
                2x DAMAGE FROM:
                @foreach($doubleDamageFrom as $ddf)
                    <li class="type-list {{'type-list-'.$ddf['name']}}">
                        {{strtoupper($ddf['name'])}}
                    </li>
                @endforeach
            </div>
            <div class="col align-self-center align-items-start">
                1/2 DAMAGE FROM:
                @foreach($halfDamageFrom as $hdf)
                    <li class="type-list {{'type-list-'.$hdf['name']}}">
                        {{strtoupper($hdf['name'])}}
                    </li>
                @endforeach
            </div>
            <div class="col align-self-center align-items-start">
                NO DAMAGE FROM:
                @foreach($noDamageFrom as $ndf)
                    <li class="type-list {{'type-list-'.$ndf['name']}}">
                        {{strtoupper($ndf['name'])}}
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
