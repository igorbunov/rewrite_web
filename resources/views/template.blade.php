<!DOCTYPE html>
<html>
<head>
    <title>Программа для рерайта</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Рерайт, Рерайтинг, Программа для рерайта, Программа для рерайтеров, Начинающим рерайтерам, Рерайтер" />
    <meta name="author" content="mepata@yandex.ru" />
    <meta name="description" content="Данный сайт содержит информацию для начинающих и продвинутых рерайтеров" />
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body>

@yield('content')

<br/>
<br/>
<div class="container-narrow">
    <div class="jumbotron">
        <a href="{{ url('/') }}">На главную</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/support') }}">Написать в поддержку</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/license') }}">Пользовательское соглашение</a>
    </div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pre_activate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>