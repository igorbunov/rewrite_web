@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            <h3>Активация</h3>

            <label for="key-field">Ваш ключ: <span style="font-weight: bold;font-size: 20px;">{{ $key }}</span></label>
            <label for="key-field" style="font-weight: bold;color: blue; font-size: 16px;">Сумма оплаты: {{ env('LIQ_PAY_PAY_AMOUNT') }} руб.</label>
            <h4>После активации колличество запусков программы будет неограничено</h4>

            {!! $button !!}

            <img src="{{ asset('images/cards.jpeg') }}" style="width: 170px;" />
        </div>
    </div>
@stop