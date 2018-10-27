<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>Отчет</title>
<html>
    <head>
        <style>
            .block{
                background-color: #64d5ca;
                border: 1px solid grey;
                width: 500px;
                padding: 5px;
                margin-bottom: 2px;
            }
            .today{
                background-color: yellowgreen;
            }

            @media only screen and (max-width: 600px) {
                .block {
                    width: 97%;
                }
            }
        </style>
    </head>

<body>
    <h4>Скачиваний: {{ $downloads }}</h4>

    <span style="font-size: 16px;font-weight: bold;">Запусков программы: {{ $keysCount }}</span><br/>
    <span style="font-size: 16px;font-weight: bold;">Больше одного раза: {{ $moreThanOneRun }}</span><br/>

@foreach ($keys as $key)
    @if ($key->is_today == 1)
        <div class="block today">
    @else
        <div class="block">
    @endif
        <b>Ключ:</b> {{ $key->key }}<br/>
        @if ($key->cnt > 1)
            <b>Запуск программы: <span style="color: blue;">{{ $key->cnt }}</span></b><br/>
        @else
            Запуск программы: {{ $key->cnt }}<br/>
        @endif

            <b>Дата запуска: {{ $key->dt }}</b><br/>

            @if ($key->isPayed > 0)
                <span style="background-color: red;font-size: 18px;">Программа оплачена</span>
            @endif
        </div>
@endforeach
</body>
</html>