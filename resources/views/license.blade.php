@extends('template')

@section('content')
    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-text">
                    @include('license_part')
                    @yield('license')
                </div>
            </div>
        </div>
    </section>
@stop