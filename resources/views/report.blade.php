<h3>Скачиваний: {{ $downloads }}</h3>

<h4>Запусков программы: {{ $keysCount }}</h4>

@foreach ($keys as $key)
    @if ($key->is_today == 1)
        <div style="background-color: yellowgreen; border: 1px solid grey; width: 400px;padding: 5px; margin-bottom: 2px;">
    @else
        <div style="background-color: #64d5ca; border: 1px solid grey; width: 400px;padding: 5px; margin-bottom: 2px;">
    @endif
        <b>Ключ:</b> {{ $key->key }}<br/>
        @if ($key->cnt > 1)
            <b>Запуск программы: <span style="color: blue;">{{ $key->cnt }}</span></b><br/>
        @else
            Запуск программы: {{ $key->cnt }}<br/>
        @endif

        <b>Дата запуска: {{ $key->dt }}</b>
    </div>
@endforeach