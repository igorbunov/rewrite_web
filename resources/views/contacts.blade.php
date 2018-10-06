@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron" style="margin-top: 30px;">
            <h3>Контакты</h3>

            <label  style="font-size: 20px;" class="control-label" >Контактный email: {{ env('CREATOR_EMAIL') }}</label>
            <label  style="font-size: 20px;" class="control-label" >Контактный телефон: {{ env('CREATOR_PHONE') }}</label>
        </div>
    </div>
@stop
