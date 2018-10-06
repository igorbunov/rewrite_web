@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            <label for="key-field" style="font-weight: bold;">Сумма оплаты: {{ env('LIQ_PAY_PAY_AMOUNT') }} руб.</label>
            <br/>
            <span style="font-size: 18px;">Введите ваш ключ:</span>
            <input style="padding: 13px;vertical-align: top;" type="text" name="key" id="pre-activate-key" />
            <button type="button" class="btn btn-primary btn-small" id="pre-activate-next-btn">Далее</button>

            <br/>
            <br/>
            <img src="{{ asset('images/cards.jpeg') }}" />
        </div>
    </div>
@stop