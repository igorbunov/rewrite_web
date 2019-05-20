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
<br/>
<br/>
                    <div class="first-step">
                        <span style="font-size: 14px;font-weight: bold; color: red;">Email и пароль необходимы для запуска программы после переустановки windows или смены компьютера</span>
                        <div class="credentials">
                            <input id="email" type="email" class="form-control" placeholder="Введите емейл" maxlength="40"><br/>
                            <input id="pass" type="text" class="form-control" placeholder="Введите пароль" maxlength="18"><br/>
                        </div>
                        <br/>
                        <button id="next-button" data-key="{{ $key }}" type="button" class="btn btn-success">Далее</button>
                    </div>

                    <div class="second-step">
                        <div id="pay-button-container"></div>
                        <img src="{{ asset('images/cards.jpeg') }}" style="width: 170px;" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop