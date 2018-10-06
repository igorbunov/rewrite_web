@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            @include('license_part')
            @yield('license')
        </div>
    </div>
@stop