@extends('template')

@section('content')
    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-text activation">
                    <h2>Активация</h2>
                    <label for="key-field">Ваш ключ: <span style="font-weight: bold;font-size: 20px;">{{ $key }}</span></label><br/>
                    <label for="key-field" style="font-weight: bold;color: blue; font-size: 16px;">Сумма оплаты: {{ env('LIQ_PAY_PAY_AMOUNT') }} руб.</label><br/>
                    <h4>После активации колличество запусков программы будет неограничено</h4>
                    {!! $button !!}
                    <img src="{{ asset('images/cards.jpeg') }}" style="width: 170px;" />
                </div>
            </div>
        </div>
    </section>
@stop