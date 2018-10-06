@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            <h3>Активация</h3>

            <label for="key-field" style="font-weight: bold;color: blue; font-size: 16px;">Сумма оплаты: {{ env('LIQ_PAY_PAY_AMOUNT') }} руб.</label>
            <br/>
            <span style="font-size: 18px;">Введите ваш ключ:</span>
            <input style="padding: 13px;vertical-align: top;" type="text" name="key" id="pre-activate-key" />
            <button type="button" class="btn btn-primary btn-small" id="pre-activate-next-btn">Далее</button>

            <br/>
            <br/>
            <img src="{{ asset('images/cards.jpeg') }}" style="width: 170px;" />
        </div>
    </div>
@stop