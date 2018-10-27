@extends('template')

@section('content')
    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-text">
                    <h2>Контакты</h2>
                    <label  style="font-size: 20px;" class="control-label" >Контактный email: {{ env('CREATOR_EMAIL') }}</label><br/>
                    <label  style="font-size: 20px;" class="control-label" >Контактный телефон: {{ env('CREATOR_PHONE') }}</label>
                </div>
            </div>
        </div>
    </section>
@stop
