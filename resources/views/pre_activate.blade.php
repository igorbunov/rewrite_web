@extends('template')

@section('content')
    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-text activation">
                    <h2>Активация</h2>

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
        </div>
    </section>
@stop